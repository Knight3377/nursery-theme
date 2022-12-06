<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
	<footer>
       <div class="footer-logo">
   			<a href="<?php echo home_url(); ?>">
            	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-footer.png">
            </a>      	
       </div>
       <div class="footer-content">
            <div class="footer-menu"><a href="<?php echo home_url(); ?>">ホーム</a></div>
            <div class="footer-menu"><a href="<?php echo home_url(); ?>/course">コース紹介</a></div>
            <div class="footer-menu"><a href="<?php echo home_url(); ?>/blog">ニュース</a></div>
            <div class="footer-menu"><a href="<?php echo home_url(); ?>/gallery">フォトギャラリー</a></div>
            <div class="footer-menu"><a href="<?php echo home_url(); ?>/access">アクセスマップ</a></div>
      </div>
    <p class="copyright">copyright (c) Kokoiku all rights reserved.</p>
    </footer>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

</body>
</html>