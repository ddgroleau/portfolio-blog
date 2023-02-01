<?php
/**
 * The template for displaying search results.
 */
get_header();
?>
<div>
    <?php
        if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/page/content', 'search' );
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