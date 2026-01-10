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
 * Version: 1.2.0
 */

namespace MW\UniversalElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    
    // WICHTIG: Hier jetzt 'mw_universal' mit UNTERSTRICH nutzen
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'mw_universal', 
        'element',
        'MW Universal Elements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'mw_universal',
        'macro',
        'MW Universal Macros',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'mw_universal',
        'preset',
        'MW Universal Presets',
        false,
    );
}, 10);
