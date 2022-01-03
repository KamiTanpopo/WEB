
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

//$(function () {
//    $('[data-toggle="tooltip"]').tooltip({                      
//   });
//  });
//$(document).ready(function(){
 //   $("#gallery").unitegallery();
//});

$('.autoplay').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
  });

$(function() {
	
    $('#dialog').dialog({
                width: 550
    }
    );		
});

(function($) {
    $(function() {
        $('ul.tabs__caption').on('click', 'li:not(.active)', function() {
        $(this)
            .addClass('active').siblings().removeClass('active')
            .closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
        });
    });
})(jQuery);

$(document).ready(function(){
    $('button.send').on('click', function(){
       var nameVal = $('input.name').val();
       var textVal = $('textarea.text').val();
       $.ajax({
       method: "POST",
       url: "com.php",
       data: { name: nameVal, text: textVal}
       })
      .done(function( ) {
       // alert( "Data Saved: " + msg );
       $('input.name').val('');
       $('textarea.text').val('');
  });
   
    })
  
  });

 