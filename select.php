<?php
if (isset($_GET['mail_A'])) {
    $in_mail = $_GET["mail_A"];
}
include 'root/root.php';
include 'php/mysql_send.php';
include 'php/database.php';
include 'php/new_select.php';
?>
