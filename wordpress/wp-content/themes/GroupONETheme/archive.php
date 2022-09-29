<?php get_header(); ?>

<div class="content">

    <img src="<?php the_post_thumbnail_url("post_image") ?>" alt="">

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <a href="<?= the_permalink() ?>"><?= the_title() ?></a>
        <?php if(has_post_thumbnail()): ?>
            <img src="<?= the_post_thumbnail("post_url") ?>" alt="">
        <?php endif; ?>
        <?php the_excerpt() ?>
    <?php endwhile; else: endif; ?>
</div>

<?php get_footer(); ?>
