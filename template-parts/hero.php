<section class="hero-section">

    <div class="hero-content">

        <h1>
            <?php the_field('hero_title'); ?>
        </h1>


        <p>
            <?php the_field('hero_description'); ?>
        </p>


        <div class="hero-buttons">

            <a class="btn-primary"
               href="<?php the_field('hero_button_link'); ?>">

                <?php the_field('hero_button_text'); ?>

            </a>

        </div>

    </div>


    <div class="hero-image">

        <?php
        $image = get_field('hero_image');

        if($image):
        ?>

        <img src="<?php echo esc_url($image['url']); ?>"
             alt="<?php echo esc_attr($image['alt']); ?>">

        <?php endif; ?>

    </div>


</section>