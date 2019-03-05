<?php 
    if( get_field('hero_type') == 'image' ): 
        $heroImage = get_field('hero_background_image');
    elseif ( get_field('hero_type') == 'color' ): 
        $heroColor = get_field('hero_background_colour');
    endif;
?>


<div class="hero mb3 <?php the_field( 'hero_height' );?>" style="background-image: url(<?php echo $heroImage['url']; ?>); background-color: <?php echo $heroColor; ?>;">

    <?php 
        if( get_field('hero_type') == 'video'): ?>
    
        <video autoplay muted loop class="fullscreen-video">
        
            <source src="<?php the_field('hero_video');?>" type="video/mp4">
        
        </video>
    
    <? endif;?>

    <div class="container">
    
        <div class="row">
                
            <div class="hero__content">       
                
                <h1 class="heading heading__sm heading__light font800"><?php the_field( 'hero_sub_heading' );?></h1>            
                <h3 class="heading heading__xl heading__light"><?php the_field( 'hero_heading' );?></h3>
                <h2 class="heading heading__sm heading__light"><?php the_field( 'hero_copy' );?></h2>

                <?php 
                    if( have_rows('button') ): 
                    while ( have_rows('button') ) : the_row(); ?>
                    
                <a href="<?php the_sub_field( 'button_target' );?>" type="button" class="button">
                    
                    <?php the_sub_field( 'button_text' );?>
                
                </a>
                
                <?php endwhile; endif;?>
                
            </div>       
                
        </div>
    
    </div>

    <!--Scroll To Next Section <a href="" class="next-section">Learn More</a>-->
    
</div>