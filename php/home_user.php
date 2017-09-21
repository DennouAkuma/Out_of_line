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
    <div id="question-overlay">
        <div id="question_moder">
            <ul>
                <li><input type="text" size="40" placeholder="タイトルを入力してください" /></li>
                <li id="que_img_move">
                    <button id="que_img_move_bt" class="submit4">画像・動画を追加</button>
                </li>
                <li id="que_img_move_add">
                    <div  id="batu_ico_div">
                        <img id="batu_ico" src="../img/batu.png">
                    </div>
                    <div>
                        <p>ここに画像・動画をドロップしてください</p>
                        <input id="file_up" class="submit5" type="file">
                        <p>※ただし動画の大きさは50MB・画像は10MBまでです。</p>
                    </div>
                </li>
                <li >
                    <button id="que_add" class="submit4">質問・追加</button>
                    <button class="submit4">セレクト</button>
                </li>
                <li>
                    <button class="submit4">チェックボックス</button>
                    <button class="submit4">テキスト</button>
                </li>
                <li>
                    <button id="#question_cansel" class="submit4">キャンセル</button>
                    <button class="submit4">作成</button>
                </li>
            </ul>
        </div>
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
