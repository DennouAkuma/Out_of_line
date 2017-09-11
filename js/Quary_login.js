$(function() {
    $('#login').submit(function() {
        var mail_e = $('#mail').val();
        var pass = $('#pass').val();

        var flag = false;

        $.ajax({
            type: "GET";
            url: "select_login.php";
            data: {'mail' : mail_e,
                   'pass' : pass},
            success: function(data){
                flag = <?php $flag_php ?>
            }
        });

    });
});
