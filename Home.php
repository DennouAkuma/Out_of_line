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
                <input type="text" size="40" placeholder="タグ検索・ユーザー検索">
                <button id="sach" type="button">検索</button>
            </form>
        </li>
        <li>
            <?php
                if(isset($_COOKIE["login"])){

                }else{
                    echo '<button id="login" class="submit1" type="button">登録</button>';
                    echo '<button id="login" class="submit2" type="button" action="login.php">ログイン</button>';
                }
            ?>
        </li>
    </ul>
</nav>
<main>
</main>
<?php include_once 'temp/footer_log.php'; ?>
<?php include 'temp/footer_no.html';?>
