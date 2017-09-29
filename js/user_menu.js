$(function(){
    var qestion_array = new Array();

    var str_question = "first";

    var select_array = new Array();
    var checkbox_array = new Array();
    var text_array = new Array();

    var question_number = 1;

    var select_number = 1;
    var checkbox_number = 1;
    var textbox_number = 1;

    var select_option_number = 1;

    var select_add_text;
    var select_option_number;
    var select_option_text;

    var li_number;
    var question_number_0 = 1;

    var checkbox_number = 1;

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
        var window_size = $(window).width() - $('body').prop('clientWidth');
        $('html, body').addClass('lock');

        $('#user_main').append('<div class="question-overlay"></div>');
        $('.question-overlay').fadeIn('slow');
        $('#question_moder').wrap('<div class="moder_wrap"></div>');
        $('.moder_wrap').show();
        $('#question_moder').fadeIn('slow');

        $('#question_moder').click(function(e){
            e.stopPropagation();
        });

        $('.moder_wrap').off().click(function(){
            $('#question_moder').fadeOut('slow');
            $('.question-overlay').fadeOut('slow',function(){
                $('html, body').removeClass('lock');
                $('.question-overlay').remove();
                $('#question_moder').unwrap();
            });

            var append_str = '<li>' +
                             '<label>タイトル' +
                             '<input id="question_title" type="text" size="40" placeholder="タイトルを入力してください" />' +
                             '</label>' +
                             '</li>';

            qestion_array = [];
            str_question = "first";
            select_array = [];
            checkbox_array = [];
            text_array = [];
            question_number = 1;
            select_number = 1;
            checkbox_number = 1;
            textbox_number = 1;
            select_option_number = 1;
            question_number_0 = 1;
            checkbox_number = 1;
            $("#question_eria").empty();
            $("#question_eria").append(append_str);

            $('#que_add').css('display', 'inline-block');
            $('#que_img_move_bt').css('display', 'none');
            $('#select_add_bt').css('display', 'none');
            $('#checkbox_add_bt').css('display', 'none');
            $('#text_add_bt').css('display', 'none');
        });
        e.stopPropagation();
    });


    $('#que_img_move_bt').click(function(){
        $('#que_img_move_add').css('display', 'inline-block');
        $('#que_img_move_bt').css('display', 'none');
    });
    $('#batu_ico').click(function(){
        $('#que_img_move_add').css('display', 'none');
        $('#img_display').css('display', 'inline-block');
        $('#que_img_move_bt').css('display', 'inline-block');
        $('#img_preview').empty();
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
        files = e.originalEvent.dataTransfer.files[0];
        console.log(files.name);
        console.log(files.size);
        console.log(files.type);

        $('#img_preview').css('display', 'inline-block');
        $('#img_display').css('display', 'none');

        if(files.type == 'image/jpeg' || files.type == 'image/png'){
            console.log('画像です');
            url = URL.createObjectURL(files);
            $('#img_preview').append('<img  class="img_size" src="' + url + '">');
        }
        /*
        var file = e.originalEvent.dataTransfer.files[0];
        var formData = new FormData();
        formData.append('file', file);

        $.ajax('../php/img_upload.php', {
            method: 'POST',
            contentType: false,
            processData: false,
            data:formData,
            error: function(xhr, error) {
                console.log('アップデートに失敗しました');
                console.log(error);
            },
            success: function(response) {
                console.log('アップロードに成功しました');
                console.log(response);
            }

        });
        */
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

    //質問追加
    $("#que_add").click(function(){
        console.log(str_question);
        if(str_question == 'first'){

        }else if(str_question == 'se'){
            var lang = 'question_str' + (question_number_0 - 1);
            console.log(lang);
            lang = $('#' +lang).val();
            console.log(lang);
            select_array.unshift(lang);
            qestion_array.push(select_array);
            console.log(qestion_array);
            select_array = [];
        }else if(str_question == 'tx'){
            var lang = 'question_str' + (question_number_0 - 1);
            console.log(lang);
            lang = $('#' +lang).val();
            text_array.unshift(lang);
            qestion_array.push(text_array);
            console.log(qestion_array);
            text_array = [];
        }else if(str_question == 'ch'){
            var lang = 'question_str' + (question_number_0 - 1);
            console.log(lang);
            lang = $('#' +lang).val();
            console.log(lang);
            checkbox_array.unshift(lang);
            qestion_array.push(checkbox_array);
            console.log(qestion_array);
            checkbox_array = [];
        }else if(str_question == 'ra'){

        }

        li_number = 'li_question_number_' + question_number;
        var str_que_in = '<li id="' + li_number + '"><label>Q' + question_number_0 + '<input type="text" size="40" id="question_str' + question_number_0 + '" placeholder="質問を入力してください"></label></li>';

        question_number_0++;

        $("#question_eria").append(str_que_in);
        $('#que_add').css('display', 'none');
        $('#que_img_move_bt').css('display', 'inline-block');
        $('#select_add_bt').css('display', 'inline-block');
        $('#checkbox_add_bt').css('display', 'inline-block');
        $('#text_add_bt').css('display', 'inline-block');
        question_number++;
    });

    //--select追加
    $('#select_add_bt').click(function(){
        str_question = 'se';
        select_array.push('se');
        console.log(select_array);

        $('#que_add').css('display', 'inline-block');
        $('#que_img_move_bt').css('display', 'none');
        $('#select_add_bt').css('display', 'none');
        $('#checkbox_add_bt').css('display', 'none');
        $('#text_add_bt').css('display', 'none');

        li_number = 'li_question_number_' + question_number;

        var select_string = '<li id="' + li_number +
                            '"><select id="select_question_number' + select_number +
                            '"></select><br /><input size="37" id="select_question_text_' +
                            select_number + '" type="text" placeholder="追加する項目を入力">'+
                            '<button class="select_question_class" id="select_question_add_' + select_number +
                            '">+add</button></li>';
        select_option_text = 'select_question_text_' + select_number;
        select_add_text = 'select_question_add_' + select_number;
        select_option_number = 'select_question_number' + select_number;

        $("#question_eria").append(select_string);

        select_number++;
        console.log(select_add_text);
        question_number++;
    });

    $("#question_moder").on("click", ".select_question_class", (function(e){

        var select_id = $(this).attr("id");
        var option_bang = select_id.slice(-1);

        var in_text = $("#select_question_text_" + option_bang).val();
        if($("#select_question_text_" + option_bang).val() != ""){
            $("#select_question_number" + option_bang).append('<option>' + in_text + '</option>');
            $("#select_question_text_" + option_bang).val('');
        }else{
            alert('項目を入力してください');
        }
        select_array.push(in_text);
        console.log(select_array);
        e.stopPropagation();
    }));

    //checkbox
    $("#checkbox_add_bt").click(function(){
        str_question = 'ch';
        checkbox_array.push('ch');
        console.log(checkbox_array);

        li_number = 'li_question_number_' + question_number;
        var str_que_in = '<li id="' + li_number + '"><input type="checkbox" name="test">' +
                         '<input type="text" size="37" placeholder="追加する項目を入力" id="checkbox_question_text_' + checkbox_number + '">' +
                         '<button class="checkbox_question_class" id="checkbox_question_add_' + checkbox_number +
                         '">+add</button></li>';

        $("#question_eria").append(str_que_in);
        $('#que_add').css('display', 'inline-block');
        $('#que_img_move_bt').css('display', 'none');
        $('#select_add_bt').css('display', 'none');
        $('#checkbox_add_bt').css('display', 'none');
        $('#text_add_bt').css('display', 'none');
        question_number++;
        checkbox_number++;
    });

    $("#question_moder").on("click", ".checkbox_question_class", (function(e){
        var checkbox_id = $(this).attr("id");
        var checkbox_bang = checkbox_id.slice(-1);
        console.log(checkbox_id);

        var in_text = $("#checkbox_question_text_" + checkbox_bang).val();
        checkbox_array.push(in_text);
        console.log(checkbox_array);
        $("#" + li_number).prepend('<label><input type="checkbox">' + in_text + '</label><br>');
        $("#checkbox_question_text_" + checkbox_bang).val('');
    }));

    //textbox
    $("#text_add_bt").click(function(){
        str_question = 'tx';
        text_array.push('tx');

        li_number = 'li_question_number_' + question_number;
        var str_que_in = '<li id="' + li_number + '"><input id="text_question_text_' + textbox_number +
                         '" type="text" size="37" placeholder="入力してもらう内容を記述してください">' +
                         '<button class="text_question_class" id="text_question_add_' + textbox_number +
                          '">+add</button></li>';

        $("#question_eria").append(str_que_in);
        $('#que_add').css('display', 'inline-block');
        $('#que_img_move_bt').css('display', 'none');
        $('#select_add_bt').css('display', 'none');
        $('#checkbox_add_bt').css('display', 'none');
        $('#text_add_bt').css('display', 'none');
        textbox_number++;
        question_number++;
    });
    $("#question_moder").on("click", ".text_question_class", (function(e){
        var text_id = $(this).attr("id");
        var text_bang = text_id.slice(-1);
        console.log(text_id);

        var in_text = $("#text_question_text_" + text_bang).val();
        text_array.push(in_text);
        console.log(text_array);
        $("#" + li_number).prepend('<label><input size="37" type="text" placeholder="' + in_text + '"><br>');
        $("#text_question_text_" + text_bang).val('');
    }));

    //作成
    $("#question_moder").on("click" , "#question_submit" ,function(){

        if(str_question == 'first'){

        }else if(str_question == 'se'){
            var lang = 'question_str' + (question_number_0 - 1);
            console.log(lang);
            lang = $('#' +lang).val();
            console.log(lang);
            select_array.unshift(lang);
            qestion_array.push(select_array);
            console.log(qestion_array);
            select_array = [];
        }else if(str_question == 'tx'){
            var lang = 'question_str' + (question_number_0 - 1);
            console.log(lang);
            lang = $('#' +lang).val();
            text_array.unshift(lang);
            qestion_array.push(text_array);
            console.log(qestion_array);
            text_array = [];
        }else if(str_question == 'ch'){
            var lang = 'question_str' + (question_number_0 - 1);
            console.log(lang);
            lang = $('#' +lang).val();
            console.log(lang);
            checkbox_array.unshift(lang);
            qestion_array.push(checkbox_array);
            console.log(qestion_array);
            checkbox_array = [];
        }else if(str_question == 'ra'){

        }

        var title = new Array();
        title.push($('#question_title').val());
        console.log(title);
        qestion_array.unshift(title);
        console.log(qestion_array);


    });
});
