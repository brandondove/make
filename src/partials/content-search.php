<?php
/**
 * @package ttf-one
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php get_template_part( 'partials/entry', 'title' ); ?>
		<?php get_template_part( 'partials/entry', 'date' ); ?>
	</header>

	<div class="entry-content">
		<?php echo wpautop( get_the_excerpt() . ttf_one_get_read_more() ); ?>
	</div>

	<footer class="entry-footer">
		<?php get_template_part( 'partials/entry', 'taxonomy' ); ?>
	</footer>
</article>
