<?php

/* Template Name: Hero_1 */

get_header();

?>

<div id="tab-1" class="tab-content current">
  <h2 style="font-size: 24px; margin-bottom: 20px;">Young Clint Eastwood.</h2>
  <ul>
    <a href="#ability-description">Abilities / </a>
    <a href="#hero-guide">General tactics / </a>
    <a href="#player-stats">Average player statistics</a>
  </ul>
<!-- WEAPON INFO -->
  <section class = "hero-info-wrapper">
    <div class = "weapon-info-container">
      <div class = "weapon-icon">
        <img src="https://vignette.wikia.nocookie.net/overwatch/images/9/9e/Icon_peacekeeper.png/revision/latest/scale-to-width-down/82?cb=20160728005949" alt="Icon peacekeeper" width="82" height="40">
      </div>
      <h3 style = "padding: 10px 0;">Peacekeeper</h3>
      <ul class = "weapon-info" >
        <li>6 rounds per clip</li>
        <li>1.5-second reload</li>
      </ul>
      <h3 style = "padding: 10px 0;">Primary fire: Single Shot</h3>
      <ul class = "weapon-info" >
        <li>Single shot hitscan type</li>
        <li>70-20 damage</li>
        <li>20-45 m falloff range</li>
        <li>2 shots per second</li>
        <span style="font-size:9pt">✔ Subject to falloff damage</span>
        <span style="font-size:9pt">✔ Can headshot</span>
      <h3 style = "padding: 10px 0;">Secondary fire: Fan the Hammer</h3>
        <li>Burst fire hitscan</li>
        <li>45 - 22 damage per bullet</li>
        <li>1 - 6 bullets per shot</li>
        <li>Max 270 damage</li>
        <li>18 - 30 m falloff range</li>
        <li>1 bullet in 0.11 second to 6 bullets in 0.67 second</li>
        <li>All remaining rounds per burst</li>
        <li>0.3 second buffer</li>
        <span style="font-size:9pt">✔ Subject to falloff damage</span>
        <span style="font-size:9pt">✘ Cannot headshot</span>
      </ul>
    </div>
<!-- SKIN PREVIEW CAROUSEL -->
    <div class="hero-carousel">
      <div>SKIN PREVIEW</div>
      <div>SKIN PREVIEW</div>
      <div>SKIN PREVIEW</div>
      <div>SKIN PREVIEW</div>
      <div>SKIN PREVIEW</div>
    </div>
  </section>
<!-- ABILITY PREVIEW TABS -->

  <section class="ability-preview-container" id="ability-description">
    <h2 style="font-size: 24px; margin-bottom: 20px; margin-top: 20px;">Abilities <span style="font-size: 10px">(click icons for info)</span> </h2>
    <ul class="abilities">
      <li class= "ability relevant" data-ability="ability-1">
        <img src="https://d1u1mce87gyfbn.cloudfront.net/hero/mccree/ability-combat-roll/icon-ability.png" alt="Combat Roll">
          <!-- <h3 style="color:white">Combat Roll</h3> -->
      </li>
      <li class = "ability" data-ability="ability-2">
        <img src="https://d1u1mce87gyfbn.cloudfront.net/hero/mccree/ability-flashbang/icon-ability.png" alt="Flashbang">
          <!-- <h3 style="color:white">Flashbang</h3> -->
      </li>
      <li class = "ability" data-ability="ability-3">
        <img src="https://d1u1mce87gyfbn.cloudfront.net/hero/mccree/ability-deadeye/icon-ability.png" alt="Deadeye">
          <!-- <h3 style="color:white">Deadeye</h3> -->
      </li>
    </ul>
  </section>
  <section class="ability-descriptions-container">
    <div class="ability-descriptions">
      <div id="ability-1" class="ability-content relevant">
          <h3>Combat Roll</h3>

            <p>McCree dives in the direction he’s moving, effortlessly reloading his Peacekeeper in the process.<br>
            <br>
            Movement speed: 15 meters per second<br>
            Maximum range: 6 meters<br>
            Duration: 0.4 seconds<br>
            Cooldown: 8 seconds</p>

            <iframe src="//www.youtube.com/embed/62JjTe-Cpw8?" width="400" height="225" frameborder="0" allowfullscreen="true"></iframe>
      </div>


      <div id="ability-2" class="ability-content">
        <h3>Flashbang</h3>

          <p>McCree heaves a blinding grenade that explodes shortly after it leaves his hand.<br> The blast staggers enemies in a small radius.<br>
          <br>
          Type: Splash projectile  <br>
          Damage: 25  <br>
          Maximum range: 5 meters  <br>
          Area of effect: 2 meters radius  <br>
          Casting time: 0.5 seconds fuse  <br>
          Duration: 0.7 second stun  <br>
          Cooldown: 10 seconds  <br>
          Headshot: No </p>

          <iframe src="//www.youtube.com/embed/ZDj8U7uTahs?" width="400" height="225" frameborder="0" allowfullscreen="true"></iframe>
      </div>
      <div id="ability-3" class="ability-content">
        <h3>Deadeye</h3>

          <p>Focus. Mark. Draw.<br> McCree takes a few precious moments to aim; when he’s ready to fire,<br> he shoots every enemy in his line of sight. The weaker his targets are, the faster he’ll line up a killshot.<br>
          <br>
          Type: Rapid fire hitscan<br>
          Damage: ~250 per 1 second casting<br>
          Movement speed: 1.925 meters per second<br>
          Rate of fire: 6 shots per second<br>
          Ammo usage: 1 per target<br>
          Casting time: 0.2 seconds, 0.167 seconds delay before firing<br>
          Duration: Up to 6 seconds<br>
          Charge required: 1500 points</p>

          <iframe src="//www.youtube.com/embed/KrP8CJVSsd8?" width="400" height="225" frameborder="0" allowfullscreen="true"></iframe>
      </div>
    </div>
  </section>
<!-- END OF ABILITY PREVIEW TABS-->
  <section class = "hero-guides" id="hero-guide">
    <h2 style="font-size: 22px; margin-bottom: 20px; margin-top: 20px;">Guides and general tactics</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.</p>
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
        culpa qui officia deserunt mollit anim id est laborum.</p>
  </section>
  <h2 style="font-size: 22px; margin-bottom: 20px; margin-top: 20px;">Player statistics</h2>
  <section class = "player-statistics" id="player-stats">
    <div class="statistics-window">
      <iframe scrolling="no" src="https://www.overbuff.com/heroes/mccree"></iframe>
    </div>
  </section>
</div>


<?php get_footer(); ?>
