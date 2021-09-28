<?php
if (!defined('ABSPATH')) {
  exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Дополнительные поля' )
    ->show_on_page(2)

    ->add_tab( 'О компании', [
      Field::make( 'text', 'about_us_title', 'Заголовок' ),
      Field::make( 'rich_text', 'about_us_subtitle', 'Подзаголовок' ),
      Field::make( 'text', 'about_us_link', 'Ссылка' ),
      Field::make( 'text', 'about_us_button', 'Текст ссылки' ),
      Field::make( 'image', 'about_us_img', 'Фото' ),
    ])
    ->add_tab( 'Преимущества', [
      Field::make( 'text', 'advantages_title', 'Заголовок' ),
      Field::make( 'rich_text', 'advantages1', 'Преимущества 1' ),
      Field::make( 'image', 'advantages_img1', 'Преимущества изображение 1' ),
      Field::make( 'rich_text', 'advantages2', 'Преимущества 2' ),
      Field::make( 'image', 'advantages_img2', 'Преимущества изображение 2' ),
      Field::make( 'rich_text', 'advantages3', 'Преимущества 3' ),
      Field::make( 'image', 'advantages_img3', 'Преимущества изображение 3' ),
      Field::make( 'rich_text', 'advantages4', 'Преимущества 4' ),
      Field::make( 'image', 'advantages_img4', 'Преимущества изображение 4' ),
    ])
    ->add_tab( 'Реализованные проекты', [
      Field::make( 'text', 'projects_title', 'Заголовок' ),
      Field::make( 'rich_text', 'projects_text', 'Текст' ),
      Field::make( 'text', 'projects_link', 'Ссылка' ),
      Field::make( 'text', 'projects_button', 'Текст ссылки' ),
      Field::make( 'text', 'project_title1', 'Заголовок проекта' ),
      Field::make( 'text', 'project_info1', 'Информация о проекте' ),
      Field::make( 'media_gallery', 'projects', 'Изображение проектов' ),
    ])
    ->add_tab( 'Новости', [
      Field::make( 'text', 'news_title', 'Заголовок' ),
      Field::make( 'rich_text', 'news_text', 'Текст' ),
      Field::make( 'text', 'news_link', 'Ссылка' ),
      Field::make( 'text', 'news_button', 'Текст ссылки' ),
    ]);

Container::make( 'post_meta', 'Дополнительные поля' )
    ->show_on_page(298)

    ->add_tab( 'О компании', [
      Field::make( 'text', 'about_us_title_page', 'Заголовок' ),
      Field::make( 'rich_text', 'about_us_text', 'Текст' ),
    ]);

Container::make( 'post_meta', 'Дополнительные поля' )
    ->show_on_page(18)

    ->add_tab( 'Контакты', [
      Field::make( 'rich_text', 'contacts_text', 'Текст' ),
    ]);

