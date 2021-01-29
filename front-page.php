<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <div class="row">
        <div class="col">
            <?php while (have_posts()) : the_post(); ?>

                <!-- <h1> <?php the_title(); ?> </h1> -->
                <?php the_content(); ?>

            <?php endwhile; ?>

        <?php endif; ?>
        </div>
    </div>

    <?php
    $args = [
        'numberposts' => 3,
        'order' => 'desc',
    ];

    $latestPosts = get_posts($args);
    ?>
    <div class="row nt-5 gx-5">
        <?php foreach ($latestPosts as $post) : setup_postdata($post); ?>
            <div class="col">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium'); ?>
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                </a>
            </div>
        <?php endforeach; ?>

    </div>


    <div class="row nt-5 gx-5 ">
        <div class="col text-end">
            <?php $blogPageUrl = get_permalink(get_option('page_for_posts')); ?>
            <a class="btn btn-dark" href="<?php echo $blogPageUrl; ?>"> All blog posts</a>
        </div>
    </div>




    <?php get_footer(); ?>