<?php get_header(); ?>


<section class="single-service">


    <?php if(have_posts()): ?>


        <?php while(have_posts()): the_post(); ?>


            <div class="single-service-container">


                <h1>
                    <?php the_title(); ?>
                </h1>



                <?php

                $image = get_field('service_icon');

                if($image):

                ?>

                    <img 
                    class="single-service-image"
                    src="<?php echo esc_url($image['url']); ?>"
                    alt="<?php echo esc_attr($image['alt']); ?>">


                <?php endif; ?>



                <div class="service-content">

                    <?php the_field('service_short'); ?>

                </div>


            </div>


        <?php endwhile; ?>


    <?php endif; ?>


</section>


<?php get_footer(); ?>