<?php

/* Template Name: Hero_1 */


get_header();

?>

<!-- Start Point -->
<div id="tab-1" class="page-content current">
  <h2 style="font-size: 24px; margin-bottom: 20px;"> <?php the_field('hero_title') ?> </h2>
  <ul>
    <a href="#ability-description">Abilities / </a>
    <a href="#hero-guide">General tactics / </a>
    <a href="#player-stats">Average player statistics</a>
  </ul>
<!-- WEAPON INFO -->

  <section class = "weapon-info-wrapper row">
    <div class="col-4 col-m-12">
      <div class = "weapon-info-container">
        <div class = "weapon-icon">
          <img src="<?php the_field('weapon_icon_one');?>">
        </div>
        <p><?php the_field('weapon_info_primary');?></p>
        <div class = "weapon-icon">
          <img src="<?php the_field('weapon_icon_two');?>">
        </div>
        <p><?php the_field('weapon_info_secondary')?></p>
      </div>
    </div>
    <?php get_template_part('elements/hero-carousel');?>
  </section>
<!-- ABILITY PREVIEW TABS -->
<h2 style="font-size: 24px; margin-bottom: 20px; margin-top: 20px;">Abilities <span style="font-size: 10px">(click icons for info)</span> </h2>
  <section class="ability-preview-container" id="ability-description">

    <div class="row">
      <ul class="abilities col-12 col-m-12">
        <li class= "ability relevant" data-ability="ability-1">
          <img src="<?php the_field('ability_icon_one');?>">
        </li>
        <li class = "ability" data-ability="ability-2">
          <img src="<?php the_field('ability_icon_two');?>">
        </li>
        <li class = "ability" data-ability="ability-3">
          <img src="<?php the_field('ability_icon_three');?>">
        </li>
      </ul>
    </div>
  </section>
  <section class="ability-descriptions-container">
    <div class="ability-descriptions">
      <div id="ability-1" class="ability-content relevant">
          <h3 class = "col-4 col-m-12"><?php the_field('ability_name_one'); ?></h3>
            <p class = "col-4 col-m-12"><?php the_field('ability_one'); ?></p>
            <iframe class = "col-m-12" src="<?php the_field('video_ability_one'); ?>" width="400" height="225" frameborder="0" allowfullscreen="true"></iframe>
      </div>
      <div id="ability-2" class="ability-content">
        <h3 class = "col-4 col-m-12"><?php the_field('ability_name_two'); ?></h3>
          <p class = "col-4 col-m-12"><?php the_field('ability_two'); ?></p>
          <iframe class = "col-m-12" src="<?php the_field('video_ability_two'); ?>" width="400" height="225" frameborder="0" allowfullscreen="true"></iframe>
      </div>
      <div id="ability-3" class="ability-content">
        <h3 class = "col-4 col-m-12"><?php the_field('ability_name_three'); ?></h3>
          <p class = "col-4 col-m-12"><?php the_field('ability_three'); ?></p>
          <iframe class = "col-m-12" src="<?php the_field('video_ability_three'); ?>" width="400" height="225" frameborder="0" allowfullscreen="true"></iframe>
      </div>
    </div>
  </section>
<!-- END OF ABILITY PREVIEW TABS-->
  <section class = "hero-guides row" id="hero-guide">
    <h2 style="margin-top: 30px;">Guides and general tactics</h2>
      <p class = "col-m-12"><?php the_field('guides_tactics');?></p>
      <iframe class ="col-m-12" src="<?php the_field('video_guide'); ?>" width="400" height="225" frameborder="0" allowfullscreen="true"></iframe>
      <p class = "col-m-12"><?php the_field('guides_tactics'); ?></p>
  </section>
  <h2 style="font-size: 22px; margin-bottom: 20px; margin-top: 20px;">Player statistics</h2>
  <section class = "player-statistics" id="player-stats">
    <div class="statistics-window">
        <iframe scrolling="no" src=" <?php the_field('overbuff_iframe_stats')?> "></iframe>
    </div>
  </section>
</div>


<?php get_footer(); ?>
