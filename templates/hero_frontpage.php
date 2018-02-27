<?php

/* Template Name: Hero_frontpage */

get_header();

?>
<main>
  <div class="container row">
    <div class ="col-4 col-m-12">
      <a href="wordpressprojektas/mccree"> <img class="hero-1" src="<?php the_field('frontpage_hero_one')?>" alt="Go to Mccree"> </a>
    </div>
    <div class ="col-4 col-m-12">
      <a href="wordpressprojektas/soldier-76"> <img class="hero-2" src="<?php the_field('frontpage_hero_two')?>" alt="Go to Soldier 76" > </a>
    </div>
    <div class ="col-4 col-m-12">
      <a href="wordpressprojektas/reinhardt"> <img class="hero-3" src="<?php the_field('frontpage_hero_three')?>" alt="Go to Reinhardt" style = "z-index: -1;" > </a>
    </div>
<!-- END OF MAIN  -->
</main>


<?php get_footer(); ?>
