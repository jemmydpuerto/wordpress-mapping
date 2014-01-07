	<?php
/*
 * @file           comment.php
 * @package        Busiprof
 * @author         Priyanshu Mittal
 * @copyright      2013 Webrit
 * @license        license.txt
 * @filesource     wp-content/themes/Busiprof/comment.php
*/	?>
	<?php if ( post_password_required() ) : ?>
		<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'busi_prof' ); ?></p>
	<?php return;endif;?>
         <?php if ( have_comments() ) : ?>		
         <div class="row-fluid comment_mn">	
			<?php 
				  printf( _n( '<h3>Comment on <span>%2$s</span></h3>', '<h3 style="color: #f22853;">%1$s thoughts on &ldquo;%2$s&rdquo;</h3>', get_comments_number(), 'busi_prof' ),
					number_format_i18n( get_comments_number() ),  get_the_title()  );?>					
					<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :  ?>		
		<nav id="comment-nav-above">
			<h1 class="assistive-text"><?php _e( 'Comment navigation', 'busi_prof' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'busi_prof' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'busi_prof' ) ); ?></div>
		</nav>
		<?php endif;  ?>		
		<?php wp_list_comments( array( 'callback' => 'busiprof_comment' ) ); ?>
	</div><!-- comment_mn -->
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below">
			<h1 class="assistive-text"><?php _e( 'Comment navigation', 'busi_prof' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'busi_prof' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'busi_prof' ) ); ?></div>
		</nav>
		<?php endif;  ?>
		<?php	elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :  ?>			
	<?php endif; ?>   
<?php if ('open' == $post->comment_status) : ?> 
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php _e("You must be",'busi_prof')?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php _e("logged in",'busi_prof')?></a> <?php _e("to post a comment",'busi_prof')?></p>
<?php else : ?> 
<div class="row-fluid leave_comment_mn">
<?php 
 $fields=array(
    'author' => '<input class="span6" name="author" id="author" value="" type="text"  placeholder="Your name"  />',
    'email'  => '<input class="span6" name="email" id="email" value=""   type="text" placeholder="Email Id">',   
);
 function my_fields($fields) { return $fields;}
add_filter('comment_form_default_fields','my_fields'); 
	$defaults = array(
     'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
	'comment_field'        => '<textarea rows="3" id="comment" name="comment" type="text" placeholder="Message" rows="3"></textarea>',		
	 'logged_in_as' => '<p class="logged-in-as">' . __( "Logged in as ",'busi_prof' ).'<a href="'. admin_url( 'profile.php' ).'">'.$user_identity.'</a>'. '<a href="'. wp_logout_url( get_permalink() ).'" title="Log out of this account">'.__(" Log out?",'busi_prof').'</a>' . '</p>',
	 'id_submit'            => 'submit_btn',
	'label_submit'         =>__( 'Submit Now','busi_prof'),
	'comment_notes_after'  => '',
	 'title_reply'       => __( 'Leave a Comment','busi_prof'),
	 'id_form'      => 'action'	
	);
comment_form($defaults);
?>					
</div><!-- leave_comment_mn -->
<?php endif; // If registration required and not logged in ?>
<?php endif;  ?>