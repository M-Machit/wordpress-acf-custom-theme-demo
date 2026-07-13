<?php get_header(); ?>


<section class="single-project">


    <?php if(have_posts()): ?>


        <?php while(have_posts()): the_post(); ?>


            <div class="single-project-container">


                <h1>
                    <?php the_title(); ?>
                </h1>



                <?php

                $image = get_field('project_image');

                if($image):

                ?>

                    <img 
                    class="single-project-image"
                    src="<?php echo esc_url($image['url']); ?>"
                    alt="<?php echo esc_attr($image['alt']); ?>">


                <?php endif; ?>



                <div class="project-content">

                    <?php the_field('project_short'); ?>

                </div>


            </div>


        <?php endwhile; ?>


    <?php endif; ?>


</section>


<?php get_footer(); ?>