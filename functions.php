<?php

require_once get_template_directory() . '/inc/init.php';

function set_language() {
  if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
//    setcookie('site_language', $lang, time() + (86400 * 30), '/');
//  } else {
//    $lang = isset($_COOKIE['site_language']) ? $_COOKIE['site_language'] : 'en';
    if ($lang === 'ru') {
      load_textdomain('foodieland', get_template_directory() . '/lang');
    }
  }


}
add_action('init', 'set_language');