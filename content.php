<?php/** *	The default template for displaying content. Used for both single and index/archive/search. * *	@package WordPress *	@subpackage MaterialX */?><article <?php post_class(); ?>>	<?php 		$materialx_posttitle = get_the_title();		$materialx_feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );		if(isset($materialx_feat_image[0])):			echo '<div class="img">					<div class="post_icon" style="background-image:url('. esc_url( get_template_directory_uri() ) .'/images/pt_standard.png);"></div>					<img src='. esc_url( $materialx_feat_image[0] ) .' alt="'. esc_html( $materialx_posttitle ) .'">				</div>';		endif;		?>	<div class="post_content">		<?php if(get_the_title() != NULL) {?>		<a href="<?php echo esc_url( get_the_permalink() ); ?>" title="<?php the_title(); ?>">			<?php 				esc_html( the_title() );								if(!isset($materialx_feat_image[0])):					echo '<div class="post_icon" style="background-image:url('. esc_url( get_template_directory_uri() ) .'/images/pt_standard.png);"></div>';				endif;				?>		</a>		<?php } ?>		<div class="short_excerpt">			<?php echo metro_creativex_excerpt_max_charlength(160); ?>		</div><!--/excerpt-->		<div class="post_date"><?php the_time( get_option( 'date_format' ) ); ?></div>	</div><!--/post_content--></article>