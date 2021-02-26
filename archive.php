<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <div class="row">
        <div class="col">
            <!-- <?php $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy')); ?> -->
            <h1><?php single_term_title() ?> </h1>
            <?php while (have_posts()) : the_post(); ?>

                <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('medium');
                    } ?>
                </a>

                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <?php the_excerpt(); ?>




            <?php endwhile; ?>

        <?php endif; ?>
        </div>
    </div>
    <?php get_footer(); ?>