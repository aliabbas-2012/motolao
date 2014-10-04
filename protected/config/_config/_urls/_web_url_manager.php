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
   // 'gallery' => '/web/default/gallery',
//    'team' => '/web/default/team',
//    'fleet' => '/web/default/fleet',
//    'dairies' => '/web/default/dairies',
//    'faq' => '/web/default/faq',
//    'contact' => '/web/default/contact',
//    'about' => '/web/default/about',
//    'terms' => '/web/default/terms',
//    'sitemap' => '/web/default/sitemap',
//    '<category:\w+>/<slug:[a-zA-Z0-9-_]+>' => '/web/category/detail',
//    '<category:\w+>' => '/web/category/index',
    
    //with languages
    '<lang:[a-z]{2,4}+>-gallery' => '/web/default/gallery',
    '<lang:[a-z]{2,4}+>-team' => '/web/default/team',
    '<lang:[a-z]{2,4}+>-fleet' => '/web/default/fleet',
    '<lang:[a-z]{2,4}+>-dairies' => '/web/default/dairies',
    '<lang:[a-z]{2,4}+>-faq' => '/web/default/faq',
    '<lang:[a-z]{2,4}+>-contact' => '/web/default/contact',
    '<lang:[a-z]{2,4}+>-about' => '/web/default/about',
    '<lang:[a-z]{2,4}+>-terms' => '/web/default/terms',
    '<lang:[a-z]{2,4}+>-sitemap' => '/web/default/sitemap',
    '<lang:[a-z]{2,4}+>-<category:\w+>/<slug:[a-zA-Z0-9-_]+>' => '/web/category/detail',
    '<lang:[a-z]{2,4}+>-<category:\w+>' => '/web/category/index',
        //
);
?>
