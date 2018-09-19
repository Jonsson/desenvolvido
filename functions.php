<?php
add_theme_support('post-thumbnails');

function registrar_menu_navegacao() {
register_nav_menu('header-menu', 'main_menu');
}

add_action('init', 'registrar_menu_navegacao');
