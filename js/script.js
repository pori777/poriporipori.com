jQuery(document).ready(function() {
    var pageTop = jQuery('.pageTop');
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            pageTop.fadeIn();
        } else {
            pageTop.fadeOut();
        }
    });
    pageTop.click(function () {
        jQuery('body, html').animate({ scrollTop: 0 }, 500);
        return false;
    });
});

jQuery('.hamburgerIcon').on('click' , function() {
    document.getElementById('line1').classList.toggle('toggleLine_1');/*menuListIcon */
    document.getElementById('line2').classList.toggle('toggleLine_2');
    document.getElementById('line3').classList.toggle('toggleLine_3');
    document.getElementById('spHeader__menuList').classList.toggle('in');/**menuList */
});

jQuery(document).ready(function(){
    jQuery('#').click(function(){
        var speed = 500;
        var href= jQuery(this).attr("href");
        var target = jQuery(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        jQuery("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });
});