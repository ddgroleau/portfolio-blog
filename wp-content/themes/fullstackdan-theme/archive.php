<?php
/**
 * The template for displaying archive pages.
 */
get_header();
?>

<div>
        <?php  
        if ( have_posts() ) : 
                    the_archive_title( '<h1 class="archive-title">', '</h1>' );
                    the_archive_description( '<div class="archive-description">', '</div>' );

                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/post/content', get_post_format() );
                endwhile;

                echo paginate_links( [
                    'prev_text' => esc_html__( 'Prev', 'fullstackdan' ),
                    'next_text' => esc_html__( 'Next', 'fullstackdan' ),
                ] );
        else :
            get_template_part( 'template-parts/page/content', 'none' );
        endif; 
        ?>
</div>

<?php
get_footer();