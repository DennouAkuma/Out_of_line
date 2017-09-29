<ul id="question_eria" >
    <li>
        <label>タイトル
            <input id="question_title" type="text" size="40" placeholder="タイトルを入力してください" />
        </label>
    </li>
</ul>
<ul>
    <li>
        <button id="que_add" class="submit4">質問を追加</button>
    </li>
    <li id="que_img_move_add">
        <div  id="batu_ico_div">
            <img id="batu_ico" src="../img/batu.png">
        </div>
        <div id="img_display">
            <p>ここに画像・動画をドロップしてください</p>
            <!--<input id="file_up" class="submit5" type="file">-->
            <p>※ただし動画の大きさは50MB・画像は10MBまでです。</p>
        </div>
        <div id="img_preview">
        </div>
    </li>
    <li id="que_img_move">
        <button id="que_img_move_bt" class="submit4">画像・動画を追加</button>
        <button id="select_add_bt" class="submit4">セレクト</button>
    </li>
    <li>
        <button id="checkbox_add_bt" class="submit4">チェックボックス</button>
        <button id="text_add_bt" class="submit4">テキスト</button>
    </li>
    <li>
        <label>
            質問人数
            <input type="text" size="10" placeholder="最大100人">
        </label>
        <label>
            ポイント数
            <input type="text" size="10" placeholder="最大10pt">
        </label>
    </li>
    <li>
        <button id="question_cansel" class="submit4">キャンセル</button>
        <button id="question_submit" class="submit4">作成</button>
    </li>
</ul>
