<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('description'); ?></title>
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://emerem.com.ua/wp-content/themes/Emerem/assets/css/slick.css">
    <link rel="stylesheet" href="https://emerem.com.ua/wp-content/themes/Emerem/assets/css/slick-theme.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <div class="container-desktop">
        <div class="header-info">
            <div class="logo">
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_logo' ), 'full'); ?>" alt="" style="height:50px"></a>
            </div>
            <div class="links-item">
                <div class="links-item__svg">
                    <svg width="18" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.18323 0H17.7485C18.4016 0 18.9317 0.530088 18.9317 1.18323V1.85531L9.46587 5.86529L0 1.85649V1.18323C0 0.530088 0.530088 0 1.18323 0ZM9.46587 7.09935C9.54396 7.09935 9.62323 7.08396 9.6966 7.05202L18.9317 3.14143V11.8323C18.9317 12.4854 18.4016 13.0155 17.7485 13.0155H1.18323C0.530088 13.0155 0 12.4854 0 11.8323V3.14143L9.23513 7.05202C9.30849 7.08396 9.38777 7.09935 9.46587 7.09935Z" fill="#EB1C24"/>
                    </svg>
                </div>
                <div class="links-item__link underline"><a href="mailto:<?php echo $GLOBALS['emerem']['email']; ?>"><?php echo $GLOBALS['emerem']['email']; ?></a></div>
            </div>
            <div class="links-item">
                <div class="links-item__svg">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 12.5C15.755 12.5 14.55 12.3 13.43 11.93C13.085 11.82 12.69 11.9 12.415 12.175L10.215 14.38C7.38005 12.94 5.06503 10.625 3.62503 7.79503L5.82502 5.58502C6.10003 5.31 6.18 4.91503 6.07003 4.57003C5.70005 3.45005 5.50003 2.24503 5.50003 1.00003C5.49998 0.444984 5.055 0 4.5 0H0.999984C0.45 0 0 0.444984 0 0.999984C0 10.39 7.61001 18 17 18C17.555 18 18 17.555 18 17V13.5C18 12.945 17.555 12.5 17 12.5Z" fill="#EB1C24"/>
                    </svg>
                </div>
                <div class="links-item__link">
                    <a href="tel:<?php echo $GLOBALS['emerem']['phone_digits']; ?>" class="fw-400"><?php echo $GLOBALS['emerem']['phone']; ?></a>
                </div>
            </div>
            <div class="links-item">
                <div class="links-item__svg">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 12.5C15.755 12.5 14.55 12.3 13.43 11.93C13.085 11.82 12.69 11.9 12.415 12.175L10.215 14.38C7.38005 12.94 5.06503 10.625 3.62503 7.79503L5.82502 5.58502C6.10003 5.31 6.18 4.91503 6.07003 4.57003C5.70005 3.45005 5.50003 2.24503 5.50003 1.00003C5.49998 0.444984 5.055 0 4.5 0H0.999984C0.45 0 0 0.444984 0 0.999984C0 10.39 7.61001 18 17 18C17.555 18 18 17.555 18 17V13.5C18 12.945 17.555 12.5 17 12.5Z" fill="#EB1C24"/>
                    </svg>
                </div>
                <div class="links-item__link">
                    <a href="tel:<?php echo $GLOBALS['emerem']['phone_digits2']; ?>" class="fw-400"><?php echo $GLOBALS['emerem']['phone2']; ?></a>
                </div>
            </div>
            <div class="request-call-btn" onclick="openModal()"><?php echo $GLOBALS['emerem']['call']; ?></div>
        </div>
        <div class="header-info-mobile">
            <div class="logo">
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_logo' ), 'full'); ?>" style="width: 80px;" alt=""></a>
            </div>
            <div class="request-call-btn" onclick="openModal()"><?php echo $GLOBALS['emerem']['call']; ?></div>
            <div class="toggle-menu"><i class="fa fa-bars" style="color: black" id="MobileToggle"></i></div>
        </div>
    </div>
    <nav class="nav nav-mobile" id="MobileToggleMenu">
        <div class="container">
        <div class="close-responsive"><i class="fa fa-times" style="color: white" id="CloseResponsive"></i></div>
            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <?php
                    wp_nav_menu([
                        'theme_location'  => 'primary',
                        'container'       => null,
                        'menu_class'      => 'nav-wrapper',
                        'fallback_cb'     => false,
                        ]
                    );
                ?>
            <?php endif; ?>
        </div>
    </nav>
</header>
<div class="modal" id="contactModal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <form action="https://formspree.io/f/meqvoaba" method="post">
            <h1><?php echo $GLOBALS['emerem']['call_modal']; ?></h1>
            <input type="text" placeholder="Ваше имя" name="_name">
            <input type="tel" placeholder="Ваш номер телефона" name="_message">
            <button type="submit">Отправить</button>
        </form>
    </div>
</div>
