<?php
/**
 * @package Rookie Startar
 * @author Abukwaik http://www.croti.com
 * @since rookie 1.0
 */

	$theme_url = 'http://starter.croti.com';
	$theme_title = 'Rookie - Responsive Starter Theme';
?>
<?php if(!empty($theme_url) && !empty($theme_title)) : ?>
<h3><?php echo __( 'Would you like to share?', 'rookie' ); ?></h3>
<script type="text/javascript">
	(function(w, d, s) {
		function go(){
		var js, fjs = d.getElementsByTagName(s)[0], load = function(url, id) {
		if (d.getElementById(id)) {return;}
	  	js = d.createElement(s); js.src = url; js.id = id;
	  	fjs.parentNode.insertBefore(js, fjs);
		};
		load('//connect.facebook.net/en_US/all.js#xfbml=1', 'fbjssdk');
		load('https://apis.google.com/js/plusone.js', 'gplus1js');
		load('//platform.twitter.com/widgets.js', 'tweetjs');
		load('//assets.pinterest.com/js/pinit.js', 'pinitjs');
	}
	if (w.addEventListener) { w.addEventListener("load", go, false); }
		else if (w.attachEvent) { w.attachEvent("onload",go); }
	}(window, document, 'script'));
</script> 
<ul id="welcome_share">
	<li class="twitter"><a class="twitter-share-button" data-count="horizontal" data-via="RookieTheme" data-text="<?php echo $theme_title; ?>" data-url="<?php echo $theme_url; ?>"></a></li>
	<li class="facebook"><div class="fb-like" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false" data-href="<?php echo $theme_url.'?ref=RookieTheme'; ?>"></div></li>
	<li class="gplus"><g:plusone size="medium" href="<?php echo $theme_url; ?>"></g:plusone></li>
</ul>

<?php endif; ?>