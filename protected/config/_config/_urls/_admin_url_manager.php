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
     'admin/paypallsettins/<id:[\w-\.]+>' => '/configurations/payPallSettings',
     'admin/payment-notifications' => '/configurations/PaymentNotifications',
     /**----------- advertinsg -----------**/

?>