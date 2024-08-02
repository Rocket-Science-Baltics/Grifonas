<?php 

$logo =  get_field('header_logo', 'options');

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- <?php get_template_part( 'template-parts/favicons' ); ?> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="bg-white">
        <div class="container z-20 bg-white">
            <div class="w-full z-20 relative">
                <div class="flex justify-between items-center pt-8 pb-6 bg-white z-20">
                    <div class="logo absolute top-0 max-w-[160px] lg:max-w-[200px] p-2.5 rounded-full bg-white z-20">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img class="w-full max-sm:max-w-[160px]" src="<?php echo esc_url($logo['url']); ?>"
                                 data-no-lazy="1" alt="<?php echo esc_attr($logo['title']); ?>" />
                        </a>
                    </div>
                    <div class="main-menu max-lg:flex-start flex gap-8">
                        <?php
                        wp_nav_menu([
                            'theme_location' => 'header-menu',
                            'container' => false,
                            'menu_class' => 'hidden lg:flex flex gap-8',
                            'li_class' => 'font-semibold',
                            'walker' => new My_Walker_Nav_Menu()
                        ]);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="site pt-24 lg:pt-[6.5rem]">
        <div class="site-main">