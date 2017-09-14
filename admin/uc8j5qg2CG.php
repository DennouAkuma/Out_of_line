<?php
if(isset($_COOKIE['login_status'])){
    $id_name = $_COOKIE['login_status'];

    echo '<h1>login成功</h1>';
    echo '<p>'.$id_name.'</p>';

    include '../root/root.php';
    include '../php/mysql_send.php';
    include '../php/database.php';
}else{
    header("Location: http://localhost/outofline/201709021735_Dennou/login.php");
}
?>
