<?php get_header() ?>
   <div class="wrapper">
     
   <div class="hero">
        <!-- Ska ha bakgrundsbild -->
    </div>

    <div class="content">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_content() ?>
        <?php endwhile; else: endif; ?>

    </div>


   </div>
<?php get_footer() ?>