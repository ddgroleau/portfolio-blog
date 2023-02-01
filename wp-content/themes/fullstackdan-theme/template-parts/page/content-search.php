<?php
/**
 * Template part for display search results.
 */
?>
<article id="post-<?php the_ID(); ?>">
	<?php 
        the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
        the_excerpt();
        printf( '<a href="%s">Read More</a>', esc_url( get_the_permalink() ) );
    ?>
</article>