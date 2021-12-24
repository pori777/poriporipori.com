function menuListIcon() {
    document.getElementById('line1').classList.toggle('line_1');
    document.getElementById('line2').classList.toggle('line_2');
    document.getElementById('line3').classList.toggle('line_3');
    document.getElementById('menuList').classList.toggle('in');
    }
    document.getElementById('menuListIcon').addEventListener('click' , function () {
    menuListIcon();
    } );

        //メニューの画像を動かす
    jQuery(function () {
    var fadeIn = jQuery('.fadeIn');
    jQuery(window).scroll(function () {
    jQuery(fadeIn).each(function () {
        var offset = jQuery(this).offset().top;
        var scroll = jQuery(window).scrollTop(); 
        var windowHeight = jQuery(window).height();
        if (scroll > offset - windowHeight + 150) {
        jQuery(this).addClass("scrollIn");
        }
    });
    });
});