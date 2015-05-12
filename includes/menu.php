<?php
//definiciones de menu
define('URL_BASE', '');

$subsub1 = array(
    'Sub Sub 1' => array('#', null),
    'Sub Sub 2' => array('#', null)
);
$menu2_subs = array(
    'Sub 1' => array('#', null),
    'Sub 2' => array('#', null)
);
$menu1_subs = array(
    'Sub 1' => array('#', $subsub1),
    'Sub 2' => array('#', null)
);
$principal = array(
    'Home' => array('#', null),
    'Menu 1' => array('#', $menu1_subs),
    'Menu 2' => array('#', $menu2_subs),
);
$menuParametro = array(
    "topline" => 0,
    "sub" => 0,
    "actual" => null,
    "menuArray" => $principal
);
