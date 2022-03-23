$('#login').click(function(){
    $('.login-form').addClass('popup');
});

$('.login-form form .fa-times').click(function(){
    $('.login-form').removeClass('popup');
});

$(window).on('load scroll',function(){

    $('#menu').removeClass('fa-times');
    $('.navbar').removeClass('nav-toggle');

    $('.login-form').removeClass('popup');