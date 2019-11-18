<?php
session_start();

//Include Facebook SDK
require_once 'inc/facebook.php';

/*
 * Configuration and setup FB API
 */
$appId = '752842578476107'; 								//Facebook App ID(create this from 																				developer.facebook.com)
$appSecret = 'de1066955df7feab239265eabada59aa'; 			// Facebook App Secret
$redirectURL = 'https://calendareventss.herokuapp.com/'; // Callback URL i.e. page where you want to redirect after 														login, this should be same as oauth login in dashboard
//$redirectURL = 'http://cp.chasingpapers.com/'; // Callback URL
//$redirectURL = 'http://cp4.chasingpapers.com/';
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret
));
$fbUser = $facebook->getUser();
?>
