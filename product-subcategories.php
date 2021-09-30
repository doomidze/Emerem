<?php
/*
Template Name: Product Subcategories
*/
?>

<?php get_header(); ?>

<main class="main">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <section class="container subcategory-page subcategory-container">

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

            <style>
                .subcategory-container section article {

                }
                .subcategory-page section,
                .subcategory-page .wp-block-column {
                    display: flex;
                    flex-direction: row;
                    flex-wrap: wrap;
                    justify-content: space-between;
                }
                .subcategory-page section article {
                    width: 250px;
                    padding: 1em;
                    text-align: center;
                    border-radius: 5px;
                    box-shadow: 0 0 5px 1px #bebaba;
                    color: white;
                    transition: 0.5s all;
                }
                .subcategory-page section article .wp-show-posts-inner {
                    cursor: pointer;
                }
                .subcategory-page .wp-show-posts-entry-title {
                    margin-top: 0.5em;
                    font-size: 14px;
                    line-height: 1.2;
                    color: white;
                }
                .subcategory-page .wp-show-posts-entry-title a {
                    font-weight: 600;
                    color: #000;
                }
                .subcategory-page section article .wp-show-posts-image img {
                    height: auto;
                    max-width: 100%;
                }
            </style>

        </section>

    </article><!-- #post-<?php the_ID(); ?> -->

</main>

<?php get_footer(); ?>
