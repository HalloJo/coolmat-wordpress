<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Coolmat
 */

get_header();
?>

<main id="primary" class="site-main">

	<!-- HERO -->
	<section class="hero flex-center">
		<div class="hero-inner container flex-center">
			<h1 class="hero-title"><span>cool mat</span> fried seaweed roll</h1>
			<h1 class="hero-description"><span>cool mat</span> is a restaurant that creates future flavor nostalgia of
				street food.
			</h1>
		</div>
	</section>

	<section id="intro" class="intro flex-center">
		<div class="intro-inner container flex-center">
			<p class="intro-eyebrow">introducing cool mat</p>
			<p class="intro-synopsis">street food that was born in tough times. street food that everybody loves.
				<span>cool mat</span> is on a mission to provide future flavor nostalgia of street food for men, women,
				children, grandpas
				and grandmas. we only use the best ingredients.
			</p>
		</div>
	</section>

	<section id="food-menu" class="food-menu flex-center">

		<div class="food-menu-inner container">
			<p>menu</p>
		</div>

		<div class="food">
			<?php
            if (have_posts()):

	            if (is_home() && !is_front_page()):
            ?>
			<?php
	            endif;

	            /* Start the Loop */
	            $item_number = 1;

	            while (have_posts()):
		            the_post();
		            /*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
            ?>

			<?php get_template_part('template-parts/content', get_post_type());
		            $item_number++;
	            endwhile;
	            the_posts_navigation();
            else:
	            get_template_part('template-parts/content', 'none');
            endif;
            ?>

		</div>


	</section>


</main><!-- #main -->

<?php
get_footer();