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
    <?php get_footer(); ?>