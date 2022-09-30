<?php get_header() ?>
   <div class="wrapper">
     
   <div class="hero"><?php the_post_thumbnail(); ?></div>

    <div class="content">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_content() ?>
        <?php endwhile; else: endif; ?>

    </div>


   </div>
<?php get_footer() ?>