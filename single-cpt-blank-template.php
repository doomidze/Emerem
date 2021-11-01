<?php
/*
Template Name: Blog Item
*/
?>

<?php get_header(); ?>
<main class="main">
        
    <?php
        if (have_posts()) {
            custom_post_types_get_custom_template();}
        }
    ?>
    <section class="interesting-products">
        <div class="container">
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            }
		?>
        </div>
    </section>
    
</main>
<?php get_footer(); ?>
