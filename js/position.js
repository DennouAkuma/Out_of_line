$(function(){
    //--メールエラーポジション--
    var offsetTop = $('#mail').offset().top;
    var offsetLeft = $('#mail').offset().left;
    var setTop = offsetTop - 10;
    var setLeft = offsetLeft + 390;
    $('#mail_error_i').css("top",setTop);
    $('#mail_error_i').css("left",setLeft);

    //--パスワードエラーポジション--
    var offsetTop = $('#pas1').offset().top;
    var offsetLeft = $('#pas1').offset().left;
    var setTop = offsetTop - 10;
    var setLeft = offsetLeft + 390;
    $('#pass1_error').css("top",setTop);
    $('#pass1_error').css("left",setLeft);

    //--パスワード確認エラーポシション--
    var offsetTop = $('#pas2').offset().top;
    var offsetLeft = $('#pas2').offset().left;
    var setTop = offsetTop - 10;
    var setLeft = offsetLeft + 390;
    $('#pass2_error').css("top",setTop);
    $('#pass2   _error').css("left",setLeft);
});
