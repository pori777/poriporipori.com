// TextTypingというクラス名がついている子要素（span）を表示から非表示にする定義
function TextTypingAnime() {
    jQuery('.TextTyping').each(function () {
        var elemPos = jQuery(this).offset().top - 50;
        var scroll = jQuery(window).scrollTop();
        var windowHeight = jQuery(window).height();
        var thisChild = "";
    if (scroll >= elemPos - windowHeight) {
        thisChild = jQuery(this).children(); //spanタグを取得
        //spanタグの要素の１つ１つ処理を追加
        thisChild.each(function (i) {
        var time = 100;
          //時差で表示する為にdelayを指定しその時間後にfadeInで表示させる
          jQuery(this).delay(time * i).fadeIn(time);
        });
    } else {
        thisChild = jQuery(this).children();
        thisChild.each(function () {
          jQuery(this).stop(); //delay処理を止める
          jQuery(thisChild).css("display", "none"); //spanタグ非表示
        });
        }
    });
}
  // 画面をスクロールをしたら動かしたい場合の記述
    jQuery(window).scroll(function () {
    TextTypingAnime();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面をスクロールをしたら動かしたい場合の記述

  // 画面が読み込まれたらすぐに動かしたい場合の記述
    jQuery(window).on('load', function () {
    //spanタグを追加する
    var element = jQuery(".TextTyping");
    element.each(function () {
        var text = jQuery(this).html();
        var textBox = "";
        text.split('').forEach(function (t) {
        if (t !== " ") {
            textBox +=  '<span>' + t + '</span>'   ;
        } else {
            textBox += t;
        }
    });
    jQuery(this).html(textBox);

    });

    TextTypingAnime();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面が読み込まれたらすぐに動かしたい場合の記述

jQuery(function () {
63
    jQuery('#menuListIcon').click(function ()  {
        jQuery("#menuListIcon").addClass("active");
        jQuery("#menuList").addClass("panelActive");
    });

    jQuery("#menuList a").click(function() {
        jQuery("#menuListIcon").removeClass("active");
        jQuery("#menuList").removeClass("panelActive");
    })
});

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