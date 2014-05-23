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

      <div class="co12">
        <ul id="eventList" class="gce-list">
          <li>
            <span class="upcomingTitle">One</span>
            <span class="upcomingDate">Monday 11 May</span>
            <span class="upcomingTime">18:30 - 20:30</span>
            <span class="upcomingVenue">Mammoth Studio</span>
          </li>
          <li>
            <span class="upcomingTitle">Two</span>
            <span class="upcomingDate">Monday 11 May</span>
            <span class="upcomingTime">18:30 - 20:30</span>
            <span class="upcomingVenue">Mammoth Studio</span>
          </li>
          <li>
            <span class="upcomingTitle">Three</span>
            <span class="upcomingDate">Monday 11 May</span>
            <span class="upcomingTime">18:30 - 20:30</span>
            <span class="upcomingVenue">Mammoth Studio</span>
          </li>
          <li>
            <span class="upcomingTitle">Four</span>
            <span class="upcomingDate">Monday 11 May</span>
            <span class="upcomingTime">18:30 - 20:30</span>
            <span class="upcomingVenue">Mammoth Studio</span>
          </li>
          <li>
            <span class="upcomingTitle">Five</span>
            <span class="upcomingDate">Monday 11 May</span>
            <span class="upcomingTime">18:30 - 20:30</span>
            <span class="upcomingVenue">Mammoth Studio</span>
          </li>
          <li>
            <span class="upcomingTitle">Six</span>
            <span class="upcomingDate">Monday 11 May</span>
            <span class="upcomingTime">18:30 - 20:30</span>
            <span class="upcomingVenue">Mammoth Studio</span>
          </li>
          <li>
            <span class="upcomingTitle">Seven</span>
            <span class="upcomingDate">Monday 11 May</span>
            <span class="upcomingTime">18:30 - 20:30</span>
            <span class="upcomingVenue">Mammoth Studio</span>
          </li>
          <li>
            <span class="upcomingTitle">Eight</span>
            <span class="upcomingDate">Monday 11 May</span>
            <span class="upcomingTime">18:30 - 20:30</span>
            <span class="upcomingVenue">Mammoth Studio</span>
          </li>
        </ul>
      </div>


  <!-- <div id="slider1">
    <a class="buttons prev" href="#">&#60;</a>
    <div class="viewport">
      <ul class="gce-list">
        <li>
          <span class="upcomingTitle">One</span>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
        <li>
          <span class="upcomingTitle">Two</span>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
        <li>
          <span class="upcomingTitle">Three</span>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
        <li>
          <span class="upcomingTitle">Four</span>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
        <li>
          <span class="upcomingTitle">Five</span>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
        <li>
          <span class="upcomingTitle">Six</span>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
        <li>
          <span class="upcomingTitle">Seven</span>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
        <li>
          <span class="upcomingTitle">Eight</span>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
      </ul>
    </div>
    <a class="buttons next" href="#">&#62;</a>
  </div> -->


    </div>
  </div>


<?php Starkers_Utilities::get_template_parts( array( 'parts/footer') ); ?>