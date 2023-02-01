<?php
/**
 * The template for displaying 404 pages (not found)
 * @package FullStackDan
 */

get_header();
?>
<div>
    <section>
        <h1><?= esc_html_e( 'Oops! That page can&rsquo;t be found.', 'fullstackdan' ); ?></h1>
        <?= get_search_form(); ?>
    </section><!-- .error-404 -->
</div>
<?php
get_footer();