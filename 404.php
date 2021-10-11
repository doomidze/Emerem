<?php
/**
 * The template for displaying 404 pages (not found)
 *
 *
 *
 * @package WordPress
 * @subpackage Emerem
 * @since Emerem 1.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="error-404 not-found container">
				<?php
					if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
					}
				?>
				<header class="page-header">
					<h1 class="page-title">Ой, страница не найдена.</h1>
				</header><!-- .page-header -->

			</div><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
