<?php
namespace MW\UniversalElements;

// 1. Kategorien im System registrieren
add_action('breakdance_loaded', function() {
    // Standard-Kategorie
    if (function_exists('\Breakdance\Elements\registerCategory')) {
        \Breakdance\Elements\registerCategory('mw_universal', 'MW Universal');
        
        // Dynamische Kategorien aus der Datenbank laden
        $extra_cats = get_option('mw_universal_extra_categories', '');
        if (!empty($extra_cats)) {
            $lines = explode("\n", str_replace("\r", "", $extra_cats));
            foreach ($lines as $line) {
                $name = trim($line);
                if (!empty($name)) {
                    \Breakdance\Elements\registerCategory(sanitize_title($name), $name);
                }
            }
        }
    }
}, 11); // Priorität 11, damit es nach den Standard-Kategorien kommt

// 2. Die Einstellungsseite im Backend
add_action('admin_menu', function() {
    add_options_page('MW Universal', 'MW Universal', 'manage_options', 'mw-universal-settings', function() {
        ?>
        <div class="wrap">
            <h1>MW Universal - Kategorien</h1>
            <form method="post" action="options.php">
                <?php settings_fields('mw_universal_group'); ?>
                <p>Eigene Kategorien für das Element Studio (eine pro Zeile):</p>
                <textarea name="mw_universal_extra_categories" rows="8" cols="50"><?php echo esc_textarea(get_option('mw_universal_extra_categories')); ?></textarea>
                <?php submit_button(); ?>
            </form>
        </div>
        <?php
    });
});

add_action('admin_init', function() {
    register_setting('mw_universal_group', 'mw_universal_extra_categories');
});
