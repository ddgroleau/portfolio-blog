<?php
/**
 * Template parts for displaying posts
 */
?>
<article id="post-<?= the_ID();?>">
    <header>
        <?=  the_title( '<h2 class="entry-title"><a class="entry-link" href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ) ?>
    </header>
    <!-- Post Thumbnail -->
    <?php 
    if ( has_post_thumbnail() ) :
        the_post_thumbnail(( 'large' ));
    endif;
    ?>
    <div>
        <?= the_excerpt(); ?>
    </div>
</article>