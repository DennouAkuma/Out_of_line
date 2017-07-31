$(function(){
    $('#pas1').keyup(function(){
        $('.pass1').css('display', 'inline-block');
        var pass_1 = $(this).val().length;
        if(pass_1 < 6){
            $('#error_pas').html("パスワードは最低６文字以上で設定して下さい");
        }else if(pass_1 > 6){
            $('#error_pas').html("〇");
        }
    });
    $('#pas2').keyup(function(){
        $('.pass2').css('display', 'inline-block');
        var pass_1 = $('#pas1').val();
        var pass_2 = $(this).val();
        console.log(pass_1 + " : " + pass_2);
        if(pass_1 === pass_2){
            $('#error_pas2').html("〇");
        }else if(pass_1 !== pass_2){
            $('#error_pas2').html("パスワードが一致しません");
        }
    });
});
