<?php
$str = "select ".$status." from ".$useB_table." where ".$id_b." like '".$id_name."'";
$result = mysql_query($str);
if(!$result){
    die('クエリーが失敗しました。login_status.php'.mysql_error());
}
$row = mysql_fetch_assoc($result);
$status_is_mysql = $row[$status];

?>
