<?php /* Template Name: Home */ ?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/header' ) ); ?>


  <div id="content">
    <div class="container">

      <div class="co10 coCenter textCenter">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        <?php endwhile; ?>
      </div>

      <div class="clear40"></div>

      <div class="co12">
        <ul class="serviceList">
          <li><span class="spriteOne"></span><h4>Demo</h4></li>
          <li><span class="spriteTwo"></span><h4>Demo</h4></li>
          <li><span class="spriteThree"></span><h4>Demo</h4></li>
          <li><span class="spriteFour"></span><h4>Demo</h4></li>
          <li><span class="spriteFive"></span><h4>Demo</h4></li>
          <li><span class="spriteSix"></span><h4>Demo</h4></li>
        </ul>
      </div>

      <hr class="clear80" />

      <ul class="gce-list">
        <li>
          <span class="upcomingTitle">Title goes here</span>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
        <li>
          <span class="upcomingTitle">Title goes here</span>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
        <li>
          <span class="upcomingTitle">Title goes here</span>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
        <li>
          <span class="upcomingTitle">Title goes here</span>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
      </ul>

    </div>
  </div>


<?php Starkers_Utilities::get_template_parts( array( 'parts/footer') ); ?>