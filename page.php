<?php Starkers_Utilities::get_template_parts( array( 'parts/header' ) ); ?>


  <div id="content">
    <div class="container">

      <div class="co12">
        <img src="http://lorempixel.com/766/400/" class="floatRight" />
      </div>

      <hr class="clear40" />

      <?php Starkers_Utilities::get_template_parts( array( 'parts/sidebar') ); ?>

      <article class="co9">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        <?php endwhile; ?>
      </article>

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