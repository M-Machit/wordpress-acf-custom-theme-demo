<section class="services-section">

    <h2>Our Services</h2>

    <div class="services-container">

        <?php
        $services = new WP_Query(array(
            'post_type' => 'services',
            'posts_per_page' => -1
        ));

        if ($services->have_posts()) :

            while ($services->have_posts()) : $services->the_post();

        ?>

        <div class="service-card">


            <?php
            $image = get_field('service_icon');

            if ($image):
            ?>

            <img src="<?php echo esc_url($image['url']); ?>"
                 alt="<?php echo esc_attr($image['alt']); ?>">

            <?php endif; ?>


            <h3>
                <?php the_title(); ?>
            </h3>


            <p>
                <?php the_field('service_short'); ?>
            </p>


            <!-- BUTTON -->
            <a class="btn-primary" 
               href="<?php the_field('service_btn_link'); ?>">
               
               <?php the_field('service_btn_text'); ?>

            </a>


        </div>


        <?php

            endwhile;

            wp_reset_postdata();

        endif;

        ?>

    </div>

</section>