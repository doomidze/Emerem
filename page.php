<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 */

 get_header(); ?>

<main class="main">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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

    </article><!-- #post-<?php the_ID(); ?> -->

</main>
<?php get_footer(); ?>
