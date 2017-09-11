<?php
$title = "ログイン";
include_once 'temp/header.php'; ?>
<header class="up">
</header>
<main class="up">
    <form action="logup_sgin.php" class="logup_form" id="logup" method="get" id="from_logup">
        <h1 class="sin_title">Welcome to Out of line!</h1>

        <div id="mail_test"></div>
        <div class="email error" id="mail_error_i">
        </div>
        <div class="pass1 error" id="pass1_error">
            <p id="error_pas"></p>
        </div>

        <!--メールアドレス-->
        <input id="mail" class="logup" type="email" name="email" placeholder="メールアドレス・ユーザー名" size="40">
        </br>

        <!--パスワード-->
        <input id="pas1" class="logup" type="password" name="pass1" placeholder="パスワード" size="40">
        </br>

        <!--保存-->
        <p class="doui"><input class="check" type="checkbox" name="kiyaku" />
        パスワードを保存しますか？</p>

        <input class="submit" type="reset" value="リセット">
        <input class="submit" type="submit" value="ログイン">
    </form>
</main>
<?php include_once 'temp/footer_login.php'; ?>
<script type="text/javascript" src="js/Quary_login.js"></script>
<script type="text/javascript" src="js/pass2.js"></script>
<?php include 'temp/footer_no.html';?>
