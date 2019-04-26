<?php
/*
Template Name: front-page
*/
?>
<?php get_header(); ?>


<section class="frontpage-container-1">
    <div class="frontpage-container-box">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/boiler.jpg" alt="background">
        <div class="frontpage-container-box-mission">
            <h1>We have one mission</h1>
            <p>Because a cold shower should only be a matter of choice, we don't want to let your boiler drive your life anymore!</p>
           <a class="container_video" href="">LAUNCH VIDEO</a>
            
           
        </div>
    </div>
</section>

<section class="frontpage-container-2">
    <img src="<?php bloginfo('template_url'); ?>/assets/images/graph.svg" alt="background">
    <div class="frontpage-container-box2">
        <h1 class="box2_title">Something right here.</h1>
        <p class="box2_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris elementum libero nulla, vitae consectetur leo pulvinar at. Maecenas et sodales elit.</p>
    </div>
</section>

<section class="frontpage-container-3">
    <div class="box_3_float">  
        <div class="text_works">
            <h2>How bcheck works ?</h2>
            <p>bCheck is a universal end-to-end solution that allows to monitor, detect and even predict gas boiler breakdowns. A simple plug & play solution, ...Shouldn't mention Fitbit, and not "continuously reading" to avoid people to be afraid</p>
        </div> 
    </div>
    <div class="frontpage_container_3_box">
        <div class="box_3_texte">
            <div class="text_check">
                <h2>Check integrates with</h2>
                <ul>
                    <li>Installers</li>
                    <li>Smart Home Kits</li> 
                    <li>Property Manager</li>
                    <li>Insurers</li>
                    <li>Social Housing</li>
                    <li> Utilty Companies</li>
                    <li>And You!</li>
                </ul>
            </div>
        </div>
        <div class="box_3_img">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/casing.png" alt="image">
        </div>
    </div>
</section>

<section class="frontpage-container-4">
    <div class="frontpage-container-box4">
        <div class="frontpage-container-box4-items">
            <img class="img" src="<?php bloginfo('template_url'); ?>/assets/images/breakdown_anticipation.svg" alt="logo">
            <p>Breakdown anticipation</p>
            <h1>48h</h1>
        </div>
        <div class="frontpage-container-box4-items">
            <img class="img sec" src="<?php bloginfo('template_url'); ?>/assets/images/records_data.svg" alt="logo">
            <p>Records of data collected</p>
            <h1>450 M</h1>
        </div>
        <div class="frontpage-container-box4-items">
            <img class="img" src="<?php bloginfo('template_url'); ?>/assets/images/countries_europe.svg" alt="logo">
            <p>Countries in Europe</p>
            <h1>3</h1>
        </div>
    </div>

</section>
    

<?php get_footer(); ?>
