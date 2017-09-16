$(function(){
    var width_body = $('body').outerWidth(true);
    var window_wid = $(window).width();

    $('#user_q_a').css("width",width_body);
    $('#user_q_b').css("width",width_body);
    $('#user_q_c').css("width",width_body);
    $('#user_q_d').css("width",width_body);

    var width_user_q_a = $('#user_q_a').outerWidth(true);
    var width_user_q_b = $('#user_q_b').outerWidth(true);
    var width_user_q_c = $('#user_q_c').outerWidth(true);
    var width_user_q_d = $('#user_q_d').outerWidth(true);
    var Height_user_q_c = $('#user_q_c').outerHeight(true);
    var width_user_bar1 = $('#bar1').outerWidth(true);

    var error_width = $('#User_in').outerWidth(true);
    $('.user_error').css("width",error_width);

    var offsetTop = $('#user_q_a').offset().top;
    var offsetLeft = $('#user_q_a').offset().left;

    console.log(width_body);
    console.log(width_user_q_a);
    console.log(width_user_q_b);
    //console.log(width_user_q_c);
    console.log(offsetTop);
    console.log(offsetLeft);

    //日付取得
    var date = new Date();
    var Year = parseInt(date.getFullYear());
    var Year_ou = Year - 100;

    console.log(Year_ou);
    for(var i = Year ; i >= Year_ou ; i--){
        $('#year_in').append('<option value=' + i + '>' + i + '</option>');
    }
    for(var d = 1 ; d <= 12 ; d++){
        console.log(d);
        $('#mon_in').append('<option value=' + d + '>' + d + '</option>');
    }

    $('#year_in').change(function(){

    });

    $('#mon_in').change(function(){
        var Year_ch = parseInt($('#year_in').val());
        var mon_ch = parseInt($('#mon_in').val());

        $("#day_in").empty();
        $('#day_in').append('<option value="Null">--日--</option>');

        if((Year_ch % 400 == 0) || ((Year_ch % 4 == 0) && (Year_ch % 100 != 0))){
            var last_1 = [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
            console.log(Year_ch + " : " + mon_ch);
            for(var m = 1 ; m <= last_1[mon_ch - 1] ; m++){
                $('#day_in').append('<option value=' + m + '>' + m + '</option>');
            }
        }else{
            var last_2 = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
            for(var m = 1 ; m <= last_2[mon_ch - 1] ; m++){
                $('#day_in').append('<option value=' + m + '>' + m + '</option>');
            }
        }
    });



    window_wid -= width_user_bar1;
    window_wid /= 2;
    Height_user_q_c += offsetTop;

    $('#bar1').css("left",window_wid);
    $('#bar2').css("left",window_wid);
    $('#bar1').css("top",Height_user_q_c);
    $('#bar2').css("top",Height_user_q_c);

    //$('#user_q_a').css("top",offsetTop);
    $('#user_q_a').css("left",offsetLeft);

    //$('#user_q_b').css("top",offsetTop);
    $('#user_q_b').css("left",width_user_q_a);

    //$('#user_q_c').css("top",offsetTop);
    $('#user_q_c').css("left",width_user_q_a + width_user_q_b);

    //$('#user_q_c').css("top",offsetTop);
    $('#user_q_d').css("left",width_user_q_a + width_user_q_b + width_user_q_c);

    $('#next_1').click(function(){
        var User = $('#User_in').val();
        var Fast = $('#Fast_in').val();
        var Last = $('#Last_in').val();

        if(User == ""){
            $('#User_in_er').css('display', 'inline-block');
        }else{
            $('#User_in_er').css('display', 'none')
        }
        if(Fast == ""){
            $('#Fast_in_er').css('display', 'inline-block');
        }else{
            $('#Fast_in_er').css('display', 'none')
        }
        if(Last == ""){
            $('#Last_in_er').css('display', 'inline-block');
        }else{
            $('#Last_in_er').css('display', 'none')
        }
        if(User == "" || Fast == "" || Last == ""){
            return;
        }

        $('#user_q_a').animate({'left' : -width_user_q_a}, 600);
        $('#user_q_b').animate({'left' : 0}, 600);
        $('#bar2').animate({'width' : "20%"}, 600);
    });

    $('#back_1').click(function(){


        $('#user_q_b').animate({'left' : width_user_q_a}, 600);
        $('#user_q_a').animate({'left' : 0}, 600);
        $('#bar2').animate({'width' : "0%"}, 600);
    });

    $('#sarch').click(function(){
        var Post = $('#Post_in').val();
        if(Post == ""){
            return;
        }

        $.ajax({
            typy: "GET",
            url: "../php/serch_addr.php",
            data: {'postcode' : Post},
            success: function(data){
                //alert(data);
                $('#Addr_in').val(data);
            }
        });
    });

    $('#next_2').click(function(){
        var user = $('#User_in').val();
        var Fast = $('#Fast_in').val();
        var Last = $('#Last_in').val();
        var Post = $('#Post_in').val();
        var Addr = $('#Addr_in').val();
        var year_ou = $('#year_in').val();
        var mon_ou = $('#mon_in').val();
        var day_ou = $('#day_in').val();
        var Sex = $('#Sex_in').val();

        if(Post == ""){
            $('#Post_in_er').css('display', 'inline-block');
        }else{
            $('#Post_in_er').css('display', 'none')
        }
        if(Addr == ""){
            $('#Addr_in_er').css('display', 'inline-block');
        }else{
            $('#Addr_in_er').css('display', 'none')
        }
        if(year_ou == "Null" || mon_ou == "Null" || day_ou == "Null"){
            $('#Birt_in_er').css('display', 'inline-block');
        }else{
            $('#Birt_in_er').css('display', 'none')
        }
        if(Post == "" || Addr == "" || year_ou == "Null" || mon_ou == "Null" || day_ou == "Null"){
            return;
        }


        $('#user_ou').text(user);
        $('#name_ou').text(Last + Fast);
        $('#post_ou').text(Post);
        $('#addr_ou').text(Addr);
        $('#birt_ou').text(year_ou + "年" + mon_ou + "月" + day_ou + "日");
        $('#sex_ou').text(Sex);

        $('#user_q_b').animate({'left' : -width_user_q_b}, 600);
        $('#user_q_c').animate({'left' : 0}, 600);
        $('#bar2').animate({'width' : "40%"}, 600);
    });

    $('#back_2').click(function(){
        $('#user_q_c').animate({'left' : width_user_q_a}, 600);
        $('#user_q_b').animate({'left' : 0}, 600);
        $('#bar2').animate({'width' : "20%"}, 600);
    });

    $('#next_3').click(function(){
        var User = $('#User_in').val();
        var Fast = $('#Fast_in').val();
        var Last = $('#Last_in').val();
        var Post = $('#Post_in').val();
        var Addr = $('#Addr_in').val();
        var Year_ou = $('#year_in').val();
        var Mon_ou = $('#mon_in').val();
        var Day_ou = $('#day_in').val();
        var Sex = $('#Sex_in').val();

        function user_data(){
            var result = $.ajax({
                url: '../php/user_data.php',
                type: 'GET',
                dataType: 'jsonp',
                data: {
                    'user' : User,
                    'fast' : Fast,
                    'last' : Last,
                    'post' : Post,
                    'addr' : Addr,
                    'year_ou' : Year_ou,
                    'mon_ou' : Mon_ou,
                    'day_ou' : Day_ou,
                    'sex' : Sex
                },
                async: false
            }).responseText;
            return result;
        }
        $('#touroku').text(user_data());

        $('#user_q_c').animate({'left' : -width_user_q_c}, 600);
        $('#user_q_d').animate({'left' : 0}, 600);
        $('#bar2').animate({'width' : "60%"}, 600);
    });
});
