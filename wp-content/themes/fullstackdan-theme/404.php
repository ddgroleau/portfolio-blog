<?php
/**
 * The template for displaying 404 pages (not found)
 * @package FullStackDan
 */

get_header();
?>
<div>
    <main>
        <section>
            <header>
                <h><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'fullstackdan' ); ?></h1>
            </header><!-- .page-header -->

            <div>
                <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'fullstackdan' ); ?></p>

                <?php get_search_form(); ?>
            </div><!-- .page-content -->
        </section><!-- .error-404 -->

    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();