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
                <div class="flex justify-between items-center pt-8 pb-6 bg-white z-20">
                    <div class="logo absolute top-0 max-w-[160px] lg:max-w-[200px] p-2.5 rounded-full bg-white z-20">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="">
                            <img class="w-full max-sm:max-w-[160px]" src="<?php echo esc_url($logo['url']); ?>"
                                 data-no-lazy="1" alt="<?php echo esc_attr($logo['title']); ?>" />
                        </a>
                    </div>
                    <div class="main-menu max-lg:flex-start lg:w-full flex gap-8 ml-[234px]">
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
    <div class="site">
        <div class="site-main">