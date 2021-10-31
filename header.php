<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('description'); ?></title>
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/img/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
</head>
<body>
<div class="request-call-button round" href="#"><i class="fas fa-phone-alt"></i></div>
<header class="header">
    <div class="container-fluid">
        <div class="header-info">
            <div class="logo">
                <a href="/"><img src="https://emerem.com.ua/wp-content/uploads/2021/10/Logo.svg" alt=""></a>
            </div>
            <div class="links-item">
                <div class="links-item__svg">
                    <svg width="18" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.18323 0H17.7485C18.4016 0 18.9317 0.530088 18.9317 1.18323V1.85531L9.46587 5.86529L0 1.85649V1.18323C0 0.530088 0.530088 0 1.18323 0ZM9.46587 7.09935C9.54396 7.09935 9.62323 7.08396 9.6966 7.05202L18.9317 3.14143V11.8323C18.9317 12.4854 18.4016 13.0155 17.7485 13.0155H1.18323C0.530088 13.0155 0 12.4854 0 11.8323V3.14143L9.23513 7.05202C9.30849 7.08396 9.38777 7.09935 9.46587 7.09935Z" fill="#EB1C24"></path>
                    </svg>
                </div>
                <div class="links-item__link underline">
                    <a href="mailto:info@emerem.com.ua">info@emerem.com.ua</a>
                </div>
            </div>
            <div class="links-item">
                <div class="links-item__svg">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 12.5C15.755 12.5 14.55 12.3 13.43 11.93C13.085 11.82 12.69 11.9 12.415 12.175L10.215 14.38C7.38005 12.94 5.06503 10.625 3.62503 7.79503L5.82502 5.58502C6.10003 5.31 6.18 4.91503 6.07003 4.57003C5.70005 3.45005 5.50003 2.24503 5.50003 1.00003C5.49998 0.444984 5.055 0 4.5 0H0.999984C0.45 0 0 0.444984 0 0.999984C0 10.39 7.61001 18 17 18C17.555 18 18 17.555 18 17V13.5C18 12.945 17.555 12.5 17 12.5Z" fill="#EB1C24"></path>
                    </svg>
                </div>
                <div class="links-item__link">
                    <a href="tel:+380447771717" class="fw-400">+380 (44) 777-17-17</a>
                </div>
            </div>
            <div class="links-item">
                <div class="links-item__svg">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 12.5C15.755 12.5 14.55 12.3 13.43 11.93C13.085 11.82 12.69 11.9 12.415 12.175L10.215 14.38C7.38005 12.94 5.06503 10.625 3.62503 7.79503L5.82502 5.58502C6.10003 5.31 6.18 4.91503 6.07003 4.57003C5.70005 3.45005 5.50003 2.24503 5.50003 1.00003C5.49998 0.444984 5.055 0 4.5 0H0.999984C0.45 0 0 0.444984 0 0.999984C0 10.39 7.61001 18 17 18C17.555 18 18 17.555 18 17V13.5C18 12.945 17.555 12.5 17 12.5Z" fill="#EB1C24"></path>
                    </svg>
                </div>
                <div class="links-item__link">
                    <a href="tel:+380447771717" class="fw-400">+380 (44) 777-17-17</a>
                </div>
            </div>
            <div class="request-call-btn" onclick="openModal()">Заказать звонок</div>
        </div>
        
        <div class="header-info-mobile">
            <div class="logo">
                <a href="/"><img src="https://emerem.com.ua/wp-content/uploads/2021/10/Logo.svg" alt=""></a>
            </div>
            <div class="links">
            <div class="links-item mail">
                <div class="links-item__svg">
                    <svg width="18" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.18323 0H17.7485C18.4016 0 18.9317 0.530088 18.9317 1.18323V1.85531L9.46587 5.86529L0 1.85649V1.18323C0 0.530088 0.530088 0 1.18323 0ZM9.46587 7.09935C9.54396 7.09935 9.62323 7.08396 9.6966 7.05202L18.9317 3.14143V11.8323C18.9317 12.4854 18.4016 13.0155 17.7485 13.0155H1.18323C0.530088 13.0155 0 12.4854 0 11.8323V3.14143L9.23513 7.05202C9.30849 7.08396 9.38777 7.09935 9.46587 7.09935Z" fill="#EB1C24"></path>
                    </svg>
                </div>
                <div class="links-item__link"><a href="mailto:info@emerem.com.ua">info@emerem.com.ua</a></div>
            </div>
            <div class="links-item phone">
                <div class="links-item__svg">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 12.5C15.755 12.5 14.55 12.3 13.43 11.93C13.085 11.82 12.69 11.9 12.415 12.175L10.215 14.38C7.38005 12.94 5.06503 10.625 3.62503 7.79503L5.82502 5.58502C6.10003 5.31 6.18 4.91503 6.07003 4.57003C5.70005 3.45005 5.50003 2.24503 5.50003 1.00003C5.49998 0.444984 5.055 0 4.5 0H0.999984C0.45 0 0 0.444984 0 0.999984C0 10.39 7.61001 18 17 18C17.555 18 18 17.555 18 17V13.5C18 12.945 17.555 12.5 17 12.5Z" fill="#EB1C24"></path>
                    </svg>
                </div>
                <div class="links-item__link">
                    <a href="tel:+380447771717">+380 (44) 777-17-17</a>
                    <a href="tel:+380447771717">+380 (44) 777-17-17</a>
                </div>
                </div>
                
            </div>
            <div class="request-call-btn" onclick="openModal()">Заказать звонок</div>
            
            <details>
                
                <summary tabindex="1">
                <div class="toggle-menu">
                    <span class="first"></span>
                    <span class="second"></span>
                    <span class="third"></span>
                </div>
                </summary>
                <nav class="nav nav-mobile" id="MobileToggleMenu">
                    <div class="container">
                        <div class="close-responsive">
                            <i class="fa fa-times" style="color: white" id="CloseResponsive"></i>
                        </div>
                        <ul id="menu-%d0%b3%d0%bb%d0%b0%d0%b2%d0%bd%d0%be%d0%b5-%d0%bc%d0%b5%d0%bd%d1%8e" class="nav-wrapper">
                            <li id="menu-item-304" class="menu-item menu-item-type-post_type menu-item-object-page page_item page-item-298 current_page_item menu-item-304"><a href="/production/about-us/" aria="-" current="page">О компании</a></li>
                            <li id="menu-item-345" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor current-page-parent menu-item-has-children menu-item-345"><a href="/production/">Продукция</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-766" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-766"><a href="/production/industrial-pumps/centrifugal-pumps/">Центробежные насосы</a></li>
                                    <li id="menu-item-760" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-760"><a href="/production/industrial-pumps/gc-pipes/">Гигиенические центробежные насосы</a></li>
                                    <li id="menu-item-765" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-765"><a href="/production/industrial-pumps/p-pipes/">Перистальтические насосы</a></li>
                                    <li id="menu-item-763" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-763"><a href="/production/industrial-pumps/m-pipes/">Мембранные насосы</a></li>
                                    <li id="menu-item-761" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-761"><a href="/production/industrial-pumps/dosing-pumps-and-systems/">Дозирующие насосы и системы</a></li>
                                    <li id="menu-item-759" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-759"><a href="/production/industrial-pumps/v-pipes/">Винтовые насосы</a></li>
                                    <li id="menu-item-758" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-758"><a href="/production/industrial-pumps/vac-pipes/">Вакуумные насосы</a></li>
                                    <li id="menu-item-762" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-762"><a href="/production/industrial-pumps/impeller-pumps/">Импеллерные насосы</a></li>
                                    <li id="menu-item-764" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-764"><a href="/production/industrial-pumps/magnetic-drive-pumps/">Насосы с магнитной муфтой</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-347" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-347"><a href="/projects/">Реализованные проекты</a></li>
                            <li id="menu-item-346" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-346"><a href="/information/">Полезная информация</a></li>
                            <li id="menu-item-348" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-348"><a href="/news/">Новости</a></li>
                            <li id="menu-item-349" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-349"><a href="/contacts/">Контакты</a></li>
                        </ul>                    
                    </div>
                    <div class="request-call-btn" onclick="openModal()">Заказать звонок</div>
                </nav>
            </details>

        </div>
    </div>
    <nav class="nav nav-mobile" id="MobileToggleMenu">
            <div class="container">
                <div class="close-responsive">
                    <i class="fa fa-times" style="color: white" id="CloseResponsive"></i>
                </div>
                <ul id="menu-%d0%b3%d0%bb%d0%b0%d0%b2%d0%bd%d0%be%d0%b5-%d0%bc%d0%b5%d0%bd%d1%8e" class="nav-wrapper">
                    <li id="menu-item-304" class="menu-item menu-item-type-post_type menu-item-object-page page_item page-item-298 current_page_item menu-item-304"><a href="/production/about-us/" aria="-" current="page">О компании</a></li>
                    <li id="menu-item-345" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor current-page-parent menu-item-has-children menu-item-345"><a href="/production/">Продукция</a>
                        <ul class="sub-menu">
                            <li id="menu-item-766" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-766"><a href="/production/industrial-pumps/centrifugal-pumps/">Центробежные насосы</a></li>
                            <li id="menu-item-760" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-760"><a href="/production/industrial-pumps/gc-pipes/">Гигиенические центробежные насосы</a></li>
                            <li id="menu-item-765" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-765"><a href="/production/industrial-pumps/p-pipes/">Перистальтические насосы</a></li>
                            <li id="menu-item-763" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-763"><a href="/production/industrial-pumps/m-pipes/">Мембранные насосы</a></li>
                            <li id="menu-item-761" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-761"><a href="/production/industrial-pumps/dosing-pumps-and-systems/">Дозирующие насосы и системы</a></li>
                            <li id="menu-item-759" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-759"><a href="/production/industrial-pumps/v-pipes/">Винтовые насосы</a></li>
                            <li id="menu-item-758" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-758"><a href="/production/industrial-pumps/vac-pipes/">Вакуумные насосы</a></li>
                            <li id="menu-item-762" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-762"><a href="/production/industrial-pumps/impeller-pumps/">Импеллерные насосы</a></li>
                            <li id="menu-item-764" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-764"><a href="/production/industrial-pumps/magnetic-drive-pumps/">Насосы с магнитной муфтой</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-347" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-347"><a href="/projects/">Реализованные проекты</a></li>
                    <li id="menu-item-346" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-346"><a href="/information/">Полезная информация</a></li>
                    <li id="menu-item-348" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-348"><a href="/news/">Новости</a></li>
                    <li id="menu-item-349" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-349"><a href="/contacts/">Контакты</a></li>
                </ul>                    
            </div>
        </nav>
    
</header>
