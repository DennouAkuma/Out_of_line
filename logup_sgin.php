
<?php
$title = "登録完了";
$status_admin = 10;
include 'temp/header.php';
include 'root/root.php';
include 'php/mysql_send.php';
include 'php/database.php';

if(isset($_POST['email'])){
    $email = $_POST['email'];
}
if(isset($_POST['pass1'])){
    $pass = $_POST['pass1'];
}

include 'php/table.php';
include 'php/insert_logup.php';

$str_text = "http://localhost/outofline/201709021735_Dennou/admin/".$str_2.".php";

include 'temp/touroku_html.php';
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
