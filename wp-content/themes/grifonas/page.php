<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header();
$fields = get_fields();
?>

<div class="main">
    <?php if ( isset($fields['flexible_content']) && $fields['flexible_content'] ) { 
        echo get_template_part('/template-parts/content-renderer', '', $fields); 
     } else { 
        the_content(); 
     }
    ?>
</div>

<?php
get_footer();
?>