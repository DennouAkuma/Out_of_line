<?php
    if(isset($_COOKIE["login_status"])){
        $id_name = $_COOKIE["login_status"];
        if($id_name == basename($_SERVER['PHP_SELF'],'.php')){
            include "../root/root.php";
            include "../php/mysql_send.php";
            include "../php/database.php";
            include "../php/login_status.php";
            switch($status_is_mysql){
                case 10:
                    include "../php/user_file_str.php";
                    break;
                case 20;
                    include "../php/home_user.php";
                    break;
                case 30:
                    break;
                case 40;
                    break;
                case 50;
                    break;
                case 60:
                    break;
            }
        }else{
            header("Location: http://localhost/outofline/201709021735_Dennou/login.php");
        }
    }else{
        header("Location: http://localhost/outofline/201709021735_Dennou/login.php");
    }
?>
