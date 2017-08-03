<?php
$title = "Welcom to Out of line!";
$file_name = basename($_SERVER['PHP_SELF'],".php");

include '../temp/admin_header.php';
include '../root/root.php';
include '../php/mysql_send.php';
include '../php/database.php';
include '../php/select_id.php';

?>
<main>
    <nav class="user_title">
        <h1>ユーザ情報登録</h1>
    </nav>

    <form class="user_input">
        <div class="user_q_c_a" id="user_q_a">
            <input class="logup" type="text" size="40" placeholder="ユーザー名を入力してください"><br/>
            <input class="logup" type="text" size="40" placeholder="姓を入力してください"><br/>
            <input class="logup" type="text" size="40" placeholder="名を入力してください"><br/>
            <button id="next_1" class="submit user_button" type="button">次へ</button>
        </div>
        <div class="user_q_c_b" id="user_q_b">
            <input class="logup" type="text" size="40" placeholder="郵便番号を入力してください"><br/>
            <input class="logup" type="text" size="40" placeholder="住所を入力してください"><br/>
            <input class="logup" type="text" size="40" placeholder="生年月日を入力してください"><br/>
            <input class="logup" type="text" size="40" placeholder="性別を入力してください"><br/>
            <button id="back_1" class="submit" type="button">戻る</button>
            <button id="next_2" class="submit" type="button">次へ</button>
        </div>
        <div class="user_q_c_c" id="user_q_c">
            <table class="user_Kakunin">
                <tr>
                    <th><h3>ユーザー名</h3></th>
                    <th><p>hogehoge</p></th>
                </tr>
                <tr>
                    <th><h3>名前</h3></th>
                    <th><p>hogehoge</p></th>
                </tr>
                <tr>
                    <th><h3>郵便番号</h3></th>
                    <th><p>hogehoge</p></th>
                </tr>
                <tr>
                    <th><h3>住所</h3></th>
                    <th><p>hogehoge</p></th>
                </tr>
                <tr>
                    <th><h3>生年月日</h3></th>
                    <th><p>hogehoge</p></th>
                </tr>
                <tr>
                    <th><h3>性別</h3></th>
                    <th><p>hogehoge</p></th>
                </tr>
            </table>
        </div>
    </form>
    <hr class="test_1">
    <hr class="line">
</main>
<?php include '../temp/footer_admin.php'; ?>
<script type="text/javascript" src="../js/user_input.js"></script>
<?php include '../temp/footer_no.html'; ?>
