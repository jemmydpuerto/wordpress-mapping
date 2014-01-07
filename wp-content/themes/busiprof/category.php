<?php get_template_part('banner','header')?>
<div class="container">
 <!-- Main --> 
	<div class="row-fluid">
            <div class="span8 blog_left"><h2><?php  _e( "Category  Archives:", 'busi_prof'); echo single_cat_title( '', false ); ?></h2>                 
			<?php    while(have_posts()): the_post();?>
			<div class="blog_section">
				<div class="blog_con_mn"> 
						<h2><a href="<?php the_permalink(); ?>"title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<?php $defalt_arg =array('class' => "blog_section_img" )?>
							<?php if(has_post_thumbnail()):?>
							<a href="<?php the_permalink(); ?>"title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('', $defalt_arg); ?></a>
							<?php endif;?>
							<br>
						<p><?php the_content( __( 'Read More' , 'busi_prof' ) );?></p>
				</div>
            </div>
			<?php endwhile;?>
			<div class="pagination_blog">	
		<ul>
			<li class="paginanext"><?php previous_posts_link(); ?></li>
			<li class="paginanext"><?php next_posts_link(); ?></li>
		</ul>
	</div>
			</div>

			<?php get_sidebar();?>
		</div>
</div>
<?php  get_footer(); ?>