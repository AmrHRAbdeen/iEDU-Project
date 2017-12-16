<?php
session_start();
include_once ("mySQL/connect.php");
//Include Facebook SDK
require_once 'Facebook/FacebookSDKException.php';

/*
 * Configuration and setup FB API
 */
$appId = '196629744166015'; //Facebook App ID
$appSecret = '7dfbf9294c5475147f230dcd021147b9'; // Facebook App Secret
$redirectURL = 'http://iedu-eg.com/'; // Callback URL
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret
));
$fbUser = $facebook->getUser();
?>