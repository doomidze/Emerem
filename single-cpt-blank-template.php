<?php
/*
Template Name: Blog Item
*/
?>

<?php get_header(); ?>
<main class="main">
    <div class="container">
    <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            }
		?>  
    <?php
        if (have_posts()) {
            custom_post_types_get_custom_template();}
        }
    ?>
    </div>

</main>
<?php get_footer(); ?>
