<?php
/***Theme Name	: BusiProf
 * @file           author.php
 * @package        Busiprof
 * @author         Priyanshu Mittal
 * @copyright      2013 Webriti
 * @license        license.txt
 * @filesource     wp-content/themes/Busiprof/author.php
 **/
 get_template_part('banner', 'header') ; ?>
	<div class="container">
	   <!---main-->
		<div class="row-fluid">
			<div class="span8 blog_left"> 
					<?php if ( have_posts() ) : ?>
					<?php the_post(); ?>
					<h2><?php _e( 'Author Archives : ', 'busi_prof' ); echo get_the_author(); ?></h2>
					<?php rewind_posts();?>
					<?php
					// If a user has filled out their description, show a bio on their entries.
					if ( get_the_author_meta( 'description' ) ) : ?>
					<div class="author-info">
						<div class="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'busiprof_author_bio_avatar_size', 60 ) ); ?>
						</div><!-- .author-avatar -->
						<div class="author-description">
							<h2><?php printf( __( 'About %s', 'busi_prof' ), get_the_author() ); ?></h2>
							<p><?php the_author_meta( 'description' ); ?></p>
						</div><!-- .author-description	-->
					</div><!-- .author-info -->
					<?php endif; ?>
				<?php while(have_posts()): the_post();?>
				<div class="blog_section" id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
					<?php $defalt_arg =array('class' => "blog_section_img" )?>
					<?php if(has_post_thumbnail()):?>				
					<a href="<?php the_permalink(); ?>"title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('', $defalt_arg); ?></a>
					<?php endif;?>
					<div class="blog_link">
						<span><img  src="<?php echo $image_uri. '/blog_ic.png' ?>">&nbsp;&nbsp;<?php the_time('M j,Y');?></span> 
						<a><img  src="<?php echo $image_uri. '/blog_ic2.png'?>">&nbsp;&nbsp;<?php  comments_popup_link( __( 'Leave a comment', 'busi_prof' ) ); ?></a>
						<a><img  src="<?php echo $image_uri. '/blog_ic3.png'?>"><?php the_category('|'); ?></a>
					</div>
					<h2><a href="<?php the_permalink(); ?>"title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<div class="blog_con_mn">					
						<?php  the_content( __( 'Read More' , 'busi_prof' ) ); ?>
					</div>
				</div>
				<?php endwhile;?>
				<?php endif; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>