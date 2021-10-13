<footer class="footer">
    <div class="container">
        <div class="row">
            <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                <div class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                </div>
            <?php endif; ?>
            <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                <div class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                </div>
            <?php endif; ?>
            <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                <div class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                </div>
            <?php endif; ?>
            <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
                <div class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'footer-4' ); ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="row footer-inner">
            <div class="col-6 col-lg-3 company-info">
                <div class="footer-logo">
                    <a href="<?php echo get_home_url(); ?>" id="scroll"><img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_logo_footer' ), 'full'); ?>" alt=""></a>
                </div>
            </div>
            <div class="col-6 col-lg-3 desktop-footer footer-projects">
                <?php if ( has_nav_menu( 'categories' ) ) : ?>
                    <?php
                        wp_nav_menu([
                                'theme_location'  => 'categories',
                                'container'       => null,
                                'menu_class'      => 'pages-links',
                                'fallback_cb'     => false,
                            ]
                        );
                    ?>
                <?php endif; ?>
            </div>
            <div class="col-6 col-lg-3 desktop-footer footer-about">
                <?php if ( has_nav_menu( 'footer' ) ) : ?>
                    <?php
                        wp_nav_menu([
                                'theme_location'  => 'footer',
                                'container'       => null,
                                'menu_class'      => 'important-links',
                                'fallback_cb'     => false,
                            ]
                        );
                    ?>
                <?php endif; ?>
            </div>
            <div class="col-6 col-lg-3 footer-links">
                    <div class="links-item">
                        <div class="links-item__svg">
                            <svg width="18" height="22" viewBox="0 0 15 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.5 0C3.36453 0 0 3.43052 0 7.64709C0 12.9469 7.50737 22 7.50737 22C7.50737 22 15 12.6863 15 7.64709C15 3.43052 11.6356 0 7.5 0ZM9.76291 9.88617C9.13894 10.5222 8.31953 10.8403 7.5 10.8403C6.6806 10.8403 5.86093 10.5222 5.23723 9.88617C3.98942 8.61403 3.98942 6.54401 5.23723 5.27173C5.84144 4.6554 6.64517 4.31594 7.5 4.31594C8.35483 4.31594 9.15843 4.65553 9.76291 5.27173C11.0107 6.54401 11.0107 8.61403 9.76291 9.88617Z" fill="#EB1C24"/>
                            </svg>
                        </div>
                        <div class="links-item__link"><a href=""><?php echo $GLOBALS['emerem']['address']; ?></a></div>
                    </div>
                    <div class="links-item">
                        <div class="links-item__svg">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 12.5C15.755 12.5 14.55 12.3 13.43 11.93C13.085 11.82 12.69 11.9 12.415 12.175L10.215 14.38C7.38005 12.94 5.06503 10.625 3.62503 7.79503L5.82502 5.58502C6.10003 5.31 6.18 4.91503 6.07003 4.57003C5.70005 3.45005 5.50003 2.24503 5.50003 1.00003C5.49998 0.444984 5.055 0 4.5 0H0.999984C0.45 0 0 0.444984 0 0.999984C0 10.39 7.61001 18 17 18C17.555 18 18 17.555 18 17V13.5C18 12.945 17.555 12.5 17 12.5Z" fill="#EB1C24"/>
                            </svg>
                        </div>
                        <div class="links-item__link"><a href="tel:<?php echo $GLOBALS['emerem']['phone_digits']; ?>"><?php echo $GLOBALS['emerem']['phone']; ?></a></div>
                    </div>
                    <div class="links-item">
                        <div class="links-item__svg">
                            <svg width="18" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.18323 0H17.7485C18.4016 0 18.9317 0.530088 18.9317 1.18323V1.85531L9.46587 5.86529L0 1.85649V1.18323C0 0.530088 0.530088 0 1.18323 0ZM9.46587 7.09935C9.54396 7.09935 9.62323 7.08396 9.6966 7.05202L18.9317 3.14143V11.8323C18.9317 12.4854 18.4016 13.0155 17.7485 13.0155H1.18323C0.530088 13.0155 0 12.4854 0 11.8323V3.14143L9.23513 7.05202C9.30849 7.08396 9.38777 7.09935 9.46587 7.09935Z" fill="#EB1C24"/>
                            </svg>
                        </div>
                        <div class="links-item__link footer-mail"><a href="mailto:<?php echo $GLOBALS['emerem']['email']; ?>"><?php echo $GLOBALS['emerem']['email']; ?></a></div>
                    </div>
                    <div class="copyright"><?php echo $GLOBALS['emerem']['copyright']; ?></div>
                </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
