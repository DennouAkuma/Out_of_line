$(function(){


    //--メールエラーポジション--
    var offsetTop = $('#mail').offset().top;
    var offsetLeft = $('#mail').offset().left;
    var width_mail = $('#mail').outerWidth(true);
    var setTop = offsetTop - 10;
    var setLeft = offsetLeft + width_mail;
    $('#mail_error_i').css("top",setTop);
    $('#mail_error_i').css("left",setLeft);

    //--パスワードエラーポジション--
    var offsetTop = $('#pas1').offset().top;
    var offsetLeft = $('#pas1').offset().left;
    var width_pass1 = $('#mail').outerWidth(true);
    var setTop = offsetTop - 10;
    var setLeft = offsetLeft + width_pass1;
    $('#pass1_error').css("top",setTop);
    $('#pass1_error').css("left",setLeft);

    //--パスワード確認エラーポシション--
    var offsetTop = $('#pas2').offset().top;
    var offsetLeft = $('#pas2').offset().left;
    var width_pass2 = $('#mail').outerWidth(true);
    var setTop = offsetTop - 10;
    var setLeft = offsetLeft + width_pass2;
    $('#pass2_error').css("top",setTop);
    $('#pass2_error').css("left",setLeft);
});
