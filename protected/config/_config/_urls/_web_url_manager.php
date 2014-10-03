<?php

/*
 * setting url for web module
 * to beautify url in user's site
 * author:ubd
 */
$rules_web = array(
    /** other urls * */
    '<controller:\w+>/<id:\d+>' => '<controller>/view',
    '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
    '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
    '' => '/web/default/index',
    'gallery' => '/web/default/gallery',
    'team' => '/web/default/team',
    'fleet' => '/web/default/fleet',
    'dairies' => '/web/default/dairies',
    'faq' => '/web/default/faq',
    'contact' => '/web/default/contact',
    'about' => '/web/default/about',
    'terms' => '/web/default/terms',
    'sitemap' => '/web/default/sitemap',
    '<category:\w+>/<slug:[a-zA-Z0-9-_]+>' => '/web/category/detail',
    '<category:\w+>' => '/web/category/index',
        //
);
?>
