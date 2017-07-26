<?php
$ja_zip = mysql_select_db('outofline',$link);
if(!$ja_zip){
    die('データベースの選択失敗'.mysql_error());
}
?>
