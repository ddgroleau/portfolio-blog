<?php
/**
 * Template part for displaying a message that posts cannot be found
 */
?>

<section >
	<h1><?php esc_html_e( 'Nothing Found', 'fullstackdan' ); ?></h1>
	<div>
		<?php if ( is_search() ) : ?>
			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'fullstackdan' ); ?></p>
			<?= get_search_form(); ?>
            <?php else : ?>

			<p><?= esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'fullstackdan' ); ?></p>
			<?= get_search_form(); ?>
		<?php endif;?>
	</div>
</section>