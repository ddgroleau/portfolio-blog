<?php
/**
 * The main template file.
 */
get_header();
?>
<div >
    <main>
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/post/content', get_post_format() );
            endwhile;

            echo paginate_links( [
                'prev_text' => esc_html__( 'Prev', 'FullStackDan' ),
                'next_text' => esc_html__( 'Next', 'FullStackDan' ),
            ] );
        else :
            get_template_part( 'template-parts/page/content', 'none' );
        endif;
        ?>
    </main>
</div>
<?php
get_footer();