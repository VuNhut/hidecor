<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package dazzling
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="geo.position" content="10.793059;106.62913">
<meta name="geo.placename" content="TP HCM">
<meta name="geo.region" content="VN-65">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div class="fb-livechat">
  <div class="ctrlq fb-overlay"></div>
  <div class="fb-widget">
    <div class="ctrlq fb-close"></div>
    <div class="fb-page" data-href="https://www.facebook.com/maynenkhitrucvitcu" data-tabs="messages" data-width="360" data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false"> </div>
    <div id="fb-root"></div>
  </div>
  <a href="https://m.me/maynenkhitrucvitcu" title="Gửi tin nhắn cho chúng tôi qua Facebook" class="ctrlq fb-button">
    <div class="bubble">1</div>
    <div class="bubble-msg">Bạn cần hỗ trợ?</div>
  </a>
</div>
<script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>$(document).ready(function(){function detectmob(){if( navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i) ){return true;}else{return false;}}var t={delay: 125, overlay: $(".fb-overlay"), widget: $(".fb-widget"), button: $(".fb-button")}; setTimeout(function(){$("div.fb-livechat").fadeIn()}, 8 * t.delay); if(!detectmob()){$(".ctrlq").on("click", function(e){e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({bottom: 0, opacity: 0}, 2 * t.delay, function(){$(this).hide("slow"), t.button.show()})) : t.button.fadeOut("medium", function(){t.widget.stop().show().animate({bottom: "30px", opacity: 1}, 2 * t.delay), t.overlay.fadeIn(t.delay)})})}});</script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=737458209691650&autoLogAppEvents=1"></script>
<div id="page" class="hfeed site no-touch">

		<div class="container header">
			<div class="row">

				<?php if( get_header_image() != '' ) : ?>

					<div id="logo" class="col-lg-4 col-12">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
					</div><!-- end of #logo -->

				<?php endif; // header image was removed ?>

				<?php if( !get_header_image() ) : ?>

				<div id="logo" class="col-lg-4 col-12">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						</div><!-- end of #logo -->

						<?php endif; // header image was removed (again) ?>

				<form role="search" method="get" class="woocommerce-product-search col-lg-4 col-md-6" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<label class="screen-reader-text" for="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>"><?php _e( 'Search for:', 'woocommerce' ); ?></label>
					<input type="search" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" class="search-field" placeholder="<?php echo esc_attr__( 'Bạn cần tìm gì&hellip;', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
					<input type="submit" value="Tìm kiếm" />
					<input type="hidden" name="post_type" value="product" />
				</form>
				<div class="hotline-mobile col-lg-4 col-md-6">
					<span class="hotro-dathang"><i class="fas fa-mobile-alt"></i>Hotline liên hệ:</span>
					<span><a href="tel:0946201949"> 0946 201 949</a></span>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-default navbar-expand-lg">
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false">
			<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img" focusable="false"><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
			</button>
			<?php dazzling_header_menu(); ?>
		</nav><!-- .site-navigation -->
		<div class="list-product-mobile">
			<p>Danh mục sản phẩm</p>
			<button class="navbar-toggler hidden-xl-up" type="button">
				<span class="line"></span>
				<span class="line"></span>
				<span class="line"></span>
			</button>
		</div>