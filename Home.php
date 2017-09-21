<?php
$title = "Out of line";
include 'temp/header.php';
include 'root/root.php';
include 'php/mysql_send.php';
include 'php/database.php';
?>
<nav>
    <ul>
        <li>Home</li>
        <li>実施中</li>
        <li>結果</li>
        <li>
            <form>
                <input class="logup" type="text" size="40" placeholder="タグ検索・ユーザー検索">
                <button id="sach" class="submit1" type="button">検索</button>
            </form>
        </li>
        <li>
            <?php
                if(isset($_COOKIE["login_status"])){
                    echo '<form action="#">';
                    echo '<input id="logout" class="submit1" type="button" value="ログアウト" /';
                    echo '</form>';
                }else{
                    echo '<form action="#">';
                    echo '<input id="logup" class="submit2" type="button" value="登録" />';
                    echo '</form>';
                    echo '<form action="#">';
                    echo '<input id="login" class="submit1" type="button" value="ログイン" /';
                    echo '</form>';
                }
            ?>
        </li>
    </ul>
</nav>
<main>
</main>
<?php include_once 'temp/footer_log.php'; ?>
<?php include 'temp/footer_no.html';?>
