<?php
/**
 * @package Rookie Startar
 * @author Abukwaik http://www.croti.com
 * @since rookie 1.0
 */


function header_socials() { ?>
	
	<div class="top-bar-right social-style-font_icons" id="top-bar-social">
		<?php $twitter = ro_get_option('twitter'); 
		if (!empty ($twitter) && ro_get_option('twitter')) { ?>
		<a target="_blank" title="twitter" href="<?php echo $twitter; ?>">
			<i class="fa fa-twitter"></i>
		</a>
		<?php } ?>
		<?php $facebook = ro_get_option('facebook'); 
		if (!empty ($facebook) && ro_get_option('facebook')) { ?>
		<a target="_blank" title="facebook" href="<?php echo $facebook; ?>">
			<i class="fa fa-facebook"></i>
		</a>
		<?php } ?>
		<?php $google_plus = ro_get_option('google_plus'); 
		if (!empty ($google_plus) && ro_get_option('google_plus')) { ?>
		<a target="_blank" title="google+" href="<?php echo $google_plus; ?>">
			<i class="fa fa-google-plus"></i>
		</a>
		<?php } ?>
		<?php $pinterest = ro_get_option('pinterest'); 
		if (!empty ($pinterest) && ro_get_option('pinterest')) { ?>
		<a target="_blank" title="pinterest" href="<?php echo $pinterest; ?>">
			<i class="fa fa-pinterest"></i>
		</a>
		<?php } ?>
		<?php $dribbble = ro_get_option('dribbble'); 
		if (!empty ($dribbble) && ro_get_option('dribbble')) { ?>  
		<a target="_blank" title="dribbble" href="<?php echo $dribbble; ?>">
			<i class="fa fa-dribbble"></i>
		</a>
		<?php } ?>
		<?php $linkedin = ro_get_option('linkedin'); 
		if (!empty ($linkedin) && ro_get_option('linkedin')) { ?>  
		<a target="_blank" title="linkedin" href="<?php echo $linkedin; ?>">
			<i class="fa fa-linkedin"></i>
		</a>
		<?php } ?>
		<?php $flickr = ro_get_option('flickr'); 
		if (!empty ($flickr) && ro_get_option('flickr')) { ?>  
		<a target="_blank" title="flickr" href="<?php echo $flickr; ?>">
			<i class="fa fa-flickr"></i>
		</a>
		<?php } ?>
		<?php $vimeo = ro_get_option('vimeo'); 
		if (!empty ($vimeo) && ro_get_option('vimeo')) { ?> 
		<a target="_blank" title="vimeo" href="<?php echo $vimeo; ?>">
			<i class="fa fa-vimeo-square"></i>
		</a>
		<?php } ?>
		<?php $rss = ro_get_option('rss'); 
		if (!empty ($rss) && ro_get_option('rss')) { ?>
		<a target="_blank" title="rss" href="<?php echo $rss; ?>">
			<i class="fa fa-rss"></i>
		</a>
		<?php } ?>
	</div><!-- #top-bar-social -->
<?php }

function post_socials() {
	if (is_single()) {
		global $post;
		$permalink = get_permalink(get_the_ID());
		$post_socials_text = ro_get_option ('post_socials_text');
		echo '
			<div class="clearfix">'; ?>	
				<ul class="post-share-buttons unstyled">
				<?php if (!empty ($post_socials_text) || ro_get_option('post_socials')) { ?>
				<li class="social-question"><?php echo ro_get_option ('post_socials_text'); ?></li>
				<?php } ?>
					<li class="twitter">
						<a href="<?php echo esc_url('https://twitter.com/share') ;?>" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>">Tweet</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</li>
					<li class="facebook">
						<div id="fb-root"></div><div class="fb-like" data-href="<?php echo $permalink; ?>" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false" data-share="true" data-font="arial"></div>
					</li>
					<li class="google">
						<div class="g-plusone" data-size="medium" data-href="<?php echo $permalink; ?>"></div>
					</li>
					<li class="pinterest">
						<a href="javascript:void((function(){var e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','//assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)})());"><img src='//assets.pinterest.com/images/PinExt.png' alt=""/></a>
					</li>
				</ul>
			</div> <!-- post-social-wrap -->
	<!-- Facebook Like Button -->
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) {return;}
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
			fjs.parentNode.insertBefore(js, fjs);
		}
		(document, 'script', 'facebook-jssdk'));
	</script>
	<!-- Google+ Button -->
	<script type="text/javascript">
		(function() {
			var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
			po.src = '//apis.google.com/js/plusone.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		})();
	</script>
	<?php 
	}
}

function author_socials() { ?>

	<?php if (!empty ($author_socials_text) || ro_get_option('author_socials')) { ?>
	<span class="author-social-bar-text"><?php echo ro_get_option ('author_socials_text'); ?></span>
	<?php } ?>
	<ul class="author-social-bar unstyled">
		<?php $twitter = ro_get_option('author_twitter'); 
		if (!empty ($twitter) && ro_get_option('author_twitter')) { ?>
		<li>
			<a class="twitter" target="_blank" title="twitter" href="<?php echo $twitter; ?>">
				<i class="fa fa-twitter"></i>
			</a>
		</li>
		<?php } ?>
		<?php $facebook = ro_get_option('author_facebook'); 
		if (!empty ($facebook) && ro_get_option('author_facebook')) { ?>
		<li>
			<a class="facebook" target="_blank" title="facebook" href="<?php echo $facebook; ?>">
				<i class="fa fa-facebook"></i>
			</a>
		</li>
		<?php } ?>

		<?php $google_plus = ro_get_option('author_google_plus'); 
		if (!empty ($google_plus) && ro_get_option('author_google_plus')) { ?>
		<li>
			<a class="google_plus" target="_blank" title="google+" href="<?php echo $google_plus; ?>">
				<i class="fa fa-google-plus"></i>
			</a>
		</li>
		<?php } ?>

		<?php $linkedin = ro_get_option('author_linkedin'); 
		if (!empty ($linkedin) && ro_get_option('author_linkedin')) { ?>  
		<li>
			<a class="linkedin" target="_blank" title="linkedin" href="<?php echo $linkedin; ?>">
				<i class="fa fa-linkedin"></i>
			</a>
		</li>
		<?php } ?>
	</ul>
<?php }

function footer_socials() { ?>
	
	<div id="footer-socials">
		<div class="social-bar">
			<div class="container-fluid clearfix">
				<div class="row-fluid">
					<span class="social-bar-text"><?php echo ro_get_option ('footer_socials_text'); ?></span>
					<?php $twitter = ro_get_option('twitter'); 
					if (!empty ($twitter) && ro_get_option('twitter')) { ?>
					<a class="twitter" target="_blank" title="twitter" href="<?php echo $twitter; ?>">
						<i class="fa fa-twitter"></i>
					</a>
					<?php } ?>
					<?php $facebook = ro_get_option('facebook'); 
					if (!empty ($facebook) && ro_get_option('facebook')) { ?>
					<a class="facebook" target="_blank" title="facebook" href="<?php echo $facebook; ?>">
						<i class="fa fa-facebook"></i>
					</a>
					<?php } ?>
					<?php $google_plus = ro_get_option('google_plus'); 
					if (!empty ($google_plus) && ro_get_option('google_plus')) { ?>
					<a class="google_plus" target="_blank" title="google+" href="<?php echo $google_plus; ?>">
						<i class="fa fa-google-plus"></i>
					</a>
					<?php } ?>
					<?php $pinterest = ro_get_option('pinterest'); 
					if (!empty ($pinterest) && ro_get_option('pinterest')) { ?>
					<a class="pinterest" target="_blank" title="pinterest" href="<?php echo $pinterest; ?>">
						<i class="fa fa-pinterest"></i>
					</a>
					<?php } ?>
					<?php $dribbble = ro_get_option('dribbble'); 
					if (!empty ($dribbble) && ro_get_option('dribbble')) { ?>  
					<a class="dribbble" target="_blank" title="dribbble" href="<?php echo $dribbble; ?>">
						<i class="fa fa-dribbble"></i>
					</a>
					<?php } ?>
					<?php $linkedin = ro_get_option('linkedin'); 
					if (!empty ($linkedin) && ro_get_option('linkedin')) { ?>  
					<a class="linkedin" target="_blank" title="linkedin" href="<?php echo $linkedin; ?>">
						<i class="fa fa-linkedin"></i>
					</a>
					<?php } ?>
					<?php $flickr = ro_get_option('flickr'); 
					if (!empty ($flickr) && ro_get_option('flickr')) { ?>  
					<a class="flickr" target="_blank" title="flickr" href="<?php echo $flickr; ?>">
						<i class="fa fa-flickr"></i>
					</a>
					<?php } ?>
					<?php $vimeo = ro_get_option('vimeo'); 
					if (!empty ($vimeo) && ro_get_option('vimeo')) { ?> 
					<a class="vimeo" target="_blank" title="vimeo" href="<?php echo $vimeo; ?>">
						<i class="fa fa-vimeo-square"></i>
					</a>
					<?php } ?>
					<?php $rss = ro_get_option('rss'); 
					if (!empty ($rss) && ro_get_option('rss')) { ?>
					<a class="rss" target="_blank" title="rss" href="<?php echo $rss; ?>">
						<i class="fa fa-rss"></i>
					</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
<?php }

