<?php
$title = "サインアップ";
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
        <div class="pass2 error" id="pass2_error">
            <p id="error_pas2">パスワードが一致しません</p>
        </div>
        <!--メールアドレス-->
        <input id="mail" class="logup" type="email" name="email" placeholder="メールアドレス" size="40">
        </br>

        <!--パスワード-->
        <input id="pas1" class="logup" type="password" name="pass1" placeholder="パスワード" size="40">
        </br>

        <!--パスワード確認-->
        <input id="pas2" class="logup" type="password" name="pass2" placeholder="パスワード再確認" size="40">

        <!--同意-->
        <p class="doui"><input class="check" type="checkbox" name="kiyaku" />
        <a href="#">こちら</a>の利用規約に同意しますか？</p>
        <p class="doui">同意する場合はこちらにチェックを入れてください</p>

        <input class="submit" type="reset" value="リセット">
        <input class="submit" type="submit" value="送信">
    </form>
</main>
<?php include_once 'temp/footer_log.php'; ?>
<script type="text/javascript" src="js/position.js"></script>
<script type="text/javascript" src="js/pass1.js"></script>

</body>
</html>
