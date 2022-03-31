/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


(function($) {
    $('.spinner .btn:first-of-type').on('click', function() {
        $('.spinner input').val(parseInt($('.spinner input').val(), 10) + 1);
    });
    $('.spinner .btn:last-of-type').on('click', function() {
        if (parseInt($('.spinner input').val(), 10) < 1) {
            $('.spinner input').val(0);
        } else {
            $('.spinner input').val(parseInt($('.spinner input').val(), 10) - 1);
        }
    });

    $('.spinner1 .btn:first-of-type').on('click', function() {
        $('.spinner1 input').val(parseInt($('.spinner1 input').val(), 10) + 1);
    });
    $('.spinner1 .btn:last-of-type').on('click', function() {
        if (parseInt($('.spinner1 input').val(), 10) < 1) {
            $('.spinner1 input').val(0);
        } else {
            $('.spinner1 input').val(parseInt($('.spinner1 input').val(), 10) - 1);
        }
    });
})(jQuery);