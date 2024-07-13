<?php get_header(); ?>
<div id="content">
    <header class="page-header">
        <h1 class="page-title"><?php _e('Oops! That page can’t be found.', 'my-theme'); ?></h1>
    </header>
    <div class="page-content">
        <p><?php _e('It looks like nothing was found at this location. Maybe try a search?', 'my-theme'); ?></p>
        <?php get_search_form(); ?>
    </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
