<?php
$title = "サインアップ";
include_once 'temp/header.php'; ?>
<header class="up">
</header>
<main class="up">
    <form action="logup_sgin.php">
        <h1 class="sin_title">Welcome to Out of line!</h1>
        <input class="logup" type="email" name="email" placeholder="メールアドレス" size="40">
        </br>
        <input class="logup" type="password" name="pass1" placeholder="パスワード" size="40">
        </br>
        <input class="logup" type="password" name="pass2" placeholder="パスワード再確認" size="40">
        <p class="doui"><input class="check" type="checkbox" name="kiyaku">
        <a href="#">こちら</a>の利用規約に同意しますか？<br>
        同意する場合はこちらにチェックを入れてください</p>
        <input class="submit" type="reset" value="リセット">
        <input class="submit" type="submit" value="送信">
    </form>
</main>
<?php include_once 'temp/footer_log.php'; ?>
