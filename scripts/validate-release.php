<?php
/**
 * Release 0.2.0 Validation Script
 * 
 * Validates the QA checklist requirements:
 * - Patterns render without hard-coded spacing values
 * - Section style variations exist in theme.json
 * - Fluid typography has proper min/max values
 * - Spacing scale tokens resolve correctly
 * - No inline hex colours in updated patterns
 */

echo "Release 0.2.0 Validation Script\n";
echo "==============================\n\n";

$validation_results = [];

// 1. Check patterns for hardcoded spacing values
echo "1. Checking patterns for hardcoded spacing values...\n";
$pattern_directory = __DIR__ . '/../patterns';
$hardcoded_spacing_found = false;

$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($pattern_directory)
);

foreach ($iterator as $file) {
    if ($file->getExtension() === 'php') {
        $content = file_get_contents($file->getPathname());
        
        // Check for hardcoded rem/px values in spacing
        if (preg_match('/style\s*=\s*["\'][^"\']*(padding[^:]*:\s*[0-9]+(rem|px))/', $content) ||
            preg_match('/style\s*=\s*["\'][^"\']*(margin[^:]*:\s*[0-9]+(rem|px))/', $content)) {
            $hardcoded_spacing_found = true;
            echo "   ⚠️  Hardcoded spacing found in: " . basename($file->getPathname()) . "\n";
        }
    }
}

if (!$hardcoded_spacing_found) {
    echo "   ✅ No hardcoded spacing values found\n";
    $validation_results['patterns_no_hardcoded_spacing'] = true;
} else {
    $validation_results['patterns_no_hardcoded_spacing'] = false;
}

// 2. Check theme.json for section style variations
echo "\n2. Checking theme.json for section style variations...\n";
$theme_json_path = __DIR__ . '/../theme.json';
$theme_json = json_decode(file_get_contents($theme_json_path), true);

$expected_styles = ['hero', 'cta', 'contrast', 'cards', 'feature', 'testimonial', 'gallery', 'pricing', 'stats', 'footer-cta'];
$found_styles = [];

if (isset($theme_json['styles']) && is_array($theme_json['styles'])) {
    foreach ($theme_json['styles'] as $style) {
        if (isset($style['name']) && in_array($style['name'], $expected_styles)) {
            $found_styles[] = $style['name'];
        }
    }
}

if (count($found_styles) === count($expected_styles)) {
    echo "   ✅ All " . count($expected_styles) . " section style variations found\n";
    $validation_results['section_styles_complete'] = true;
} else {
    echo "   ❌ Missing style variations: " . implode(', ', array_diff($expected_styles, $found_styles)) . "\n";
    $validation_results['section_styles_complete'] = false;
}

// 3. Check fluid typography has min/max values
echo "\n3. Checking fluid typography scale...\n";
$font_sizes_valid = true;

if (isset($theme_json['settings']['typography']['fontSizes'])) {
    foreach ($theme_json['settings']['typography']['fontSizes'] as $font_size) {
        if (isset($font_size['fluid']) && is_array($font_size['fluid'])) {
            if (!isset($font_size['fluid']['min']) || !isset($font_size['fluid']['max'])) {
                echo "   ⚠️  Font size '{$font_size['slug']}' missing min/max values\n";
                $font_sizes_valid = false;
            }
        }
    }
}

if ($font_sizes_valid) {
    echo "   ✅ All fluid typography has proper min/max values\n";
    $validation_results['fluid_typography_valid'] = true;
} else {
    $validation_results['fluid_typography_valid'] = false;
}

// 4. Check spacing scale tokens use clamp()
echo "\n4. Checking spacing scale tokens...\n";
$spacing_valid = true;

if (isset($theme_json['settings']['spacing']['spacingSizes'])) {
    foreach ($theme_json['settings']['spacing']['spacingSizes'] as $spacing_size) {
        if (!preg_match('/clamp\(/', $spacing_size['size'])) {
            echo "   ⚠️  Spacing token '{$spacing_size['slug']}' doesn't use clamp()\n";
            $spacing_valid = false;
        }
    }
}

if ($spacing_valid) {
    echo "   ✅ All spacing tokens use clamp() functions\n";
    $validation_results['spacing_tokens_valid'] = true;
} else {
    $validation_results['spacing_tokens_valid'] = false;
}

// 5. Check for inline hex colors in patterns
echo "\n5. Checking for inline hex colors in patterns...\n";
$hex_colors_found = false;

foreach ($iterator as $file) {
    if ($file->getExtension() === 'php') {
        $content = file_get_contents($file->getPathname());
        
        // Check for hex color codes
        if (preg_match('/#[0-9a-fA-F]{6}/', $content)) {
            $hex_colors_found = true;
            echo "   ⚠️  Hex colors found in: " . basename($file->getPathname()) . "\n";
        }
    }
}

if (!$hex_colors_found) {
    echo "   ✅ No inline hex colors found in patterns\n";
    $validation_results['no_hex_colors'] = true;
} else {
    $validation_results['no_hex_colors'] = false;
}

// 6. Check for inline typography values in patterns
echo "\n6. Checking for inline typography values in patterns...\n";
$inline_typography_found = false;

$typography_iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($pattern_directory)
);

foreach ($typography_iterator as $file) {
    if ($file->getExtension() === 'php' || $file->getExtension() === 'html') {
        $content = file_get_contents($file->getPathname());
        
        // Check for inline fontSize with vw, px, clamp values
        if (preg_match('/fontSize["\']:\s*["\'][^"\']*(?:vw|px|clamp)/i', $content) ||
            preg_match('/font-size:\s*[^;]*(?:vw|px|clamp)/i', $content)) {
            $inline_typography_found = true;
            echo "   ⚠️  Inline typography found in: " . basename($file->getPathname()) . "\n";
        }
    }
}

if (!$inline_typography_found) {
    echo "   ✅ No inline typography values found in patterns\n";
    $validation_results['no_inline_typography'] = true;
} else {
    $validation_results['no_inline_typography'] = false;
}

// Summary
echo "\n" . str_repeat("=", 50) . "\n";
echo "VALIDATION SUMMARY\n";
echo str_repeat("=", 50) . "\n";

$total_checks = count($validation_results);
$passed_checks = count(array_filter($validation_results));

foreach ($validation_results as $check => $passed) {
    $status = $passed ? "✅ PASS" : "❌ FAIL";
    $readable_name = str_replace('_', ' ', ucfirst($check));
    echo "{$status} - {$readable_name}\n";
}

echo "\nResult: {$passed_checks}/{$total_checks} checks passed\n";

if ($passed_checks === $total_checks) {
    echo "🎉 All validation checks passed! Release 0.2.0 is ready.\n";
    exit(0);
} else {
    echo "⚠️  Some validation checks failed. Please review and fix issues.\n";
    exit(1);
}