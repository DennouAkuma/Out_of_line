<?php
$str = "select * from ".$useA_table." where ".$mail." = '".$in_mail."' and ".$pass_db." = '".$in_pass."'";
$result = mysql_query($str);
if(!$result){
    die('クエリーが失敗しました'.mysql_error());
}
$row = mysql_fetch_assoc($result);
if($row == null){
    $flag_php = false;
    echo $flag_php;
}else{
    $flag_php = true;
    echo $flag_php;
}

?>
