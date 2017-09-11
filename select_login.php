<?php
if (isset($_GET['mail'])) {
    $in_mail = $_GET["mail"];
}
if (isset($_GET['pass'])) {
    $in_mail = $_GET["pass"];
}

include 'root/root.php';
include 'php/mysql_send.php';
include 'php/database.php';
include 'php/new_select.php';
?>
