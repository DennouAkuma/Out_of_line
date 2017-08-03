$(function(){
    var width_body = $('body').outerWidth(true);
    var window_wid = $(window).width();

    $('#user_q_a').css("width",width_body);
    $('#user_q_b').css("width",width_body);
    $('#user_q_c').css("width",width_body);

    var width_user_q_a = $('#user_q_a').outerWidth(true);
    var width_user_q_b = $('#user_q_b').outerWidth(true);
    var width_user_q_c = $('#user_q_c').outerWidth(true);
    var Height_user_q_c = $('#user_q_c').outerHeight(true);
    var width_user_bar1 = $('#bar1').outerWidth(true);

    var offsetTop = $('#user_q_a').offset().top;
    var offsetLeft = $('#user_q_a').offset().left;
    console.log(width_body);
    console.log(width_user_q_a);
    console.log(width_user_q_b);
    //console.log(width_user_q_c);
    console.log(offsetTop);
    console.log(offsetLeft);

    window_wid -= width_user_bar1;
    window_wid /= 2;
    Height_user_q_c += offsetTop

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

    $('#next_1').click(function(){
        $('#user_q_a').animate({'left' : -width_user_q_a}, 600);
        $('#user_q_b').animate({'left' : 0}, 600);
        $('#bar2').animate({'width' : "20%"}, 600);
    });

    $('#back_1').click(function(){
        $('#user_q_b').animate({'left' : width_user_q_a}, 600);
        $('#user_q_a').animate({'left' : 0}, 600);
        $('#bar2').animate({'width' : "0%"}, 600);
    });

    $('#next_2').click(function(){
        $('#user_q_b').animate({'left' : -width_user_q_b}, 600);
        $('#user_q_c').animate({'left' : 0}, 600);
        $('#bar2').animate({'width' : "40%"}, 600);
    });

    $('#back_2').click(function(){
        $('#user_q_c').animate({'left' : width_user_q_a}, 600);
        $('#user_q_b').animate({'left' : 0}, 600);
        $('#bar2').animate({'width' : "20%"}, 600);
    });
});
