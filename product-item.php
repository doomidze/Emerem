<?php
/*
Template Name: Product Item
*/
?>

<?php get_header(); ?>
<main class="main">
    <section class="product-main-info container">
        <?php
		if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
		}
		?>
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

</main>
<?php get_footer(); ?>
