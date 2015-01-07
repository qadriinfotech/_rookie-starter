<?php
/**
 * This is a welcome message that displays on theme activation 
 * 
 * @package Rookie welcome share
 * @since rookie 1.0
 */


	$protocol = isset( $_SERVER['https'] ) ? 'https://' : 'http://';
	$rookie_ajax_url = admin_url( 'admin-ajax.php', $protocol );
?>
<script>
	(function($) {
		$(document).ready(function() {
				$("body").on('click', '#rookie_welcome_box_hide',function(e){
	    			e.preventDefault();
	    			$(this).parent().parent().remove();
	    			$.post('<?php echo $rookie_ajax_url; ?>', {action: 'rookie_hide_welcome'}, function(response) {});
    			});
		});
	})(jQuery);
</script> 
<?php global $current_user; ?>
<h3>Welcome to Rookie!</h3>
<p>Dear <?php echo $current_user->display_name; ?>,</p>
<p>Thanks for installing <strong>Rookie</strong> I really hope you enjoy using this theme as much as i have enjoyed creating it.<br>I have spent a lot of time to develop/support this theme, if you liked it Please consider donating so I can keep this as a free theme and add more features in the future. If you can't that's okay as well, I will do my best to make sure you enjoy using our theme!</p>
<p>Thank you!</p>
<p></p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="hosted_button_id" value="JUXUWMEFUEJPW">
	<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<h3>Start using Rookie</h3>
<ul>
	<li>
		Refer to <a href="<?php echo esc_url('http://www.croti.com/starter'); ?>" target="_blank">Rookie Documentation</a> to learn more about rookie features.
	</li>
	<li>
		If you have any issue do not hesitate to join the <a href="<?php echo esc_url('https://github.com/abukwaik/rookie/issues'); ?>" target="_blank">issues tracker</a>
	</li>
	<li>
		Donate again! ^_^
	</li>
</ul>
<?php get_template_part('includes/welcome-share'); ?>
<p class="description"><a href="#" id="rookie_welcome_box_hide">Hide this message</a></p>