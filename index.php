<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <div class="row">
        <div class="col">
            <?php while (have_posts()) : the_post(); ?>

                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <?php the_excerpt(); ?>




            <?php endwhile; ?>

        <?php endif; ?>
        </div>
    </div>
    <?php get_footer(); ?>