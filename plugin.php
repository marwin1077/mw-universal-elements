<?php

/**
 * Plugin Name: MW Universal Elements
 * Plugin URI: https://mwears.at/
 * Description: Zentrale Bibliothek für eigene High-End Komponenten in Oxygen 6 und Breakdance.
 * Author: Martin Winter
 * Author URI: https://mwears.at/
 * License: GPLv2
 * Text Domain: mw-universal
 * Domain Path: /languages/
 * Version: 1.1.0
 */

namespace MW\UniversalElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    
    // ELEMENTE - Technischer Slug: 'mw-universal' (Kleingeschrieben, ohne Backslash!)
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'mw-universal', 
        'element',
        'MW Universal Elements',
        false
    );

    // MAKROS
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'mw-universal',
        'macro',
        'MW Universal Macros',
        false,
    );

    // PRESETS
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'mw-universal',
        'preset',
        'MW Universal Presets',
        false,
    );
}, 10);
