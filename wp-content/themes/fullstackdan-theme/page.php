<?php
/**
 * Template for displaying all the pages.
 */
get_header();
?>
<div>
        <?php
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/page/content', 'page' );

            // If comments are open then we can show the comments template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        endwhile;
        ?>
</div>
<?php
get_footer();