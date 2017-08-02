
<?php
$title = "登録完了";
include 'temp/header.php';
include 'root/root.php';
include 'php/mysql_send.php';
include 'php/database.php';

if(isset($_GET['email'])){
    $email = $_GET['email'];
}
if(isset($_GET['pass1'])){
    $pass = $_GET['pass1'];
}

include 'php/table.php';
include 'php/insert_logup.php';

$str_text = "http://localhost/outofline/201708021001/admin/".$str_2.".php";

include 'php/mail_send.php';
include 'php/user_file.php';
?>
<main class="up">
    <h2>登録が完了しました</h2>
    <p>確認メールを送信いたしました。確認を行ってください。</p>
</main>
<?php
include 'temp/footer_log.php';
?>
