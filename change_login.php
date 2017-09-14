<?php
if(isset($_POST['email'])){
    $email = $_POST['email'];
}
if(empty($_POST['kiyaku'])){
    $checkbox = 'false';
}else{
    $checkbox = 'true';
}
include 'root/root.php';
include 'php/mysql_send.php';
include 'php/database.php';
include 'php/change_select.php';
?>
