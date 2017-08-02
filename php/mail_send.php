<?php
include 'root/root.php';
require 'php/vendor/autoload.php';

$api_key           = $root_api_key;
$from              = $root_from;
$tos               = array($email);

//echo '<p>'.$tos[0].'</p>';

$sendgrid = new SendGrid($api_key, array("turn_off_ssl_verification" => true));
$email    = new SendGrid\Email();
$email->setSmtpapiTos($tos)->
       setFrom($from)->
       setFromName("Out of line Systems")->
       setSubject("Out of lineの登録完了いたしました")->
       addCategory('category1')->
       setText($str_text);


$response = $sendgrid->send($email);
//$response);
?>
