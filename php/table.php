<?php
$i = 0;

$str_2 = "";
$intg_2 = 0;
$intg_1 = 0;
$str = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";

//IDの重複防止
do{
    for($x = 0;$x < $leng;$x++){
        $intg_1 = strlen($str);
        $intg_2 = mt_rand(0,$intg_1-1);
        $str_2 = $str_2.$str[$intg_2];
    }

    $i = mt_rand(1000000,9999999);
    $str = "SELECT * FROM ".$useA_table." where ".$id." like '".$str_2."'";
    $result = mysql_query($str);
    if (!$result) {
        die('クエリーが失敗しました。'.mysql_error());
    }
    $row = mysql_fetch_assoc($result);
    if($row == null){
        break;
    }
}while(true);

//echo '<p>'.$str_2.'</p>';
?>
