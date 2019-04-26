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
    <div class="about_img">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/photo_team.jpg" alt="">
    </div>

</section>

<section class="container_about_two">
    <div>
        <img src="" alt="coma">
    </div>

<!-- carousel-->
    <div class="about_quote">
        <div class="cycle-slideshow" 
        data-cycle-swipe=true
        data-cycle-fx="scrollHorz" 
        data-cycle-timeout="8000"
        data-cycle-prev=".prev"
        data-cycle-next=".next"
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
        <div class="center-p">
                <a href="#" class="prev"><<</a>
        </div>
        <div class="center-n">
            <a href="#" class="next">>></a>
        </div>
    </div>
       
   

</section>

<!-- quote -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://malsup.github.com/jquery.cycle2.js"></script>

<?php get_footer(); ?>
