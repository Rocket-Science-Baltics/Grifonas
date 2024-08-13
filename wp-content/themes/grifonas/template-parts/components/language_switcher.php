<?php if (function_exists('pll_the_languages')): ?>
<select name="language_switcher" id="language_switcher" class="pll-switcher-select">
    <?php
    $languages = pll_the_languages([
        'dropdown' => 1,
        'show_flags' => 0,
        'display_names_as' => 'slug',
        'raw' => 1
    ]);

    if (!empty($languages)) {
        foreach ($languages as $language) {
            $lang_name = esc_html(strtoupper($language['slug']));
            $lang_locale = esc_attr($language['locale']);
            $lang_url = esc_url($language['url']);
            $selected = $language['current_lang'] ? 'selected="selected"' : '';

            echo '<option value="' . $lang_url . '" lang="' . $lang_locale . '" ' . $selected . '>' . $lang_name . '</option>';
        }
    }
    ?>
</select>
<?php endif; ?>
