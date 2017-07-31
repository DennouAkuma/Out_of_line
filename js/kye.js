$(function(){
    $('#mail').keyup(function(){
        var mail_e = $(this).val();
        $.ajax({
            typy: "GET",
            url: "select.php",
            data: {'mail_A' : mail_e},
            success: function(data){
                $('#mail_test').html(data);
            }
        });
    });
});
