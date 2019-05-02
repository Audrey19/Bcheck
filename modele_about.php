<?php
/*
Template Name: About us
*/
?>

<?php get_header(); ?>
<section class="container_about_one">
    <div class="about_text">
        <h1><?php the_field('first_title'); ?></h1>
        <p><?php the_field('first_textarea'); ?></p>
    </div>
    <a href="#top" class="about_logo">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow_down_white.png" alt="team">
    </a>
    <div  id="top" class="about_img">
    <?php 
        $image = get_field('team_image');
        if($image): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" alt="team">
    <?php endif; ?>
    </div>

</section>

<section class="container_about_two">
    <div class="container_comma">
    <img src="<?php bloginfo('template_url'); ?>/assets/images/comma_bottom.png" alt="comma">
    <img src="<?php bloginfo('template_url'); ?>/assets/images/comma_top.png" alt="comma">
    </div>

    <div class="container_carousel">
        <div class="arrow_left">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow_carousel_left.png" alt="arrow2">
        </div>
<!-- carousel-->
    <div class="about_quote">
        <div class="cycle-slideshow" 
        data-cycle-swipe=true
        data-cycle-fx="scrollHorz" 
        data-cycle-timeout="8000"
        data-cycle-prev=".arrow_left"
        data-cycle-next=".arrow_right"
        data-cycle-slides="> div"
        >
        <?php while ( have_rows('quotes') ) : the_row(); ?>  
            <div>
                 <p><?php the_sub_field('quote'); ?></p>
            </div>
        <?php endwhile; ?>
        </div>
    </div>
       
   <div class="arrow_right">
       <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow_carousel_right.png" alt="arrow">
   </div>
</div>
</section>

<!-- quote -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://malsup.github.com/jquery.cycle2.js"></script>


<?php get_footer(); ?>
