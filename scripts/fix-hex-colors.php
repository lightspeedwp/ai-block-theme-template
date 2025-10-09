<?php
/**
 * Fix Hex Colors Script for Release 0.2.0
 * 
 * Replaces remaining hex color codes with appropriate design tokens
 */

echo "Fixing hex colors in patterns...\n";

$pattern_directory = __DIR__ . '/../patterns';
$fixed_files = [];

// Common hex color mappings to design tokens
$color_mappings = [
    // Primary blues
    '#007cba' => 'var(--wp--preset--color--primary)',
    '#006ba1' => 'var(--wp--preset--color--secondary)',
    
    // Black and white variants
    '#000000' => 'var(--wp--preset--color--contrast)',
    '#000' => 'var(--wp--preset--color--contrast)',
    '#ffffff' => 'var(--wp--preset--color--base)',
    '#fff' => 'var(--wp--preset--color--base)',
    
    // Gray variations to neutral scale
    '#f8f9fa' => 'var(--wp--preset--color--neutral-100)',
    '#e9ecef' => 'var(--wp--preset--color--neutral-200)',
    '#dee2e6' => 'var(--wp--preset--color--neutral-300)',
    '#ced4da' => 'var(--wp--preset--color--neutral-400)',
    '#adb5bd' => 'var(--wp--preset--color--neutral-500)',
    '#6c757d' => 'var(--wp--preset--color--neutral-600)',
    '#495057' => 'var(--wp--preset--color--neutral-700)',
    '#343a40' => 'var(--wp--preset--color--neutral-800)',
    '#212529' => 'var(--wp--preset--color--neutral-900)',
    
    // Light gray variations
    '#f0f0f0' => 'var(--wp--preset--color--neutral-200)',
    '#f5f5f5' => 'var(--wp--preset--color--neutral-100)',
    '#e0e0e0' => 'var(--wp--preset--color--neutral-300)',
    '#cccccc' => 'var(--wp--preset--color--neutral-400)',
    '#999999' => 'var(--wp--preset--color--neutral-500)',
    '#666666' => 'var(--wp--preset--color--neutral-600)',
    '#333333' => 'var(--wp--preset--color--neutral-800)',
    
    // Common accent colors
    '#c73e1d' => 'var(--wp--preset--color--accent)',
    '#red' => 'var(--wp--preset--color--accent)',
    
    // Tertiary/light blues
    '#f0f6fc' => 'var(--wp--preset--color--tertiary)',
    
    // Any other unknown colors default to primary
];

function fix_pattern_file($file_path, $color_mappings, &$fixed_files) {
    $content = file_get_contents($file_path);
    $original_content = $content;
    
    // First, apply specific color mappings
    foreach ($color_mappings as $hex => $token) {
        $content = str_ireplace($hex, $token, $content);
    }
    
    // Then catch any remaining 6-digit hex colors and map to primary
    $content = preg_replace('/#[0-9a-fA-F]{6}/', 'var(--wp--preset--color--primary)', $content);
    
    // Catch any remaining 3-digit hex colors and map to primary  
    $content = preg_replace('/#[0-9a-fA-F]{3}(?![0-9a-fA-F])/', 'var(--wp--preset--color--primary)', $content);
    
    // Save the file if there were changes
    if ($content !== $original_content) {
        file_put_contents($file_path, $content);
        $fixed_files[] = basename($file_path);
        return true;
    }
    return false;
}

$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($pattern_directory)
);

$fixed_count = 0;
foreach ($iterator as $file) {
    if ($file->getExtension() === 'php') {
        if (fix_pattern_file($file->getPathname(), $color_mappings, $fixed_files)) {
            $fixed_count++;
        }
    }
}

echo "Fixed hex colors in {$fixed_count} pattern files:\n";
foreach ($fixed_files as $file) {
    echo "- {$file}\n";
}

echo "\nHex color cleanup completed!\n";