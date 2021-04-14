$('#mainForm').validate();

var navPage = function() {
    $('.page1').hide('fast');
    $('.page2').show('fast');
};

$('.btn-nextPage').on('click',function(){
    if($('#mainForm').valid()) {
        $.ajax({
            url: 'http://192.168.1.1:85/user/splashLogin.php',
            jsonp: 'navPage',
            dataType:"jsonp",
            data: {
                phone: $('input[name="phone"]').val(),
                name: $('input[name="name"]').val()
            }
        });
    }
});