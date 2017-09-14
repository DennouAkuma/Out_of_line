$(function() {
    $('#login').submit(function() {
        var mail_e = $('#mail').val();
        var pass = $('#pass').val();

        var flag = false;

        $.ajax({
            url: 'select_login.php',
            type: 'GET',
            data: {'mail' : mail_e,
                   'pass' : pass},
            success: function(data){
                if(data == 1){
                    flag = true;
                }else{
                    flag = false;
                }
                if(flag == false){
                    console.log('Null potion Error');
                    return false;
                }else if(flag == true){
                    console.log('yes');
                }
            }
        });
    });
});
