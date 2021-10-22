<?php
/*
    Template Name: About Us Page
*/
?>

<?php $page_id = get_the_ID(); ?>
<?php get_header(); ?>

<main class="main ">
    <section class="about-us-page-wrapper container">
    <?php
        if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        }
    ?>
        <h2><?php echo carbon_get_post_meta($page_id, 'about_us_title_page') ?></h2>
        <p>
            <?php echo carbon_get_post_meta($page_id, 'about_us_text') ?>
        </p>
    </section>
</main>
<?php get_footer(); ?>
