<?php
$str = "select ".$pref.", ".$city.", ".$addr." from ".$useC_table." where ".$post_c." like '".$post_in."'";
$result = mysql_query($str);
if(!$result){
    die('クエリーが失敗しました'.mysql_error());
}
$row = mysql_fetch_assoc($result);
echo $row[$pref].$row[$city].$row[$addr];
?>
