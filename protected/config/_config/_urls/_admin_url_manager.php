<?php

/*
 * setting url for admin site
 * to beautify url in admin site
 * author:ubd
 */
$rules_admin = array(
    /** admin url ** */
    'admin' => '/site/login',
    'login' => '/site/login',
    'admin/config/<m:[\w-\.]+>' => '/configurations/load',
    //category create 
    'admin/category/index' => '/category/index',
    'admin/category/<id:[\w-\.]+>/view-<related:[\w-\.]+>-<related_id:[\w-\.]+>' => '/category/view',
    'admin/category/<id:[\w-\.]+>/view-<related:[\w-\.]+>' => '/category/view',
    'admin/category/<id:[\w-\.]+>/view' => '/category/view',
    'admin/category/<id:[\w-\.]+>/update' => '/category/update',
    'admin/category/<id:[\w-\.]+>/delete-<related:[\w-\.]+>-<related_id:[\w-\.]+>' => '/category/delete',
    'admin/category/<id:[\w-\.]+>/delete-<related:[\w-\.]+>' => '/category/delete',
    'admin/category/<id:[\w-\.]+>/delete' => '/category/delete',
    'admin/category/create' => '/category/create',
    //tour create 
    'admin/tour/index' => '/tour/index',
    'admin/tour/<id:[\w-\.]+>/view-<related:[\w-\.]+>-<related_id:[\w-\.]+>' => '/tour/view',
    'admin/tour/<id:[\w-\.]+>/view-<related:[\w-\.]+>' => '/tour/view',
    'admin/tour/<id:[\w-\.]+>/view' => '/category/view',
    'admin/tour/<id:[\w-\.]+>/update' => '/category/update',
    'admin/tour/<id:[\w-\.]+>/delete-<related:[\w-\.]+>-<related_id:[\w-\.]+>' => '/tour/delete',
    'admin/tour/<id:[\w-\.]+>/delete-<related:[\w-\.]+>' => '/tour/delete',
    'admin/tour/<id:[\w-\.]+>/delete' => '/tour/delete',
    'admin/tour/create' => '/tour/create',
);
/* * ----------- advertinsg -----------* */
?>
