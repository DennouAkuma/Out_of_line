<?php
$str = "select ".$mail." from ".$useA_table." where ".$id." like '".$file_name."'";
//echo '<p>'.$str.'</p>';
$result = mysql_query($str);
if(!$result){
    die('クエリーが失敗しました。'.mysql_error());
}
$row = mysql_fetch_assoc($result);
$user_name_cli = $row[$mail];

?>
