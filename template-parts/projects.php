<section class="projects-section">

    <h2>Our Projects</h2>

    <div class="projects-container">

        <?php

        $projects = new WP_Query(array(
            'post_type' => 'projects',
            'posts_per_page' => -1
        ));


        if ($projects->have_posts()) :

            while ($projects->have_posts()) : $projects->the_post();

        ?>

        <div class="project-card">


            <?php
            $image = get_field('project_image');

            if ($image):
            ?>

            <img src="<?php echo esc_url($image['url']); ?>"
                 alt="<?php echo esc_attr($image['alt']); ?>">

            <?php endif; ?>


            <h3><?php the_title(); ?></h3>


            <p><?php the_field('project_short'); ?></p>


            <a href="<?php the_field('project_link'); ?>">
                View Project
            </a>


        </div>


        <?php

            endwhile;
            wp_reset_postdata();

        endif;

        ?>

    </div>

</section>