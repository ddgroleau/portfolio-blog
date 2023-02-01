<?php
/**
 * The template for displaying search results.
 */
get_header();
?>

<div id="primary" class="search-content-area">
    <h1>BUTTHOLE search</h1>
    <main>
        <?php
        if ( have_posts() ) :
                // Start the loop.
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
        ?>
        <?php endif; ?>
    </main>
</div>

<?php
get_footer();