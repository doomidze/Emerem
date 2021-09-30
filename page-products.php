<?php
/**
 ** Template Name: Products Page
 */

 get_header(); ?>

<main class="main">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <section class="container product-page">

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

    </article><!-- #post-<?php the_ID(); ?> -->

    <style>
        .product-page section {
            display: flex;
            align-items: baseline;
            justify-content: space-between;
            height: 300px;
            padding-top: 4em;
            padding-bottom: 4em;
        }
        .product-page section article {
            width: 250px;
            background: black;
            text-align: center;
            color: white;
            padding: 1em;
            transition: 0.5s all;
        }
        .product-page section article:hover {
            background: red;
        }
        .product-page section article .wp-show-posts-inner {
            cursor: pointer;
            height: 180px;
        }
        .product-page .wp-show-posts-entry-title {
            margin-top: 0.5em;
            font-size: 14px;
            line-height: 1.2;
            color: white;
        }
        .product-page .wp-show-posts-entry-title a {
            color: white;
        }
        .product-page section article .wp-show-posts-entry-summary {
            margin-top: 2em;
            height: 0;
            opacity: 0;
            visibility: hidden;
        }
        .product-page section article:hover .wp-show-posts-inner,
        .product-page section article:focus .wp-show-posts-inner,
        .product-page section article:active .wp-show-posts-inner {
            height: auto;
        }
        .product-page section article:hover .wp-show-posts-entry-summary,
        .product-page section article:focus .wp-show-posts-entry-summary,
        .product-page section article:active .wp-show-posts-entry-summary {
            height: auto;
            opacity: 1;
            visibility: visible;
        }
    </style>

</main>
<?php get_footer(); ?>
