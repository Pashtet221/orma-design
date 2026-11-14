<?php defined( 'ABSPATH' ) || exit; ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class(); ?>>
		<section class="orma-layout-95 orma-section">
			<div class="orma-layout-96 orma-width">
				<a class="orma-layout-97" href="<?php echo esc_url( orma_url( 'blog' ) ); ?>">← Блог</a>
				<h1 class="orma-layout-98 orma-post-title"><?php the_title(); ?></h1>
				<?php if ( has_excerpt() ) : ?><p class="orma-layout-101"><?php echo esc_html( get_the_excerpt() ); ?></p><?php endif; ?>
				<p class="orma-layout-102"><?php echo esc_html( get_the_author() . ' · ' . get_the_date() ); ?></p>
			</div>
			<div class="orma-layout-103 orma-width orma-post-cover"<?php if ( has_post_thumbnail() ) : ?> style="background-image:url('<?php echo esc_url( get_the_post_thumbnail_url( null, 'full' ) ); ?>')"<?php endif; ?>></div>
		</section>
		<div class="orma-editor-content"><?php the_content(); wp_link_pages(); ?></div>
	</article>
<?php endwhile; ?>
