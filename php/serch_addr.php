<?php
if(isset($_GET['postcode'])){
    $post_in = $_GET['postcode'];
}
include '../root/root.php';
include 'mysql_send.php';
include 'database.php';
include 'serch_mysql_addr.php'

?>
