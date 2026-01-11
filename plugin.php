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
 * Version: 1.3.2
 */

namespace MW\UniversalElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    
    // 1. Speicherslot für ELEMENTE
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'mw_universal', 
        'element',
        'MW Universal Elements',
        false
    );

    // 2. Speicherslot für MAKROS
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'mw_universal',
        'macro',
        'MW Universal Macros',
        false
    );

    // 3. Speicherslot für PRESETS
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'mw_universal',
        'preset',
        'MW Universal Presets',
        false,
    );

    // 4. Eigene KATEGORIE für das "+ ADD" Menü registrieren
    add_filter('breakdance_element_categories', function($categories) {
        $categories[] = [
            'name' => 'MW Universal',
            'slug' => 'mw_universal',
        ];
        return $categories;
    });

}, 10);
