<?php
get_header();
?>

<div class="search-page">
    <h2>Search Results</h2>
    <h3>Your search returned <span><?php echo $wp_query->found_posts ?> results</span> for
        "<?php the_search_query(); ?>"
    </h3>
    <?php if (have_posts()) : ?>
    <section class="search-results">
        <?php while (have_posts()) : the_post(); ?>
        <div class="search-item">
            <div class="search-item-img">
                <?php the_post_thumbnail('thumb') ?>
            </div>
            <div>
                <h5>
                    <?php the_title();  ?>
                </h5>
                <?php the_excerpt(); ?>
                <div class="">
                    <a href="<?php echo the_permalink() ?>" target="_self" rel="noopener">
                        <span>READ MORE</span>
                    </a>
                </div>
            </div>
            <!-- End of search item -->
        </div>
        <?php endwhile; ?>
    </section>
    <?php else : ?>
    <p><?php echo do_shortcode('[ivory-search id="285" title="Default Search Form"]'); ?>
    </p>
    <?php endif; ?>
</div>

<?php
get_footer();
?>