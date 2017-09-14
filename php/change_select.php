<?php

$str = "select ".$id." from ".$useA_table." where ".$mail." like '".$email."'";
$result = mysql_query($str);
if(!$result){
    die('クエリーが失敗しました。'.mysql_error());
}
$row = mysql_fetch_assoc($result);
$file_name = $row[$id];

if($checkbox == 'true'){
    setcookie("login_status" , $file_name , time()+86400);
}else if($checkbox == 'false'){
    setcookie("login_status" , $file_name);
}

$str_text = "http://localhost/outofline/201709021735_Dennou/admin/".$file_name.".php";
header("Location: ".$str_text);

?>
