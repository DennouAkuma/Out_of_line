<?php
if(isset($_GET['user'])){
    $user_data = $_GET['user'];
}
if(isset($_GET['fast'])){
    $fast_data = $_GET['fast'];
}
if(isset($_GET['last'])){
    $last_data = $_GET['last'];
}
if(isset($_GET['post'])){
    $post_data = $_GET['post'];
}
if(isset($_GET['addr'])){
    $addr_data = $_GET['addr'];
}
if(isset($_GET['year_ou'])){
    $year_data = $_GET['year_ou'];
}
if(isset($_GET['mon_ou'])){
    $mon_data = $_GET['mon_ou'];
}
if(isset($_GET['day_ou'])){
    $day_data = $_GET['day_ou'];
}
if(isset($_GET['sex'])){
    $sex_data = $_GET['sex'];
}
if(isset($_COOKIE['login_status']) ){
    $id_name = $_COOKIE['login_status'];
}

include '../root/root.php';
include 'mysql_send.php';
include 'database.php';
include 'user_data_insert.php'
?>
