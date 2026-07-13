<section class="about">

    <div class="about-container">

        <div class="about-content">

            <?php if(get_field('about_title')): ?>
                <h1>
                    <?php the_field('about_title'); ?>
                </h1>
            <?php endif; ?>


            <?php if(get_field('about_description')): ?>
                <p>
                    <?php the_field('about_description'); ?>
                </p>
            <?php endif; ?>


            <?php if(get_field('about_button') && get_field('about_link')): ?>
                <a href="<?php the_field('about_link'); ?>" class="btn-primary">
                    <?php the_field('about_button'); ?>
                </a>
            <?php endif; ?>

        </div>


        <div class="about-image">

            <?php 
            $image = get_field('about_image');

            if($image):
            ?>

                <img 
                    src="<?php echo esc_url($image['url']); ?>" 
                    alt="<?php echo esc_attr($image['alt']); ?>"
                >

            <?php endif; ?>

        </div>


    </div>

</section>