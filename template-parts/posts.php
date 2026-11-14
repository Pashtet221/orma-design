<?php
defined( 'ABSPATH' ) || exit;
$current_page = max( 1, absint( get_query_var( 'paged' ) ), isset( $_GET['orma_page'] ) && is_scalar( $_GET['orma_page'] ) ? absint( $_GET['orma_page'] ) : 1 );
$listing = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 9, 'paged' => $current_page ) );
$categories = get_categories();
?>
<section class="orma-layout-158 orma-section orma-wp-blog">
	<h2 class="orma-layout-159">Статьи</h2>
	<div class="orma-filters orma-dynamic-filters">
		<button type="button" data-filter="all" aria-pressed="true">Все статьи</button>
		<?php foreach ( $categories as $category ) : ?>
			<button type="button" data-filter="cat-<?php echo esc_attr( $category->term_id ); ?>" aria-pressed="false"><?php echo esc_html( $category->name ); ?></button>
		<?php endforeach; ?>
	</div>
	<div class="orma-post-grid">
		<?php while ( $listing->have_posts() ) : $listing->the_post(); ?>
			<?php
			$terms = get_the_category();
			$filters = array_map( static function ( $term ) { return 'cat-' . $term->term_id; }, $terms );
			?>
			<article class="orma-post-card" data-category="<?php echo esc_attr( implode( ' ', $filters ) ); ?>">
				<a href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?>" class="orma-listed-cover"<?php if ( has_post_thumbnail() ) : ?> style="background-image:url('<?php echo esc_url( get_the_post_thumbnail_url( null, 'large' ) ); ?>')"<?php endif; ?>></a>
				<?php if ( $terms ) : ?><p class="orma-post-category"><?php echo esc_html( $terms[0]->name ); ?></p><?php endif; ?>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>">Читать статью ↗</a>
			</article>
		<?php endwhile; ?>
	</div>
	<?php
	echo wp_kses_post( paginate_links( array( 'base' => str_replace( '999999', '%#%', orma_blog_pagination_url() ), 'format' => '', 'current' => $current_page, 'total' => $listing->max_num_pages ) ) );
	wp_reset_postdata();
	?>
</section>
