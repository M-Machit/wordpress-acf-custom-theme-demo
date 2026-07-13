<?php get_header(); ?>

<main>

<?php

$sections = get_field('home_sections');

if($sections):

    foreach($sections as $section):

        get_template_part('template-parts/' . $section);

    endforeach;

endif;

?>

</main>

<?php get_footer(); ?>