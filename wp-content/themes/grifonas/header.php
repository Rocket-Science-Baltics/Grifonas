<?php 

$logo =  get_field('header_logo', 'options');

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <!-- <?php get_template_part( 'template-parts/favicons' ); ?> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="bg-white">
        <div class="container z-20 bg-white">
            <div class="w-full z-20 relative">
                <div class="flex lg:justify-between max-lg:justify-end items-center pt-8 pb-6 bg-white z-20">
                    <div class="logo absolute top-0 left-0 max-w-[160px] lg:max-w-[200px] p-2.5 rounded-full bg-white z-20">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="">
                            <img class="w-full max-sm:max-w-[160px]" src="<?php echo esc_url($logo['url']); ?>"
                                 data-no-lazy="1" alt="<?php echo esc_attr($logo['title']); ?>" />
                        </a>
                    </div>
                    <button type="button" class="btn-bars relative lg:hidden" title="Menu Hamburger">
                        <svg width="30" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="#000000" stroke-width="2" d="M0 1h30M0 9h30M0 17h30"></path>
                        </svg>
                    </button>
                    <div class="max-lg:bg-white navbar-collapse items-center flex transition-all duration-700 ml-[234px] max-lg:items-center
                    max-lg:fixed max-lg:text-center max-lg:px-12
                    max-lg:z-[100] max-lg:justify-center max-sm:w-full max-lg:w-1/2  max-lg:h-full
                    max-lg:top-0 max-lg:right-0 max-lg:flex-col max-lg:translate-x-full">
                        <button
                                class="btn-close absolute top-20 right-12 transition-all duration-700  lg:hidden hover:rotate-180"
                                title="Close Button">
                            <svg width="21" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="#000000" d="m1.354.646 19 19M.646 19.646l19-19"></path>
                            </svg>
                        </button>
                        <div class="mobile-logo mb-8 w-[200px] lg:hidden">
                            <a class="items-center leading-none flex flex-col logo"
                               href="<?php echo home_url(); ?>">
                                <img class="w-full max-sm:max-w-[200px]" src="<?php echo $logo['url']; ?>"
                                     alt="<?php echo $logo['title']; ?>" data-no-lazy="1" />
                            </a>
                        </div>
                        <?php
                        wp_nav_menu([
                            'theme_location' => 'header-menu',
                            'container' => false,
                            'menu_class' => 'lg:flex max-lg:flex-col max-lg:items-center flex gap-8',
                            'li_class' => 'font-semibold',
                            'walker' => new My_Walker_Nav_Menu()
                        ]);
                        ?>
                    </div>
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
                    <script type="text/javascript">
                        document.getElementById('language_switcher').addEventListener('change', function (event) {
                            location.href = event.currentTarget.value
                        });
                    </script>
                </div>
            </div>
        </div>
    </header>
    <div class="site">
        <div class="site-main">