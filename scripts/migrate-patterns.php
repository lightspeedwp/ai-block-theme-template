<?php
/**
 * Pattern Migration Script for Release 0.2.0
 * 
 * Migrates patterns to:
 * - Use lsx-design namespace consistently
 * - Update to new design token system
 * - Remove hardcoded spacing/color values
 * - Standardize pattern headers
 */

echo "Starting Pattern Migration for Release 0.2.0...\n";

// Define the patterns directory
$pattern_directory = __DIR__ . '/../patterns';
$migration_log = [];

// Function to migrate a single pattern file
function migrate_pattern_file($file_path, &$migration_log) {
    $content = file_get_contents($file_path);
    $original_content = $content;
    
    // 1. Update namespace in slug from ollie/* or lsx/* to lsx-design/*
    $content = preg_replace(
        '/Slug:\s*(ollie|lsx)\/([a-zA-Z0-9\-]+)/m',
        'Slug: lsx-design/$2',
        $content
    );
    
    // 2. Update categories from ollie/* to lsx-design/*
    $content = preg_replace(
        '/Categories:\s*([^,\n]*)(ollie|lsx)\/([a-zA-Z0-9\-\/, ]+)/m',
        'Categories: lsx-design/sections',
        $content
    );
    
    // 3. Update text domain from 'ollie' to 'lsx-design'
    $content = str_replace("'ollie'", "'lsx-design'", $content);
    
    // 4. Update old spacing tokens to new numeric system
    $spacing_map = [
        'var:preset|spacing|small' => 'var:preset|spacing|30',
        'var:preset|spacing|medium' => 'var:preset|spacing|50',
        'var:preset|spacing|large' => 'var:preset|spacing|70',
        'var:preset|spacing|x-large' => 'var:preset|spacing|80',
        'var:preset|spacing|xx-large' => 'var:preset|spacing|90',
        'var(--wp--preset--spacing--small)' => 'var(--wp--preset--spacing--30)',
        'var(--wp--preset--spacing--medium)' => 'var(--wp--preset--spacing--50)',
        'var(--wp--preset--spacing--large)' => 'var(--wp--preset--spacing--70)',
        'var(--wp--preset--spacing--x-large)' => 'var(--wp--preset--spacing--80)',
        'var(--wp--preset--spacing--xx-large)' => 'var(--wp--preset--spacing--90)',
        // Update existing prefixed tokens to remove prefix
        'var:preset|spacing|spacing-10' => 'var:preset|spacing|10',
        'var:preset|spacing|spacing-20' => 'var:preset|spacing|20',
        'var:preset|spacing|spacing-30' => 'var:preset|spacing|30',
        'var:preset|spacing|spacing-40' => 'var:preset|spacing|40',
        'var:preset|spacing|spacing-50' => 'var:preset|spacing|50',
        'var:preset|spacing|spacing-60' => 'var:preset|spacing|60',
        'var:preset|spacing|spacing-70' => 'var:preset|spacing|70',
        'var:preset|spacing|spacing-80' => 'var:preset|spacing|80',
        'var:preset|spacing|spacing-90' => 'var:preset|spacing|90',
        'var:preset|spacing|spacing-100' => 'var:preset|spacing|100',
        'var(--wp--preset--spacing--spacing-10)' => 'var(--wp--preset--spacing--10)',
        'var(--wp--preset--spacing--spacing-20)' => 'var(--wp--preset--spacing--20)',
        'var(--wp--preset--spacing--spacing-30)' => 'var(--wp--preset--spacing--30)',
        'var(--wp--preset--spacing--spacing-40)' => 'var(--wp--preset--spacing--40)',
        'var(--wp--preset--spacing--spacing-50)' => 'var(--wp--preset--spacing--50)',
        'var(--wp--preset--spacing--spacing-60)' => 'var(--wp--preset--spacing--60)',
        'var(--wp--preset--spacing--spacing-70)' => 'var(--wp--preset--spacing--70)',
        'var(--wp--preset--spacing--spacing-80)' => 'var(--wp--preset--spacing--80)',
        'var(--wp--preset--spacing--spacing-90)' => 'var(--wp--preset--spacing--90)',
        'var(--wp--preset--spacing--spacing-100)' => 'var(--wp--preset--spacing--100)',
        'spacing|l' => 'spacing|70',
        'spacing|m' => 'spacing|50',
        'spacing|s' => 'spacing|30',
    ];
    
    foreach ($spacing_map as $old => $new) {
        $content = str_replace($old, $new, $content);
    }
    
    // 5. Update old font-size tokens to new numeric system
    $font_size_map = [
        'var(--wp--preset--font-size--small)' => 'var(--wp--preset--font-size--200)',
        'var(--wp--preset--font-size--medium)' => 'var(--wp--preset--font-size--300)',
        'var(--wp--preset--font-size--large)' => 'var(--wp--preset--font-size--500)',
        'var(--wp--preset--font-size--x-large)' => 'var(--wp--preset--font-size--600)',
        'var(--wp--preset--font-size--xx-large)' => 'var(--wp--preset--font-size--800)',
        // Update existing prefixed tokens to remove prefix
        'var(--wp--preset--font-size--font-size-100)' => 'var(--wp--preset--font-size--100)',
        'var(--wp--preset--font-size--font-size-200)' => 'var(--wp--preset--font-size--200)',
        'var(--wp--preset--font-size--font-size-300)' => 'var(--wp--preset--font-size--300)',
        'var(--wp--preset--font-size--font-size-400)' => 'var(--wp--preset--font-size--400)',
        'var(--wp--preset--font-size--font-size-500)' => 'var(--wp--preset--font-size--500)',
        'var(--wp--preset--font-size--font-size-600)' => 'var(--wp--preset--font-size--600)',
        'var(--wp--preset--font-size--font-size-700)' => 'var(--wp--preset--font-size--700)',
        'var(--wp--preset--font-size--font-size-800)' => 'var(--wp--preset--font-size--800)',
        'var(--wp--preset--font-size--font-size-900)' => 'var(--wp--preset--font-size--900)',
        '"fontSize":"small"' => '"fontSize":"200"',
        '"fontSize":"medium"' => '"fontSize":"300"',
        '"fontSize":"large"' => '"fontSize":"500"',
        '"fontSize":"x-large"' => '"fontSize":"600"',
        '"fontSize":"800"' => '"fontSize":"800"',
        'font-size|xxl' => 'font-size|800',
        'font-size|xl' => 'font-size|700',
        'font-size|l' => 'font-size|600',
        'font-size|m' => 'font-size|400',
    ];
    
    foreach ($font_size_map as $old => $new) {
        $content = str_replace($old, $new, $content);
    }
    
    // 7. Add proper version and license if missing
    if (!preg_match('/Version:/', $content)) {
        // Insert version/license before closing of header comment block (*/)
        $content = preg_replace(
            '/(\s*\*\/)/m',
            " * Version: 0.2.0\n * License: GPL-2.0-or-later\n$1",
            $content,
            1 // Only replace the first occurrence (the header block)
        );
    }
    
    // Save the file if there were changes
    if ($content !== $original_content) {
        file_put_contents($file_path, $content);
        $base_dir = dirname(__DIR__) . '/patterns/';
        $relative_path = str_replace($base_dir, '', $file_path);
        $migration_log[] = "Updated: " . basename($file_path);
        return true;
    }
    return false;
}

// Find and migrate all pattern files
$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($pattern_directory)
);

$updated_count = 0;
foreach ($iterator as $file) {
    if ($file->getExtension() === 'php') {
        if (migrate_pattern_file($file->getPathname(), $migration_log)) {
            $updated_count++;
        }
    }
}

echo "Migration completed. Updated {$updated_count} pattern files.\n";
foreach ($migration_log as $log_entry) {
    echo "- {$log_entry}\n";
}