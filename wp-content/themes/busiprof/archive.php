<?php
/*
 *Theme Name	: BusiProf
 * @file           achive.php
 * @package        Busiprof
 * @author         Priyanshu Mittal
 * @copyright      2013 Webriti
 * @license        license.txt
 * @filesource     wp-content/themes/Busiprof/archive.php
*/
	get_template_part('banner','header');
	$image_uri=get_template_directory_uri(). '/images' ;
 ?>
<div class="container">
	<div class="row-fluid">
		<div class="span8 blog_left">
            <div class="blog_section">
				<h2><?php if ( is_day() ) : ?>
						<?php  _e( "Daily Archives: ", 'busi_prof' ); echo (get_the_date()); ?>
						<?php elseif ( is_month() ) : ?>
							<?php  _e( "Monthly Archives: ", 'busi_prof' ); echo (get_the_date( 'F Y' )); ?>
						<?php elseif ( is_year() ) : ?>
							<?php  _e( "Yearly Archives: ", 'busi_prof' );  echo (get_the_date( 'Y' )); ?>
						 <?php else : ?>
							<?php _e( "Blog Archives: ", 'busi_prof' ); ?>			 
						<?php endif; ?>
				</h2>
                <!--page_blog_row_mn-->
                <?php while(have_posts()): the_post();?>
                <h2><a   href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to ', 'busi_prof' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php $title = get_the_title();
					if (strlen($title) == 0)  _e('no title','busi_prof'); else  echo $title; ?>	</a>
				</h2>
				<div class="blog_link">
					<span><img  src="<?php echo $image_uri. '/blog_ic.png' ?>">&nbsp;&nbsp;<?php the_time('M j,Y');?></span> 
					<a><img  src="<?php echo $image_uri. '/blog_ic2.png'?>">&nbsp;&nbsp;<?php  comments_popup_link( __( 'Leave a comment', 'busi_prof' ) ); ?></a>
					<span><img  src="<?php echo $image_uri. '/blog_ic3.png'?>"><?php the_category(' | '); ?></span>
				</div>
				<?php if(has_post_thumbnail()):?>					
					<div class="blog_img">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail('large',array('class' => 'img-polaroid'));?></a>
					</div>
				<?php endif;?>					
				<div class="blog_con_mn"><?php  the_content( __( 'Read More' , 'busi_prof' ) ); ?></div>
				<?php endwhile;?>	
			</div>
			<div class="pagination_blog">	
		<ul>
			<li class="paginanext"><?php previous_posts_link(); ?></li>
			<li class="paginanext"><?php next_posts_link(); ?></li>
		</ul>
	</div>
			</div>
			<?php get_sidebar();?>
	</div><!--blog_right_bg_mn_con-->
</div><!--page_wi-->
<?php get_footer();?>