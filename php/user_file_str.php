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
            <input id="User_in" class="logup" type="text" size="40" placeholder="ユーザー名を入力してください"><br/>
            <div class="error_div">
                <div class="user_error" id="User_in_er">
                    <p>※ユーザー名を入力してください</p>
                </div>
            </div>
            <input id="Last_in" class="logup" type="text" size="40" placeholder="姓を入力してください"><br/>
            <div class="error_div">
                <div class="user_error" id="Last_in_er">
                    <p>※姓を入力してください</p>
                </div>
            </div>
            <input id="Fast_in" class="logup" type="text" size="40" placeholder="名を入力してください"><br/>
            <div class="error_div">
                <div class="user_error" id="Fast_in_er">
                    <p>※名を入力してください</p>
                </div>
            </div>
            <button id="next_1" class="submit user_button" type="button">次へ</button>
        </div>
        <div class="user_q_c_b" id="user_q_b">
            <input id="Post_in" class="logup" type="text" size="30" placeholder="郵便番号を入力してください">
            <button id="sarch" class="submit3" type="button">住所入力</button><br/>
            <div class="error_div">
                <div class="user_error" id="Post_in_er">
                    <p>※郵便番号を入力してください</p>
                </div>
            </div>
            <input id="Addr_in" class="logup" type="text" size="40" placeholder="住所を入力してください"><br/>
            <div class="error_div">
                <div class="user_error" id="Addr_in_er">
                    <p>※住所を入力してください</p>
                </div>
            </div>
            <label>生年月日</label>
            <select id="year_in">
                <option value="Null">--年--</option>
            </select>
            <select id="mon_in">
                <option value="Null">--月--</option>
            </select>
            <select id="day_in">
                <option value="Null">--日--</option>
            </select><br/>
            <div class="error_div">
                <div class="user_error" id="Birt_in_er">
                    <p>※生年月日を入力してください</p>
                </div>
            </div>

            <label>性別</label>
            <select id="Sex_in">
                <option>男性</option>
                <option>女性</option>
            </select><br/>
            <button id="back_1" class="submit" type="button">戻る</button>
            <button id="next_2" class="submit" type="button">次へ</button>
        </div>
        <div id="user_q_c" class="user_q_c_c">
            <table id="user_q_t" class="user_q_c_t">
                <tr>
                    <th><h3>ユーザー名</h3></th>
                    <th><h3 id="user_ou">hogehoge</h3></th>
                </tr>
                <tr>
                    <th><h3>名前</h3></th>
                    <th><h3 id="name_ou">hogehoge</h3></th>
                </tr>
                <tr>
                    <th><h3>郵便番号</h3></th>
                    <th><h3 id="post_ou">hogehoge</h3></th>
                </tr>
                <tr>
                    <th><h3>住所</h3></th>
                    <th><h3 id="addr_ou">hogehoge</h3></th>
                </tr>
                <tr>
                    <th><h3>生年月日</h3></th>
                    <th><h3 id="birt_ou">hogehoge</h3></th>
                </tr>
                <tr>
                    <th><h3>性別</h3></th>
                    <th><h3 id="sex_ou">hogehoge</h3></th>
                </tr>
            </table>
            <button id="back_2" class="submit" type="button">戻る</button>
            <button id="next_3" class="submit" type="button">送信</button>
        </div>
        <div class="user_q_c_d" id="user_q_d">
            <h1>送信が完了いたしました</h1>
            <button id="next_4" class="submit user_button" type="button">Homeに戻る</button>
        </div>
    </form>
    <hr id="bar1" class="status_c_bar bar_c_a" />
    <hr id="bar2" class="status_c_bar bar_c_b" />
</main>
<?php include '../temp/footer_admin.php'; ?>
<script type="text/javascript" src="../js/user_input.js"></script>
<?php include '../temp/footer_no.html'; ?>
