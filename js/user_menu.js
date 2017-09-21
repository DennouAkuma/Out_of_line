$(function(){
    var width_menu = $('#user_menu').innerWidth();
    var width_menu_side = $('#user_menu_side').innerWidth();

    $('#user_header').css("left", -width_menu);
    var flag = true;

    $('#user_menu_side').click(function(){
        console.log('onclick');
        if(flag == true){
            $('#user_header').animate({'left' : 0}, 600);
            flag = false;
        }else if(flag == false){
            $('#user_header').animate({'left' : -width_menu}, 600);
            flag = true;
        }
    });

    $('#user_hatena').click(function(e){
        $('#question-overlay').animate( { opacity: 'show',}, { duration: 600, easing: 'swing', });
        $('#question_moder').animate( { opacity: 'show',}, { duration: 600, easing: 'swing', });
        e.stopPropagation();
    });
    $('#question-overlay').click(function(e){
        $('#question-overlay').animate( { opacity: 'hide',}, { duration: 600, easing: 'swing', });
        $('#question_moder').animate( { opacity: 'hide',}, { duration: 600, easing: 'swing', });
        e.stopPropagation();
    });
    $('#question_cansel').click(function(){
        console.log('click');
        $('#question-overlay').animate( { opacity: 'hide',}, { duration: 600, easing: 'swing', });
        $('#question_moder').animate( { opacity: 'hide',}, { duration: 600, easing: 'swing', });
    })
    $('#question_moder').click(function(e){
        e.stopPropagation();
    });

    $('#que_img_move').click(function(){
        $('#que_img_move_add').css('display', 'inline-block');
    });
    $('#batu_ico').click(function(){
        $('#que_img_move_add').css('display', 'none');
    });

    $('#que_add').click(function(){
        var file_name = $('#file_up').val();
        console.log(file_name);
    });

    //--ドラック＆ドロップ
    $('#que_img_move_add').on('dragenter',function(e){
        e.stopPropagation();
        e.preventDefault();
    });
    $('#que_img_move_add').on('dragenter', function(e){
        e.stopPropagation();
        e.preventDefault();
    });
    $('#que_img_move_add').on('drop', function(e){
        e.preventDefault();
        files = e.originalEvent.dataTransfer.files;
        console.log(files[0].name);
    });
    //--ファイルがいドラック＆ドロップ
    $(document).on('dragenter', function (e)
    {
        e.stopPropagation();
        e.preventDefault();
    });
    $(document).on('dragover', function (e)
    {
      e.stopPropagation();
      e.preventDefault();
    });
    $(document).on('drop', function (e)
    {
        e.stopPropagation();
        e.preventDefault();
    });

});
