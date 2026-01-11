<?php
namespace MW\UniversalElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    $path = getDirectoryPathRelativeToPluginFolder(dirname(__DIR__));
    $slug = 'mw_universal';

    \Breakdance\ElementStudio\registerSaveLocation($path . '/elements', $slug, 'element', 'MW Universal Elements', false);
    \Breakdance\ElementStudio\registerSaveLocation($path . '/macros', $slug, 'macro', 'MW Universal Macros', false);
    \Breakdance\ElementStudio\registerSaveLocation($path . '/presets', $slug, 'preset', 'MW Universal Presets', false);
}, 10);
