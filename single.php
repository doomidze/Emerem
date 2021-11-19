<?php
/*
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*/
?>

<?php get_header(); ?>

<main class="main product">

    <div class="container">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php
            if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            }
            ?>
            <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post(); ?>
                        <section id="project-item" class="project-item container">
                                <h1 class="project-item-title"><?php the_title()?></h1>
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </section>
                        <?php
                    }
                }
            ?>

        </article><!-- #post-<?php the_ID(); ?> -->

    </div>

</main>
<?php get_footer(); ?>
