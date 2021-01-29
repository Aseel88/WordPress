<?php get_header(); ?>

<div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">

        <header class="page-header">
            <h1 class="page-title"><?php _e('Not Found', 'twentythirteen'); ?></h1>
        </header>

        <img src="https://media1.giphy.com/media/UoeaPqYrimha6rdTFV/giphy.gif?cid=ecf05e474tdy31hk2wd8rwnbciqxyw3hszi1nt6det7126tp&rid=giphy.gif">
        <div class="page-wrapper">
            <div class="page-content">
                <h2><?php _e('This is somewhat embarrassing, isn’t it?', 'twentythirteen'); ?></h2>
                <p><?php _e('It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen'); ?></p>

                <?php get_search_form(); ?>
            </div><!-- .page-content -->
        </div><!-- .page-wrapper -->

    </div><!-- #content -->
</div><!-- #primary -->







<?php get_sidebar(); ?>
<?php get_footer(); ?>