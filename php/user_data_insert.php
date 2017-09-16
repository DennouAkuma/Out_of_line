<?php
if($sex_data == "男性"){
    $sex_data = 0;
}else if($sex_data == "女性"){
    $sex_data = 1;
}
$str = "update ".$useB_table." set ".
$name_F." = '".$fast_data."', ".
$name_L." = '".$last_data."', ".
$user_mysql." = '".$user_data."', ".
$post_mysql." = '".$post_data."', ".
$sex_mysql." = ".$sex_data.", ".
$addr_mysql." = '".$addr_data."', ".
$point_mysql." = 0, ".
$status." = 20,".
$year_mysql." = ".$year_data.", ".
$mon_mysql." = ".$mon_data.", ".
$day_mysql." = ".$day_data." where ".
$id_b." like '".$id_name."'";

$result = mysql_query($str);
if(!$result){
    die('クエリーが失敗しました。'.mysql_error());
}
echo "登録が完了しました";

?>
