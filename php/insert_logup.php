<?php
$sql = "insert into new values('".$str_2."','".$email."','".$pass."')";
$result_flag = mysql_query($sql);
if (!$result_flag) {
    die('INSERTクエリーが失敗しました。'.mysql_error());
}
?>
