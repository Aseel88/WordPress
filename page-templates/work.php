<?php /* Template Name: Work */ ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <div class="row">
        <div class="col">
            <?php while (have_posts()) : the_post(); ?>

                <h1> <?php the_title(); ?> </h1>
                <?php the_content(); ?>
            <?php endwhile; ?>
        </div>
    </div>

<?php endif; ?>


<?php
$projects = get_posts(['post_type' => 'project']);

?>

<?php if (count($projects)) : ?>
    <div class="row mt-5">
        <div class="col">
            <h2 class="h5">Projects</h2>
            <ul>
                <?php foreach ($projects as $post) : setup_postdata($post); ?>
                    <li class="mb-2">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php $tools = get_the_terms($post, 'tool'); ?>
                        <?php if ($tools) : ?>
                            <p class="nb-8">
                                Built using:
                                <?php foreach ($tools as $tool) : ?>
                                    <a href="<?php echo get_term_link($tool); ?>"><?php echo $tool->name ?></a>
                                <?php endforeach; ?>
                            </p>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>


<?php get_footer(); ?>