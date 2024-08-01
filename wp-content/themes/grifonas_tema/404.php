<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package TedxShoreditch
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="pt-40 h-[100vh]">
			<div class="flex h-full items-center flex-col justify-center error-404 not-found">
				<h1 class="mb-8 md:text-[12rem]">
					404
				</h1>
				<h2 class="text-center text-white">
					Oops! That page <br /> can&rsquo;t be found.
				</h2>
				<a href="<?php echo home_url(); ?>" class="mt-8 text-white px-4 py-2 rounded">Go Back</a>
			</div>
				
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
