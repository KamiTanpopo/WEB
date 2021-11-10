"use strict"

$(function() {
    $ ("#datepicker" ).datepicker();
} );


$( "#polzunok" ).slider({
    animate: "slow",
    range: "min",    
    value: 50
});

$(document).ready(function() {
    $('.slide').slider({
        slide: function(event, ui) {
            // from pure red to pure green
            var r, g, b = 0;
            g = Math.round(255 / 100 * ui.value); // 2.55 * (0 - 100) = 0 - 255
            r = 255 - g;
            var color = 'rgb(' + r + ',' + g + ',' + b + ')';
            $(this).css({
                'background': color
            });
        }
    });
});