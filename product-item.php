<?php
/*
Template Name: Product Item
*/
?>

<?php get_header(); ?>
<main class="main">
    <section class="link container">
        <a href="/" class="main-link">Главная </a>
        <a href="/product-categories/pipes/" class="main-link"> / Продукция</a>
        <a href="" class="secondary-link"> / Насос</a>
    </section>
    <section class="product-main-info container">
        <h1 class="product-main-info-title">Насос промышленный RD (RD-RDL-RDM)</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="product-main-info-img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/pipe2.png" alt="" style="width: 100%;height: 100%">
                </div>
                <div class="img-secondary-wrapper row">
                    <img class="product-main-info-img-secondary col-md-4" src="<?php bloginfo('template_url'); ?>/assets/img/pipe3.png" alt="">
                    <img class="product-main-info-img-secondary col-md-4" src="<?php bloginfo('template_url'); ?>/assets/img/pipe3.png" alt="">
                    <img class="product-main-info-img-secondary col-md-4" src="<?php bloginfo('template_url'); ?>/assets/img/pipe3.png" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <p>Donec pellentesque, lacus non laoreet dictum, velit dui mollis erat,
                    vel ultrices quam est nec justo. Maecenas ut accumsan arcu.
                    Etiam malesuada mauris vel nulla hendrerit porta.
                </p>

                <p>Ut hendrerit arcu non arcu maximus tincidunt. Etiam vel ante nulla.
                    Integer feugiat ultrices tortor, eu eleifend nisi venenatis et.
                    Nunc rhoncus risus erat, at lobortis ipsum hendrerit ac.
                    Nam pretium non nunc ut eleifend. Nunc molestie est placerat nibh scelerisque,
                    eget pretium enim placerat. Morbi eu ex elit. Maecenas volutpat posuere ligula,
                    at sagittis nunc. Etiam sed ipsum eleifend elit viverra hendrerit non in lacus.
                    Fusce gravida lectus ac rhoncus tincidunt. In accumsan quis ante eu suscipit.
                    Phasellus vitae eros mattis, euismod neque laoreet, suscipit magna. Duis ultrices
                    tempus eleifend. Ut sed malesuada tortor.
                </p>

                <p>Fusce gravida lectus ac rhoncus tincidunt. In accumsan quis ante eu suscipit.
                    Phasellus vitae eros mattis, euismod neque laoreet, suscipit magna.
                    Duis ultrices tempus eleifend. Ut sed malesuada tortor.
                    Proin aliquam fringilla nisl ut faucibus. Aliquam volutpat,
                    enim in laoreet feugiat, velit felis tempor diam, et ultrices sapien lorem ac nibh.
                </p>

                <p>Sed porta accumsan quam. Vestibulum facilisis in quam vitae mattis.
                    Etiam gravida ut erat et placerat. Nam non lacus quis tellus vestibulum efficitur.
                    Sed fermentum pharetra semper. Aliquam sed luctus odio, eget pulvinar tellus.
                    Quisque et nunc lorem. Nulla massa ipsum.
                </p>
            </div>
        </div>
    </section>
    <section class="product-more-info container">
        <div class="tablinks-wrapper">
            <div class="tablinks active" onclick="openStage(event, 'info')">Описание</div>
            <div class="tablinks" onclick="openStage(event, 'characteristics')">Характеристики</div>
        </div>
        <div class="tabcontent-wrapper">
            <div class="tabcontent active" id="characteristics">
                <div class="characteristics-items-wrapper row">
                    <div class="characteristics-item col-md-4">
                        <div class="characteristics-item-title">Характеристики</div>
                        <div class="characteristics-item-info">
                            <div>Максимальная производительность:</div>
                            <div>500 м3/ч.</div>
                        </div>
                        <div class="characteristics-item-info">
                            <div>Максимальная производительность:</div>
                            <div>500 м3/ч.</div>
                        </div>
                        <div class="characteristics-item-info">
                            <div>Максимальная производительность:</div>
                            <div>500 м3/ч.</div>
                        </div>
                        <div class="characteristics-item-info">
                            <div>Максимальная производительность:</div>
                            <div>500 м3/ч.</div>
                        </div>
                    </div>
                    <div class="characteristics-item col-md-4">
                        <div class="characteristics-item-title">Характеристики</div>
                        <div class="characteristics-item-info">
                            <div>Максимальная производительность:</div>
                            <div>500 м3/ч.</div>
                        </div>
                        <div class="characteristics-item-info">
                            <div>Максимальная производительность:</div>
                            <div>500 м3/ч.</div>
                        </div>
                        <div class="characteristics-item-info">
                            <div>Максимальная производительность:</div>
                            <div>500 м3/ч.</div>
                        </div>
                        <div class="characteristics-item-info">
                            <div>Максимальная производительность:</div>
                            <div>500 м3/ч.</div>
                        </div>
                    </div>
                    <div class="characteristics-item col-md-4">
                        <div class="characteristics-item-title">Характеристики</div>
                        <div class="characteristics-item-info">
                            <div>Максимальная производительность:</div>
                            <div>500 м3/ч.</div>
                        </div>
                        <div class="characteristics-item-info">
                            <div>Максимальная производительность:</div>
                            <div>500 м3/ч.</div>
                        </div>
                        <div class="characteristics-item-info">
                            <div>Максимальная производительность:</div>
                            <div>500 м3/ч.</div>
                        </div>
                        <div class="characteristics-item-info">
                            <div>Максимальная производительность:</div>
                            <div>500 м3/ч.</div>
                        </div>
                    </div>
                </div>
                <div class="versions">
                    <h1 class="versions-title">Версии конструкции</h1>
                    <div class="row">
                        <div class="col-md-3 version-item">
                            <div class="version-item-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/pipe4.png" alt="">
                            </div>
                            <div class="version-item-title">RDB: независимая конструция</div>
                        </div>
                        <div class="col-md-3 version-item">
                            <div class="version-item-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/pipe4.png" alt="">
                            </div>
                            <div class="version-item-title">RDL: кронштейн для фонаря с гибкой муфтой и стандартным двигателем B5.</div>
                        </div>
                        <div class="col-md-3 version-item">
                            <div class="version-item-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/pipe4.png" alt="">
                            </div>
                            <div class="version-item-title">RDB: независимая конструция</div>
                        </div>
                        <div class="col-md-3 version-item">
                            <div class="version-item-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/pipe4.png" alt="">
                            </div>
                            <div class="version-item-title">RDL: кронштейн для фонаря с гибкой муфтой и стандартным двигателем B5.</div>
                        </div>
                    </div>
                </div>
                <div class="graphs">
                    <h1 class="versions-title">Кривые</h1>
                    <div class="row">
                        <div class="characteristics-item col-md-4">
                            <div class="characteristics-item-title">2 полюса</div>
                            <div class="characteristics-item-info">
                                <div>Максимальная производительность:</div>
                                <div>500 м3/ч.</div>
                            </div>
                            <div class="characteristics-item-info">
                                <div>Максимальная производительность:</div>
                                <div>500 м3/ч.</div>
                            </div>
                            <div class="characteristics-item-info">
                                <div>Максимальная производительность:</div>
                                <div>500 м3/ч.</div>
                            </div>
                            <div class="characteristics-item-info">
                                <div>Максимальная производительность:</div>
                                <div>500 м3/ч.</div>
                            </div>
                        </div>
                        <div class="characteristics-item col-md-4">
                            <div class="characteristics-item-title">4 полюса</div>
                            <div class="characteristics-item-info">
                                <div>Максимальная производительность:</div>
                                <div>500 м3/ч.</div>
                            </div>
                            <div class="characteristics-item-info">
                                <div>Максимальная производительность:</div>
                                <div>500 м3/ч.</div>
                            </div>
                            <div class="characteristics-item-info">
                                <div>Максимальная производительность:</div>
                                <div>500 м3/ч.</div>
                            </div>
                            <div class="characteristics-item-info">
                                <div>Максимальная производительность:</div>
                                <div>500 м3/ч.</div>
                            </div>
                        </div>
                        <div class="characteristics-item col-md-4">
                            <div class="characteristics-item-title">6 полюсов</div>
                            <div class="characteristics-item-info">
                                <div>Максимальная производительность:</div>
                                <div>500 м3/ч.</div>
                            </div>
                            <div class="characteristics-item-info">
                                <div>Максимальная производительность:</div>
                                <div>500 м3/ч.</div>
                            </div>
                            <div class="characteristics-item-info">
                                <div>Максимальная производительность:</div>
                                <div>500 м3/ч.</div>
                            </div>
                            <div class="characteristics-item-info">
                                <div>Максимальная производительность:</div>
                                <div>500 м3/ч.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="interesting-products">
        <div class="container">
            <h1 class="interesting-products-title">Также может заинтересовать</h1>
            <div class="products-slider">
                <div class="slide">
                    <div class="product-item">
                        <div class="product-item-wrapper">
                            <div class="product-item-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/pipe4.png" alt="" style="height: 100%;width: 100%;">
                            </div>
                            <div class="container product-item-wrapper">
                                <h5 class="product-item-title">Насос RD (RD-RDL-RDM)</h5>
                                <div class="product-item-info">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Donec pulvinar felis et odio fermentum rhoncus ...
                                </div>
                                <a href="" class="product-item-more-info">
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
                </div>
                <div class="slide">
                    <div class="product-item">
                        <div class="product-item-wrapper">
                            <div class="product-item-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/pipe4.png" alt="" style="height: 100%;width: 100%;">
                            </div>
                            <div class="container product-item-wrapper">
                                <h5 class="product-item-title">Насос RD (RD-RDL-RDM)</h5>
                                <div class="product-item-info">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Donec pulvinar felis et odio fermentum rhoncus ...
                                </div>
                                <a href="" class="product-item-more-info">
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
                </div>
                <div class="slide">
                    <div class="product-item">
                        <div class="product-item-wrapper">
                            <div class="product-item-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/pipe4.png" alt="" style="height: 100%;width: 100%;">
                            </div>
                            <div class="container product-item-wrapper">
                                <h5 class="product-item-title">Насос RD (RD-RDL-RDM)</h5>
                                <div class="product-item-info">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Donec pulvinar felis et odio fermentum rhoncus ...
                                </div>
                                <a href="" class="product-item-more-info">
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
                </div>
                <div class="slide">
                    <div class="product-item">
                        <div class="product-item-wrapper">
                            <div class="product-item-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/pipe4.png" alt="" style="height: 100%;width: 100%;">
                            </div>
                            <div class="container product-item-wrapper">
                                <h5 class="product-item-title">Насос RD (RD-RDL-RDM)</h5>
                                <div class="product-item-info">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Donec pulvinar felis et odio fermentum rhoncus ...
                                </div>
                                <a href="" class="product-item-more-info">
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
                </div>
                <div class="slide">
                    <div class="product-item">
                        <div class="product-item-wrapper">
                            <div class="product-item-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/pipe4.png" alt="" style="height: 100%;width: 100%;">
                            </div>
                            <div class="container product-item-wrapper">
                                <h5 class="product-item-title">Насос RD (RD-RDL-RDM)</h5>
                                <div class="product-item-info">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Donec pulvinar felis et odio fermentum rhoncus ...
                                </div>
                                <a href="" class="product-item-more-info">
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
                </div>
                <div class="slide">
                    <div class="product-item">
                        <div class="product-item-wrapper">
                            <div class="product-item-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/pipe4.png" alt="" style="height: 100%;width: 100%;">
                            </div>
                            <div class="container product-item-wrapper">
                                <h5 class="product-item-title">Насос RD (RD-RDL-RDM)</h5>
                                <div class="product-item-info">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Donec pulvinar felis et odio fermentum rhoncus ...
                                </div>
                                <a href="" class="product-item-more-info">
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
                </div>
                <div class="slide">
                    <div class="product-item">
                        <div class="product-item-wrapper">
                            <div class="product-item-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/pipe4.png" alt="" style="height: 100%;width: 100%;">
                            </div>
                            <div class="container product-item-wrapper">
                                <h5 class="product-item-title">Насос RD (RD-RDL-RDM)</h5>
                                <div class="product-item-info">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Donec pulvinar felis et odio fermentum rhoncus ...
                                </div>
                                <a href="" class="product-item-more-info">
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
                </div>
                <div class="slide">
                    <div class="product-item">
                        <div class="product-item-wrapper">
                            <div class="product-item-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/pipe4.png" alt="" style="height: 100%;width: 100%;">
                            </div>
                            <div class="container product-item-wrapper">
                                <h5 class="product-item-title">Насос RD (RD-RDL-RDM)</h5>
                                <div class="product-item-info">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Donec pulvinar felis et odio fermentum rhoncus ...
                                </div>
                                <a href="" class="product-item-more-info">
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
                </div>
                <div class="slide">
                    <div class="product-item">
                        <div class="product-item-wrapper">
                            <div class="product-item-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/pipe4.png" alt="" style="height: 100%;width: 100%;">
                            </div>
                            <div class="container product-item-wrapper">
                                <h5 class="product-item-title">Насос RD (RD-RDL-RDM)</h5>
                                <div class="product-item-info">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Donec pulvinar felis et odio fermentum rhoncus ...
                                </div>
                                <a href="" class="product-item-more-info">
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
                </div>
                <div class="slide">
                    <div class="product-item">
                        <div class="product-item-wrapper">
                            <div class="product-item-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/pipe4.png" alt="" style="height: 100%;width: 100%;">
                            </div>
                            <div class="container product-item-wrapper">
                                <h5 class="product-item-title">Насос RD (RD-RDL-RDM)</h5>
                                <div class="product-item-info">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Donec pulvinar felis et odio fermentum rhoncus ...
                                </div>
                                <a href="" class="product-item-more-info">
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
                </div>
                <div class="slide">
                    <div class="product-item">
                        <div class="product-item-wrapper">
                            <div class="product-item-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/pipe4.png" alt="" style="height: 100%;width: 100%;">
                            </div>
                            <div class="container product-item-wrapper">
                                <h5 class="product-item-title">Насос RD (RD-RDL-RDM)</h5>
                                <div class="product-item-info">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Donec pulvinar felis et odio fermentum rhoncus ...
                                </div>
                                <a href="" class="product-item-more-info">
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
                </div>
                <div class="slide">
                    <div class="product-item">
                        <div class="product-item-wrapper">
                            <div class="product-item-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/pipe4.png" alt="" style="height: 100%;width: 100%;">
                            </div>
                            <div class="container product-item-wrapper">
                                <h5 class="product-item-title">Насос RD (RD-RDL-RDM)</h5>
                                <div class="product-item-info">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Donec pulvinar felis et odio fermentum rhoncus ...
                                </div>
                                <a href="" class="product-item-more-info">
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
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
