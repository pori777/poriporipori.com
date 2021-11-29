<?php get_header(); ?>
[contact-form-7 id="6" title="お問い合わせ"]
<p>お問い合わせはこちらのフォームをご利用ください。</p>
<label> 氏名
    [text* your-name] </label>

<label> メールアドレス
    [email* your-email] </label>

<label> メッセージ本文 
    [textarea your-message] </label>

[submit "送信"]

<?php get_footer(); ?>