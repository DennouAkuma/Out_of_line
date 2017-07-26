<?php
$link = mysql_connect($host_name,$user_name,$user_pass);
if(!$link){
    die('接続失敗'.mysql_error());
}
?>
