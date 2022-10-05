<?php get_header(); 
/*
Template Name: News Page

*/

?>

<div class="content">

    <div class="hero">
        <img src="https://images.unsplash.com/photo-1586339949916-3e9457bef6d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">
    </div>

    <div class="news">
        <h2>Nyheter</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque suscipit neque lorem, nec congue ligula ornare vel. Sed bibendum dignissim rutrum. Vestibulum interdum turpis a felis luctus imperdiet eget ut dui. </p>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <a href="<?= the_permalink() ?>"><?= the_title(); ?></a>
        <?php if(has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail("post_url"); ?>" alt="">
        <?php endif; ?>
        <?php the_excerpt() ?>
    <?php endwhile; else: endif; ?>
    </div>
</div>

<?php get_footer(); ?>