<?php
/**
 * @package rookie comments form
 * @since rookie 1.0
 */
?>

<?php if (post_password_required()) { ?>
    <p class="nocomments"><?php _e('This post is password protected. Enter the password to view any comments.', 'rookie'); ?></p>
<?php return; } ?>

<div id="comments" class="comments-area">
  <?php if (have_comments()) : ?>
    <h3 class="comments-header"><?php comments_number(__('No Comments', 'rookie'), __('1 Comment', 'rookie'), __('% Comments', 'rookie')); ?> on <?php the_title(); ?></h3>
    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
      <div class="navigation">
        <div class="previous"><?php previous_comments_link(__( '<i class="fa fa-chevron-left fa-fw"></i> Older comments','rookie' )); ?></div><!-- end of .previous -->
        <div class="next"><?php next_comments_link(__( 'Newer comments <i class="fa fa-chevron-right fa-fw"></i>','rookie', 0 )); ?></div><!-- end of .next -->
      </div><!-- end .navigation -->
    <?php endif; ?>
    <ol class="commentlist">
        <?php wp_list_comments( array(
          'style'      => 'ol',
          'short_ping' => true,
          'avatar_size' => 60
        ) );
        ?>
    </ol> <!-- commentlist -->
    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
      <div class="navigation">
        <div class="previous"><?php previous_comments_link(__( '<i class="fa fa-chevron-left fa-fw"></i> Older comments','rookie' )); ?></div><!-- end of .previous -->
        <div class="next"><?php next_comments_link(__( 'Newer comments <i class="fa fa-chevron-right fa-fw"></i>','rookie', 0 )); ?></div><!-- end of .next -->
      </div><!-- end .navigation -->
    <?php endif; ?>
  <?php else : ?>
  <?php endif; ?> <!-- have_comments -->

  <?php if (comments_open()) : ?>
    <?php $comments_args = array(
                
      'id_form'           => 'commentform',
      'id_submit'         => 'submit',
      'title_reply'       => __( 'What do you think?', 'rookie'),
      'title_reply_to'    => __( 'Reply to %s', 'rookie' ),
      'cancel_reply_link' => __( 'Cancel Reply', 'rookie' ),
      'label_submit'      => __( 'Submit Comment', 'rookie' ),    
      'must_log_in'       => '<p class="must-log-in">' .
        sprintf(
          __( 'You must be <a href="%s">logged in</a> to submit a comment.' ),
          wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
        ) . '</p>',
      'logged_in_as' => '<p class="logged-in-as">' .
        sprintf(
        __( '<a href="%1$s" class="btn btn-success btn-sm"><i class="fa fa-user fa-fw"></i>%2$s</a> <a href="%3$s" title="Log out of this account" class="btn btn-primary btn-sm"><i class="fa fa-sign-out fa-fw"></i>Logout</a>' ),
          admin_url( 'profile.php' ),
          $user_identity,
          wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
        ) . '</p>',

      'comment_notes_before' => '<p class="text text-warning">' .
        __( 'Note: Your email address will not be published', 'rookie' ) . ( $req ? $required_text : '' ) .
        '</p>',

      'comment_notes_after' => '</div><p class="form-allowed-tags">' .
        sprintf(
          __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:' ), ' '  
        ) . '<br><code>' . allowed_tags() . '</code></p>',
                
        'comment_field' =>  
        '<div class="row"><div class="wpbs-textarea col-md-12">' .
        '<p><textarea class="form-control" id="comment" name="comment" rows="8" aria-required="true" placeholder="Start commenting..."></textarea></p>' .
        '</div>' ,  
        'fields' => apply_filters( 'comment_form_default_fields', array(
        'author' =>
          '<div class="row"><div class="col-md-6 col-xs-6">' .
          '<div class="input-group"><span class="input-group-addon"><i class="fa fa-user"></i></span>'.
          '<input class="form-control" placeholder="Your name" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
          '" size="30"' . $aria_req . ' /></div>' .
          '</div>',
        'email' =>
          '<div class="col-md-6 col-xs-6">' .
          '<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i> </span>'.
          '<input class="form-control" placeholder="Your email" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
          '" size="30"' . $aria_req . ' /></div>'.
          '</div></div>',
        'url' => ''
        )
      ),          
      );   
    ?>
    <?php comment_form($comments_args); ?>
  <?php endif; ?> <!-- comments_open -->

  <?php if (!empty($comments_by_type['pings'])) : // let's seperate pings/trackbacks from comments
      $count = count($comments_by_type['pings']);
      ($count !== 1) ? $txt = __('Pings&#47;Trackbacks','rookie') : $txt = __('Pings&#47;Trackbacks','rookie');
      ?>
      <h4 id="pings"><?php echo $count . " " . $txt; ?> <?php _e('for','rookie'); ?> "<?php the_title(); ?>"</h4>
      <ol class="commentlist">
          <?php wp_list_comments('type=pings&max_depth=<em>'); ?>
      </ol>
  <?php endif; ?>
</div><!-- #comments -->