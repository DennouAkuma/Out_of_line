<?php
if (isset($_GET['mail'])) {
    $in_mail = $_GET["mail"];
}
if (isset($_GET['pass'])) {
    $in_pass = $_GET["pass"];
}
if (isset($_GET['status_admin'])){
    $status_admin = $_GET['status_admin'];
}

include 'root/root.php';
include 'php/mysql_send.php';
include 'php/database.php';
include 'php/login_select.php';
?>
