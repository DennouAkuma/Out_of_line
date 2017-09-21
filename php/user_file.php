<?php
$str_file_string_user = '<?php
    if(isset($_COOKIE["login_status"])){
        $id_name = $_COOKIE["login_status"];
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
?>';

    $file_name0 = "admin/".$str_2.".php";
    $file_name = $file_name0;
    if(!file_exists($file_name)){
        //echo '<p>ユーザーファイルの生成が完了いたしました</p>';
        $fp = fopen( $file_name, 'w');
        fwrite($fp,$str_file_string_user);
        fclose($fp);
        readfile($file_name);
        $file_name = chmod($file_name0,0666);
    }else{
        echo '<p>Waring 100 Error! ファイル生成に失敗しました。</p>';
        echo '<p>このエラー見かけたばありは運営管理局にご連絡ください</p>';
        Exit();
    }
?>
