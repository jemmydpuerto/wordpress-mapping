<?php
/***Theme Name	: BusiProf
	
 * @file           search.php
 * @package        Busiprof
 * @author         Priyanshu Mittal
 * @copyright      2013 Webriti
 * @license        license.txt
 * @filesource     wp-content/themes/Busiprof/search.php
 * 
 */
?>
<?php  get_template_part('banner','header');
		$image_uri=get_template_directory_uri(). '/images' ;
?>

<div class="container">	
 <!-- Main --> 
	<div class="row-fluid">
          <div class="span8 blog_left">
			<?php if ( have_posts() ) : ?>
			<h2><?php printf( __( 'Search Results for: %s', 'busi_prof' ), get_search_query() ); ?></h2>			
				<?php while ( have_posts() ) : the_post(); ?>
			<div class="blog_section" id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
				<?php $defalt_arg =array('class' => "blog_section_img" )?>
				<?php if(has_post_thumbnail()):?>				
				<a href="<?php the_permalink(); ?>"title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('', $defalt_arg); ?></a>
				<?php endif;?>
				<div class="blog_link">
					<span><img  src="<?php echo $image_uri. '/blog_ic.png' ?>"><?php the_time('M j,Y');?></span> 
					<a><img  src="<?php echo $image_uri. '/blog_ic2.png'?>"><?php  comments_popup_link( __( 'Leave a comment', 'busi_prof' ) ); ?></a>
					<span><img  src="<?php echo $image_uri. '/blog_ic3.png'?>"><?php the_category(','); ?></span>
				</div>
				<h2 class="blog_section_title"><a href="<?php the_permalink(); ?>"title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="blog_con_mn"><?php  the_content( __( 'Read More' , 'busi_prof' ) ); ?></div>
            </div>
			<?php endwhile; ?>
			<?php else : ?>
					<div class="">
						<h2><?php _e( "Nothing Found", 'busi_prof' ); ?></h2>
						<p><?php _e( "Sorry, but nothing matched your search criteria. Please try again with some different keywords.", 'busi_prof' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .blog_con_mn -->
			<?php endif; ?>
		</div>
		<?php get_sidebar();?>
	</div>
</div>	
<?php  get_footer() ?>