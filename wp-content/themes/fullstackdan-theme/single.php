<?php
/**
 * Single page template.
 */
echo get_post_format();
get_header();
?>
<div>
    <?php
        while (have_posts() ) :
            the_post();
            get_template_part( 'template-parts/post/content', get_post_format() );
        endwhile;

        // If comments are open then we can show the comments template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
    ?>
</div>
<?php
get_footer();