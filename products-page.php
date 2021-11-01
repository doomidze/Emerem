<?php
/*
Template Name: Products Page Промышленные насосы
*/
?>

<?php get_header(); ?>

<main class="main">
    
    <section class="store-products container">        
        <?php
		if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
		}
		?>
        <?php
        if ( ! is_front_page() ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
        endif;

        /* Start the Loop */
        while ( have_posts() ) :
            the_post();
        ?>
            <div class="entry-content">
            <?php
                the_content();

                wp_link_pages(
                    array(
                        'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
                        'after'    => '</nav>',
                        /* translators: %: Page number. */
                        'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
                    )
                );
            ?>
            </div><!-- .entry-content -->

        <?php endwhile; // End of the loop. ?>

    </section>

</main>

<?php get_footer(); ?>
