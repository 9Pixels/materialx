<?php/** *	The template for displaying posts in the Video post format. * *	@package WordPress *	@subpackage MaterialX */?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	<div class="img">		<?php the_content(); ?>	</div><!--/img-->	<div class="post_content">		<a href="<?php echo esc_url( get_the_permalink() ); ?>" title="<?php the_title(); ?>">			<?php 				esc_html( the_title() );								if(!isset($materialx_feat_image[0])):					echo '<div class="post_icon" style="background-image:url('. esc_url( get_template_directory_uri() ) .'/images/pt_video.png);"></div>';				endif;				?>		</a>		<div class="post_date"><?php the_time( get_option( 'date_format' ) ); ?></div>	</div><!--/post_content--></article>