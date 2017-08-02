<?php
    $file_name0 = "admin/".$str_2.".php";
    $file_name = $file_name0;
    if(!file_exists($file_name)){
        echo '<p>ユーザーファイルの生成が完了いたしました</p>';
        $fp = fopen( $file_name, 'w');
        fwrite($fp,"<?php include '../php/user_file_str.php'; ?>");
        fclose($fp);
        readfile($file_name);
        $file_name = chmod($file_name0,0666);
    }else{
        echo '<p>Waring 100 Error! ファイル生成に失敗しました。</p>';
        echo '<p>このエラー見かけたばありは運営管理局にご連絡ください</p>';
        Exit();
    }
?>
