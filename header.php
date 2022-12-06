<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>KOKOIKU Co.LTD</title>
    <meta name="robots" content="noindex" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css" type="text/css" />
    <link rel="favicon"  href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style_sp.css" type="text/css"/>

  </head>

<body>
  	<div class="bk">
  		<header>
          <div class="header">
              <div class="header_content">
                <div class="logo">
                  <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="logo-white">
                  </a>
                </div>
                <div class="navgation">
                  <ul>
                      <li class=""><a href="<?php echo home_url(); ?>"><span class="en-menu">HOME</span><br><span>ホーム</span></a></li>
                      <li class=""><a href="<?php echo home_url(); ?>/course"><span class="en-menu">COURSE</span><br><span>コース紹介</span></a></li>
                      <li class=""><a href="<?php echo home_url(); ?>/blog"><span class="en-menu">NEWS</span><br><span>ニュース</span></a></li>
                      <li class=""><a href="<?php echo home_url(); ?>/gallery"><span class="en-menu">GALLERY</span><br><span>フォトギャラリー</span></a></li>
                      <li class=""><a href="<?php echo home_url(); ?>/access"><span class="en-menu">ACCESS</span><br><span>アクセスマップ</span></a></li>
                      <button class="contact-top">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail_icon.png">
                          <a href="<?php echo home_url(); ?>/contact">お問い合わせ</a>
                      </button>
                      <button class="tel">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone_icon.png">
                          <a href="tel:+09052635519">090-5263-5519</a>
                      </button>
                  </ul>
                </div>
                
                <div class="menu_btn">
                    <div class="container" onclick="openNav(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </div>
              </div>

            <div id="myNav" class="overlay">
                <div class="overlay-content">
                  <ul>
                      <li class=""><a href="<?php echo home_url(); ?>"><span class="en-menu">ホーム</span></a></li>
                      <li class=""><a href="<?php echo home_url(); ?>/course"><span class="en-menu">コース紹介</span></a></li>
                      <li class=""><a href="<?php echo home_url(); ?>/news"><span class="en-menu">ニュース</span></a></li>
                      <li class=""><a href="gallery.html"><span class="en-menu">フォトギャラリー</span></a></li>
                      <li class=""><a href="<?php echo home_url(); ?>/access"><span class="en-menu">アクセスマップ</span></a></li>
                      <button class="contact-top">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail_icon.png">
                          <a href="<?php echo home_url(); ?>/contact">お問い合わせ</a>
                      </button>
                      <button class="tel">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone_icon.png">
                          <a href="tel:+09052635519">090-5263-5519</a>
                      </button>          
                  </ul>
                </div>
            </div>    
          </div>
        </header>
