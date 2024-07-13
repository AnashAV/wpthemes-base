<?php get_header(); ?>
<div id="content">
    <?php if (have_posts()) : ?>
        <header class="search-header">
            <h1 class="search-title"><?php printf(__('Search Results for: %s', 'my-theme'), get_search_query()); ?></h1>
        </header>
        <?php
        while (have_posts()) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                </div>
            </article>
            <?php
        endwhile;
        the_posts_navigation();
    else :
        echo '<p>No content found</p>';
    endif;
    ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
