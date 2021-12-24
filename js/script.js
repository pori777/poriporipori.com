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
jQuery(function (jQuery) {
    var fadeIn = jQuery('.fadeIn');
    jQuery(window).scroll(function () {
    jQuery(fadeIn).each(function () {
        var offset = jQuery(this).offset().top;
        var scroll = jQuery(window).scrollTop(); 
        var windowHeight = jQuery(window).height();
        if (scroll > offset - windowHeight) {
        jQuery(this).addClass("scrollIn");
        }
    });
    });
});

jQuery(function() {
    var hd_size = jQuery('headerTitle').innerHeight(30); //ヘッダーの高さ
    var pos = 0;
    
    jQuery(window).on('scroll', function () {
      var current_pos = jQuery(this).scrollTop(); //現在の位置を取得
      if (current_pos == 0) {  // 最上部
        jQuery('.headerTitle').css({ 'top': 0 }).hide().fadeIn(500); 
    } else {
        jQuery('.headerTitle').css({ 'top': '-' + hd_size + 'px' }).fadeOut(500);
    }
    });
});

jQuery("#menuListIcon").click(function () {//ボタンがクリックされたら
	jQuery(this).toggleClass('active');//ボタン自身に activeクラスを付与し
    jQuery("#menuList").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
});

jQuery("#menuList a").click(function () {//ナビゲーションのリンクがクリックされたら
    jQuery("#menuListIcon").removeClass('active');//ボタンの activeクラスを除去し
    jQuery("#menuList").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
});