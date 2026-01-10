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
 * Version: 1.0.0
 */

namespace MW\UniversalElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    
    // Registriert den Speicherort für neue ELEMENTE
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'MW\UniversalElements', // Dein technischer Namespace
        'element',
        'MW Universal Elements', // So erscheint es im Studio-Menü
        false
    );

    // Registriert den Speicherort für neue MAKROS
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'MW\UniversalElements',
        'macro',
        'MW Universal Macros',
        false,
    );

    // Registriert den Speicherort für neue PRESETS (Design-Vorlagen)
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'MW\UniversalElements',
        'preset',
        'MW Universal Presets',
        false,
    );
}, 10);
