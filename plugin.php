<?php
/**
 * Plugin Name: MW Universal Elements
 * Description: Modulares Master-Plugin für eigene High-End Komponenten.
 * Author: Martin Winter
 * Version: 1.4.0
 * Text Domain: mw-universal
 */

namespace MW\UniversalElements;

// 1. Konstanten festlegen (Zentraler Abgriff)
define('MW_UE_VERSION', '1.4.0');
define('MW_UE_PATH', plugin_dir_path(__FILE__));

// 2. Module laden
require_once MW_UE_PATH . 'inc/locations.php';
require_once MW_UE_PATH . 'inc/categories.php';
