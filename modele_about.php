<?php
/*
Template Name: About us
*/
?>

<?php get_header(); ?>
<section class="container_about_one">
    <div class="about_text">
        <h1>Who is bcheck</h1>
        <p>We have one mission: you’ll take a cold shower only because you decided to,<span>not because your boiler failed.</span></p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris elementum libero nulla, vitae consectetur leo pulvinar at. Maecenas et sodales elit.</p>
    </div>
    <a href="#top" class="about_logo">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow_down_white.png" alt="team">
    </a>
    <div  id="top" class="about_img">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/photo_team.jpg" alt="team">
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
            <div>
                 <p>" This is indeed the pain points we would like to address as well "</p>
            </div>
            <div>
             <p>" Lorem Ipsum hfjhezf ggez gbjhgzhfd hvzv hhzahzah bs agh"</p>
            </div>
            <div>
                <p>" WordPress developers and administrators. Join them; it only takes a minute: "</p>
            </div>
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
