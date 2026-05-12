<?php
/**
 * Version and Build Information
 * This file is automatically updated during the build process
 * Last updated: 2026-05-12 00:44:04
 */

// Version number (from package.json)
define('SITE_VERSION', '1.2.0');

// Build timestamp (updated automatically by build process)
define('SITE_BUILD_TIMESTAMP', '2026-05-12 00:44:04');

// Build number (incremented automatically)
define('SITE_BUILD_NUMBER', '15');

// Git commit hash (if available)
define('SITE_GIT_COMMIT', 'cd77243e4886818a35eadcda3b6ce96690b9db47');

/**
 * Get formatted build information
 */
function getSiteBuildInfo(): array {
    return [
        'version' => SITE_VERSION,
        'build_number' => SITE_BUILD_NUMBER,
        'build_date' => SITE_BUILD_TIMESTAMP,
        'git_commit' => SITE_GIT_COMMIT,
        'formatted_date' => date('M j, Y \\a\\t g:i A T', strtotime(SITE_BUILD_TIMESTAMP)),
        'short_commit' => substr(SITE_GIT_COMMIT, 0, 7)
    ];
}

/**
 * Get version string for display
 */
function getSiteVersionString(): string {
    $info = getSiteBuildInfo();
    return "v{$info['version']}.{$info['build_number']}";
}

/**
 * Get full build string for footer
 */
function getSiteBuildString(): string {
    $info = getSiteBuildInfo();
    if ($info['git_commit'] !== 'unknown') {
        return "v{$info['version']}.{$info['build_number']} ({$info['short_commit']}) - Built on {$info['formatted_date']}";
    } else {
        return "v{$info['version']}.{$info['build_number']} - Built on {$info['formatted_date']}";
    }
}
?>