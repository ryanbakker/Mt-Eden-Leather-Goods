<?php
get_header();
?>

<div class="page-not-found">
    <?php get_template_part('./templates/content', 'page'); ?>
    <h2 class="index">404 Page not found</h2>
    <div class="page-not-found-content">
        <p>Sorry, page not found. Try searching or return to the home page.</p>
        <p><?php echo do_shortcode('[ivory-search id="285" title="Default Search Form"]'); ?>
        </p>
        <h4><a href="/"><i class="fa-solid fa-circle-arrow-left"></i> Return to home</a></h4>
    </div>
</div>

<?php
get_footer();
?>