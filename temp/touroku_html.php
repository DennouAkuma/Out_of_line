<?php
$str_mail_content = "
<!doctype html>
<html lang='ja'>
<head>
<head>
<body>
    <style type='text/css'>
    .title{
        background: #4588cf;
        width: 100%;
    }
    .title{
        color: #ffffff;
        padding: 0.1em 0 0.3em 1em;
    }
    </style>
    <div class='title'>
        <h1>登録が完了いたしました</h1>
    </div>
    <p>このたびはOut of lineに登録していただきありがとうございます。</p>
    <p>大変お手数ですが、お客様情報の入力が完了していないので下記のメールからログインしお客様情報を入力してください</p>
    <br />
    <a href=".$str_text."><p>".$str_text."</p></a>
    <p>利用規約について</p>
    <br />
</body>
<html>
"
?>
