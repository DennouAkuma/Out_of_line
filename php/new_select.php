<?php
$str = "select ".$mail." from ".$useA_table." where ".$mail." like '".$in_mail."'";
$result = mysql_query($str);
if(!$result){
    die('クエリーが失敗しました。'.mysql_error());
}
$row = mysql_fetch_assoc($result);
if($in_mail == ""){
    echo '<p id="mail_sigin">メールアドレスを入力して下さい</p>';
}else if($row == null){
    echo '<p id="mail_sigin">〇</p>';
}else if($row != null){
    echo '<p id="mail_sigin">このメールアドレスは既に登録されています</p>';
}

?>
