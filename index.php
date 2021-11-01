<?php
/*
Template Name: Blog Page
*/
?>

<?php get_header(); ?>
<main class="main">
    <section class="projects container">
        <?php
		if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
		}
		?>
        <h1 class="projects-title"><?php single_cat_title()?></h1>
        <div class="projects-wrapper row">
            <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post(); ?>
                        <div class="product-item col-md-4">
                            <div class="product-item-wrapper">
                                <div class="product-item-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/pipe4.png" alt="" style="height: 100%;width: 100%;">
                                </div>
                                <div class="container product-item-wrapper">
                                    <h5 class="product-item-title"><?php the_title(); ?></h5>
                                    <div class="product-item-info">
                                        <?php the_content(); ?>
                                    </div>
                                    <a href="<?php the_permalink() ?>" class="product-item-more-info">
                                        <div class="product-item-more-info-title">Детальнее</div>
                                        <div class="product-item-more-info-svg">
                                            <svg width="42" height="15" viewBox="0 0 42 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.09313 6.17017C1.16119 6.15913 1.23006 6.15404 1.29897 6.15493H37.4857L37.2298 6.036C36.9797 5.91769 36.7522 5.75668 36.5574 5.56025L33.2669 2.27168C32.8336 1.85823 32.7608 1.19312 33.0944 0.69578C33.4827 0.16581 34.2273 0.0507396 34.7576 0.438805C34.8005 0.470174 34.8412 0.504368 34.8795 0.541164L40.8297 6.48795C41.2947 6.95217 41.2951 7.70522 40.8306 8.16996L40.8297 8.17089L34.8795 14.1177C34.4141 14.5815 33.6606 14.5805 33.1965 14.1153C33.1599 14.0787 33.1258 14.0398 33.0944 13.9987C32.7608 13.5014 32.8336 12.8363 33.2669 12.4228L36.5515 9.12833C36.7261 8.95364 36.9268 8.80716 37.1465 8.69421L37.5035 8.53365H1.36446C0.756531 8.55621 0.223167 8.13179 0.108959 7.53459C0.00374985 6.8862 0.444366 6.27535 1.09313 6.17017Z" fill="black"/>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
            ?>
        </div>
    </section>

</main>
<?php get_footer(); ?>
