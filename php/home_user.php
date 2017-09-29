<?php
$title = "Out of line";

include '../temp/admin_header.php';
include '../root/root.php';
include '../php/mysql_send.php';
include '../php/database.php';
$str = "desc admin";
$result = mysql_query($str);
if(!$result){
    die('クエリーが失敗しました。'.mysql_error());
}

//名前の表示
$result = mysql_query("select ".$user_mysql." from ".$useB_table." where ".$id_b." like '".basename($_SERVER['PHP_SELF'],'.php')."'");
if(!$result){
    die('クエリーが失敗しました。'.mysql_error());
}
$row = mysql_fetch_assoc($result);
$user_name = $row[$user_mysql];

$result = mysql_query("select ".$status." from ".$useB_table." where ".$id_b." like '".basename($_SERVER['PHP_SELF'],'.php')."'");
if(!$result){
    die('クエリーが失敗しました。'.mysql_error());
}
$row = mysql_fetch_assoc($result);
$status_user = $row[$status];

?>
<header id="user_header">
    <nav id="user_menu">
        <ul>
            <li><h1 id="user_logo_title">out of line</h1></li>
            <li>
                <form>
                    <input type="text" size="20">
                    <button>検索</button>
                </form>
            </li>
            <li>
                <div id="user_img">
                    <img src="../img/admin_default.gif">
                </div>
            </li>
            <li><?php echo $user_name; ?></li>
            <li>プロフィール</li>
            <li><hr /></li>
            <li>質問</li>
            <li>回答</li>
            <li>結果</li>
            <li><hr /></li>
            <li>設定</li>
            <li>お問い合わせ</li>
            <li><button>ログアウト</button></li>
        </ul>
    </nav>
    <div id="user_menu_side">
        <img id="user_hatena" src="../img/QuestionMark.png">
    </div>
</header>
<main id="user_main">
    <div id="question_moder">
        <?php include '../php/question_temp.php' ?>
    </div>
    <div>
        <?php
        if($status_user == 20){
            $result = mysql_query("select ".$status." from ".$useB_table." where ".$id_b." like '".basename($_SERVER['PHP_SELF'],'.php')."'");
            if(!$result){
                die('クエリーが失敗しました。'.mysql_error());
            }
            $row = mysql_fetch_assoc($result);
            $status_user = $row[$status];

        }else if($status_user == 30){

        }
        ?>
    </div>
    <div>
    </div>
</main>
<?php include '../temp/footer_admin.php'; ?>
<script type="text/javascript" src="../js/user_menu.js"></script>
<?php include '../temp/footer_no.html'; ?>
