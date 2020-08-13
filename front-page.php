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
 * @package ag-uikit
 */

get_header();
?>
<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<div class="uk-container">
		<?php
			while ( have_posts() ) :
				the_post();
		?>

			<div class="intro-text-section">
				<div class="uk-container">
					<h1>our people</h1>
					<p>We all have defined roles here, sure. It helps with organization. But what defines us is that our work is never limited by titles or trades — they’re the starting point. So let’s get started.</p>
				</div>
			</div>

			<div class="link-section">

				<div class="uk-container uk-container-small">
					<h2>we approach creative lorem ipsum dolor philosophy sit amet</h2>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

					<a href="#">about us</a>
				</div>

			</div>

			<div class="bold-info-section">
				<div class="inner-wrapper">
					<div class="uk-container">
						<p>A variation of the exisiting bio that is more personality-driven and interest driven. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id.</p>
					</div>
				</div>
			</div>

		<?php
			endwhile; // End of the loop.
		?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #content -->

<?php
get_footer();
