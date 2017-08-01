$(function() {
    $('#pas2').change(function(){
        var pass1 = $('#pas1').val();
        var pass2 = $('#pas2').val();
        if(pass1 === pass2){

        }else{

        }
    });
    $('#logup').submit(function() {
        var email = $('#mail').val();
        var pass1 = $('#pas1').val();
        var pass2 = $('#pas2').val();
        if(email == ""){
            $('.email').css('display', 'inline-block');
            return false;
        }else if(pass1 == ""){
            $('.pass1').css('display', 'inline-block');
            return false;
        }else if(pass2 == ""){
            return false;
        }
        if(pass1 === pass2){
            this.submit();
        }else{
            return false;
        }
    });
});
