<?php
/*
Template Name: front-page
*/
?>
<?php get_header(); ?>


<section class="frontpage-container-1">
    <div class="frontpage-container-box">
        <div class="frontpage-container-box-mission">
            <h1><?php the_field('front_page_title'); ?></h1>
            <p><?php the_field('front_page_textarea'); ?></p>
           <a class="container_video" href="">LAUNCH VIDEO</a>
        </div>
            <?php 
                $image = get_field('background-image');
                if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" alt="background">
            <?php endif; ?>
        </div>
</section>

<section class="frontpage-container-2">
    <div class="frontpage-container-box2">
        <h1 class="box2_title"><?php the_field('front_page_second_title'); ?>.</h1>
        <p class="box2_p"><?php the_field('front_page_second_textarea'); ?></p>
    </div>
    <?php 
        $image_two = get_field('second_background_image');
        if( !empty($image_two) ): ?>
        <img src="<?php echo $image_two['url']; ?>" alt="<?php echo $image_two['alt']; ?>" alt="background">
    <?php endif; ?>
</section>
<section class="frontpage-container-3bis">

    <div class="box_3_float">  
        <div class="text_works">
            <h2><?php the_field('front_page_third_title'); ?></h2>
           <?php the_field('front_page_third_textarea'); ?>
        </div> 
    </div>
    </section>
    <section class="frontpage-container-3">
    <div class="frontpage_container_3_box">
            
            <div class="box_3_img">
            <?php 
                $image_three = get_field('modules_image');
                if($image_three): ?>
                <img src="<?php echo $image_three['url']; ?>" alt="<?php echo $image_three['alt']; ?>" alt="background">
            <?php endif; ?>    
            </div>
       
            <div class="text_check">
                    <div class="text_check_item">
                        <h2><?php the_field('front_page_check_list_title'); ?></h2>
                        <ul><?php the_field('front_page_check_list'); ?></ul>
                    </div> 
             </div>

    </div>
</section>


<section class="frontpage-container-4">
<div class="frontpage-container-box4">
    <?php while ( have_rows('boucle') ) : the_row(); ?>  
        <div class="frontpage-container-box4-items">
        <?php if( get_sub_field('logo') ): ?>
            <img src="<?php the_sub_field('logo'); ?>" />
        <?php endif; ?>
            <p><?php the_sub_field('title'); ?></p>
            <h1><?php the_sub_field('number'); ?></h1>
        </div>
        <?php endwhile; ?>
    </div>

</section>
    

<?php get_footer(); ?>
