<section class="contact">

    <div class="contact-container">


        <div class="contact-content">


            <?php if(get_field('contact_title')): ?>

                <h1>
                    <?php the_field('contact_title'); ?>
                </h1>

            <?php endif; ?>


            <?php if(get_field('contact_description')): ?>

                <p>
                    <?php the_field('contact_description'); ?>
                </p>

            <?php endif; ?>


            <?php if(get_field('contact_email')): ?>

                <p>
                    Email:
                    <?php the_field('contact_email'); ?>
                </p>

            <?php endif; ?>


            <?php if(get_field('contact_phone')): ?>

                <p>
                    Phone:
                    <?php the_field('contact_phone'); ?>
                </p>

            <?php endif; ?>


            <?php if(get_field('contact_address')): ?>

                <p>
                    Address:
                    <?php the_field('contact_address'); ?>
                </p>

            <?php endif; ?>


        </div>


    </div>

</section>