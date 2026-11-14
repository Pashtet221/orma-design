<?php defined( 'ABSPATH' ) || exit; ?>
<div class="orma-layout orma-content">
	<?php get_template_part( 'template-parts/site-header' ); ?>
	<main class="orma-editor-content">
		<?php if ( is_404() ) : ?>
			<h1>Страница не найдена</h1>
			<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Вернуться на главную</a></p>
		<?php else : ?>
			<?php if ( is_archive() ) { the_archive_title( '<h1>', '</h1>' ); } ?>
			<?php if ( is_search() ) : ?><h1>Результаты поиска</h1><?php endif; ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class(); ?>>
					<?php if ( is_singular() ) : ?>
						<h1><?php the_title(); ?></h1>
						<?php the_content(); wp_link_pages(); ?>
					<?php else : ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>
					<?php endif; ?>
				</article>
			<?php endwhile; ?>
			<?php the_posts_pagination(); ?>
		<?php endif; ?>
	</main>
	<?php get_template_part( 'template-parts/site-footer' ); ?>
</div>
