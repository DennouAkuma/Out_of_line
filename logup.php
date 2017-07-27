<?php
$title = "サインアップ";
include_once 'temp/header.php'; ?>
<header class="up">
</header>
<main class="up">
    <form action="logup_sgin.php" class="logup_form" id="logup">
        <h1 class="sin_title">Welcome to Out of line!</h1>

        <!--メールアドレス-->
        <input id="mail" class="logup" type="email" name="email" placeholder="メールアドレス" size="40">
        <div class="email error" id="mail_erro_i">
            <p>これは、メールアドレスではありません</p>
        </div>
        </br>

        <!--パスワード-->
        <input id="pas1" class="logup" type="password" name="pass1" placeholder="パスワード" size="40">
        <div class="pass1 error">
            <p>危険度</p>
        </div>
        </br>

        <!--パスワード確認-->
        <input id="pas2" class="logup" type="password" name="pass2" placeholder="パスワード再確認" size="40">
        <div class="pass2 error">
            <p class="midasi_1" id="pas2_midasi">パスワードが一致しません</p>
        </div>

        <!--同意-->
        <p class="doui"><input class="check" type="checkbox" name="kiyaku" />
        <a href="#">こちら</a>の利用規約に同意しますか？</p>
        <p class="doui">同意する場合はこちらにチェックを入れてください</p>

        <input class="submit" type="reset" value="リセット">
        <input class="submit" type="submit" value="送信">
    </form>
</main>
<?php include_once 'temp/footer_log.php'; ?>
