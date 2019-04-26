<?php
/*
Template Name: FAQ
*/
?>

<?php get_header(); ?>

<section class="container_faq">
    <div class="container_faq_box1">
        <div class="container_faq_box1_title">
            <h1>FAQ</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. You wil find your answer.</p>
        </div>
    </div>

   <!-- DROPDOWN -->
   <div class="container_faq_box2">
             <!-- FIRST -->
    <div class="container_faq_box2_items faq" onclick="openFaq(event, 'first')">
        <h1 class="faq-question">Nine Features Of An Advertising Flop? </h1>
        <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow_down.png" alt="arrow" class="fa-plus plus"> 
        <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow_up.png" alt="arrow" class="fa-minus minus">  
    </div>

    <div class="faq-answer" id="first">
        <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor.</p>
    </div>

            <!-- SECOND -->
    <div class="container_faq_box2_items faq" onclick="openFaq(event, 'second')" >
        <h1 class="faq-question"> Life Advice Looking Through A Window</h1>
        <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow_down.png" alt="arrow" class="fa-plus plus"> 
        <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow_up.png" alt="arrow" class="fa-minus minus">   
    </div>

    <div class="faq-answer" id="second">
     <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor.</p>
    </div>
            <!-- THIRD -->
    <div onclick="openFaq(event, 'third')" class="container_faq_box2_items faq">
        <h1 class="faq-question"> The Basics Of Buying A Telescope?</h1>
        <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow_down.png" alt="arrow" class="fa-plus plus"> 
        <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow_up.png" alt="arrow" class="fa-minus minus">   
    </div>

    <div class="faq-answer" id="third">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

            <!-- FOURTH -->
    <div onclick="openFaq(event, 'fourth')" class="container_faq_box2_items faq">
        <h1 class="faq-question"> Video Games Playing With Imagination</h1>
        <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow_down.png" alt="arrow" class="fa-plus plus"> 
        <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow_up.png" alt="arrow" class="fa-minus minus">  
    </div>

    <div class="faq-answer" id="fourth">
        <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor.</p>
    </div>

            <!-- FIFTH -->
    <div onclick="openFaq(event, 'fifth')" class="container_faq_box2_items faq">
        <h1 class="faq-question"> Party Jokes Startling But Unnecessary</h1>
        <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow_down.png" alt="arrow" class="fa-plus plus"> 
        <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow_up.png" alt="arrow" class="fa-minus minus">  
    </div>

    <div class="faq-answer" id="fifth">
        <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor.</p>
    </div>

</div>


</section>


<script>
//Enclosing FUNCTION
function openFaq(evt, faqSection){

  var clickedID = document.getElementById(faqSection);
  var arrowID = document.getElementById(faqSection);

clickedID.classList.toggle("display-content");
evt.currentTarget.classList.toggle("active-fq");

arrowID.classList.toggle("a");
evt.currentTarget.classList.toggle("active-arrow");
 
}

</script>

<?php get_footer(); ?>
