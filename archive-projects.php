<?php get_header(); ?>


<section class="projects-section">


    <h1>Our Projects</h1>


    <div class="projects-container">


        <?php if(have_posts()): ?>


            <?php while(have_posts()): the_post(); ?>


                <div class="project-card">


                    <?php

                    $image = get_field('project_image');

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
                       
                        View Project

                    </a>


                </div>


            <?php endwhile; ?>


        <?php else: ?>


            <p>No projects found.</p>


        <?php endif; ?>


    </div>


</section>


<?php get_footer(); ?>