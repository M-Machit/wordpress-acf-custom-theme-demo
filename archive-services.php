<?php get_header(); ?>


<section class="services-section">


    <h1>Our Services</h1>


    <div class="services-container">


        <?php if(have_posts()): ?>


            <?php while(have_posts()): the_post(); ?>


                <div class="service-card">


                    <?php

                    $image = get_field('service_icon');

                    if($image):

                    ?>

                        <img 
                        class="card-image"
                        src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>">

                    <?php endif; ?>


                    <h3>
                        <?php the_title(); ?>
                    </h3>


                    <p>
                        <?php the_excerpt(); ?>
                    </p>


                    <a class="btn-primary" 
                       href="<?php the_permalink(); ?>">
                       
                        View Service

                    </a>


                </div>


            <?php endwhile; ?>


        <?php else: ?>


            <p>No services found.</p>


        <?php endif; ?>


    </div>


</section>


<?php get_footer(); ?>