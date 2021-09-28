<?php
if (!defined('ABSPATH')) {
  exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', 'Настройки сайта' )
  ->add_tab( 'Логотипы', [
      Field::make( 'image', 'site_logo', 'Логотип' ),
      Field::make( 'image', 'site_logo_footer', 'Логотип Footer' ),
  ])

  ->add_tab( 'Общая информация', [
    Field::make( 'text', 'site_phone', 'Телефон #1' ),
    Field::make( 'text', 'site_phone_digits', 'Телефон ссылка #1' ),
    Field::make( 'text', 'site_phone2', 'Телефон #2' ),
    Field::make( 'text', 'site_phone_digits2', 'Телефон ссылка #2' ),
    Field::make( 'text', 'site_call', 'Заказать звонок' ),
    Field::make( 'text', 'site_call_modal', 'Заголовок модального окна' ),
    Field::make( 'text', 'site_address', 'Адрес' ),
    Field::make( 'text', 'site_email', 'Почта' ),
    Field::make( 'text', 'site_map_coordinates', 'Координаты карты' ),
    Field::make( 'text', 'site_copyright', 'Copyright' ),
  ]);

