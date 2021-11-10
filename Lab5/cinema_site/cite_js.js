
"use strict"

function changeColor(colorValue) {
    document.body.style.background = colorValue;
};


function shareOnLinked(name)
{
    if(name =="facebook"){
    window.open('https://uk-ua.facebook.com/');
    }
    if(name =="instagram"){
        window.open('https://www.instagram.com/');
    }
    if(name =="twitter"){
        window.open('https://twitter.com/?lang=uk');
    }
    if(name =="pinterest"){
        window.open('https://www.pinterest.ru/');
    }
};
$(document).ready(function(){
    $('.header_burger').click(function(event){
        $('.header_burger, .header_menu_list').toggleClass('active');
    });
});

$(function(){
    $('.drop_menu li') .hover(function() {
        $(this).children('ul').stop(false, true).fadeIn(300);
    }, function() {
        $(this).childern('ul').stop(false, true).fadeOut(300);
    } )
   });


$(document).ready(function(){
    $("#gallery").unitegallery();
});

$('.autoplay').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
  });
