<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
register_nav_menus(array(
	'primary' => 'Основное',
	'footer' => 'Вторичное',
	'categories' => 'Категории'
));
