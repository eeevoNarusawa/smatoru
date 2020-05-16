<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/reset.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/sp.css" media="only screen and (max-width:1024px)">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/layout.css" media="only screen and (min-width:1025px)">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">

	<meta name="format-detection" content="telephone=no">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/home-icon.png">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
	<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/ogp.jpg">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/toggle.js"></script>


	  <!--js-->
		<?php wp_head(); ?>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-9594684-49"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-9594684-49');
		</script>
  </head>

  <body>
    <div class="wrap">
      <main>
        <header>
          <div class="head-ttl clearfix">
            <div class="logo"><a href="/"><img src="<?php bloginfo('template_directory'); ?>/images/phase2/logo.svg" alt="SMATORU 工事現場専用フォトクラウドサービス"></a></div>
          </div>
          <nav>
            <ul class="clearfix">
              <li><a href="/function/">機能</a></li>
              <li><a href="/flow/">業務フロー</a></li>
              <?php //<li><a href="/payment/">ご利用料金</a></li> ?>
              <li><a href="/howtoapply/">お申し込み方法</a></li>
              <li><a href="/faq/">Q＆A</a></li>
            </ul>
          </nav>
          <div class="head-btn clearfix">
            <a href="https://app.smatoru.com" target="_blank"><div class="head-login">ログイン</div></a>
            <a href="http://app.smatoru.com/auth/register_form" target="_blank"><div class="head-signup">新規登録</div></a>
            <a href="/contact/"><div class="head-inquiry"><i class="fas fa-envelope"></i>お問い合わせ</div></a>			      
          </div>
        </header>
