<?php get_header(); ?>


<?php if (have_posts()) : ?>
    <div class="row">
        <div class="col">
            <?php while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('medium');
                    } ?>
                </a>
                <h1> <?php the_title(); ?> </h1>

                <span class="h5"><?php the_date(); ?></span>
                <?php if (get_field('project_client')) : ?>
                    <?php if (get_field('project_client_website')) : ?>

                        <p> This project was built for:<a href="<?php the_field('project_client_website'); ?>"><?php the_field('project_client'); ?></a></p>
                    <?php else : ?>
                        <p> This project was built for: <?php the_field('project_client'); ?> </p>
                    <?php endif; ?>
                <?php endif; ?>
                <?php the_content(); ?> <?php endwhile; ?>
        </div>
    </div>

<?php endif; ?>


<div class="row nt-5 gx-5 ">
    <div class="col text-end">
        <?php next_post_link('%link', '<i class="fas fa-arrow-right"></i> %title'); ?>
    </div>
</div>

<div class="row nt-5 gx-5 ">
    <div class="col text-end">
        <?php previous_post_link('%link', '%title <i class="fas fa-arrow-left"></i>'); ?>
    </div>
</div>

<?php get_footer(); ?>