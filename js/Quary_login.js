$(function() {
    $('#login').submit(function() {
        var mail_e = $('#mail').val();
        var pass = $('#pass').val();

        var flag = "";

        function user_id(){
            var result = $.ajax({
                url: 'select_login.php',
                type: 'GET',
                dataType: 'jsonp',
                data: {'mail' : mail_e,
                       'pass' : pass},
                async: false
            }).responseText;
            return result;
        }
        var user_data = user_id();

        if(user_data == ""){
            console.log('Null potion Error');
            return false;
        }else if(user_data == 1){
            console.log('Yes');
            return true;
        }
    });
});
