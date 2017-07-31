$(function(){
    //--メールエラーポジション--
    var offsetTop = $('#mail').offset().top;
    var offsetLeft = $('#mail').offset().left;
    var setTop = offsetTop;
    var setLeft = offsetLeft + 390;
    $('#mail_error_i').css("left",setTop);
    $('#mail_error_i').css("left",setLeft);

    //--パスワードエラーポジション--
    var offsetTop = $('#pas1').offset().top;
    var offsetLeft = $('#pas1').offset().left;
    var setTop = offsetTop;
    var setLeft = offsetLeft + 390;
    $('#pass1_error').css("left",setTop);
    $('#pass1_error').css("left",setLeft);
});
