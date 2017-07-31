$(function(){
    $('#mail').keyup(function(){
        $('.email').css('display', 'inline-block');
        var mail_e = $(this).val();
        $.ajax({
            typy: "GET",
            url: "select.php",
            data: {'mail_A' : mail_e},
            success: function(data){
                $('#mail_error_i').html(data);
            }
        });
    });
});
