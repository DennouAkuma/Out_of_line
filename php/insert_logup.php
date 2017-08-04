<?php
$sql = "insert into ".$useA_table." values('".$str_2."','".$email."','".$pass."')";
$result_flag = mysql_query($sql);
if (!$result_flag) {
    die('INSERTクエリーが失敗しました。'.mysql_error());
}

$sql_2 = "insert into ".$useB_table."(".$id_b.",".$mail_b.",".$pass_b.",".$status.")
            values('".$str_2."','".$email."','".$pass."','".$status_admin."')";

//echo '<p>'.$sql_2.'</p>';

$result_flag_b = mysql_query($sql_2);
if (!$result_flag_b) {
    die('INSERTクエリーが失敗しました。'.mysql_error());
}

?>
