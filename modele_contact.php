<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<section class="container_contact">
    <div class="container_contact_box_left">
        <div class="container_contact_box_content">
            <h1><?php the_field('first_title'); ?></h1>
            <p><?php the_field('first_textarea'); ?></p>
        </div>
    </div>
    <div class="container_contact_box_right">
        <div class="container_contact_box_img">
        <?php 
                $image = get_field('image');
                if($image): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" alt="background">
            <?php endif; ?>

        </div>
        <div class="container_contact_box_from">
            <div class="buttons">
                <button id="but2" onclick="show1();">I'm a company</button>
                <button id="but1" onclick="show2();">I'm a client</button>
            </div>
            <div id="div1" class="hide">
                <?php echo do_shortcode( '[contact-form-7 id="24" title="Formulaire client "]' ); ?>
            </div>    
            <div id="div2" class="visible">        
                <?php echo do_shortcode( '[contact-form-7 id="25" title="Formulaire company"]' ); ?>
            </div>
        </div>
    </div>
</section>

<script> 
    function show1(){
    document.getElementById('div1').style.display ='none';
    document.getElementById('div2').style.display ='block';
    document.getElementById('but1').style.opacity = 0.3;
    document.getElementById('but2').style.opacity = 1;
    }
    function show2(){
    document.getElementById('div1').style.display = 'block';
    document.getElementById('div2').style.display ='none';
    document.getElementById('but1').style.opacity = 1;
    document.getElementById('but2').style.opacity = 0.3;
    }
</script>

<?php get_footer(); ?>
