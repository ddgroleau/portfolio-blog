<?php
/**
 * Template for dispalying all the pages.
 */
get_header();
?>
<div>
    <main>
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
    </main>
    <h1>BUTTHOLE page</h1>

    <?php get_sidebar();  ?>
</div>
<?php
get_footer();