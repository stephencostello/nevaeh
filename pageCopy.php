<?php Starkers_Utilities::get_template_parts( array( 'header' ) ); ?>


  <div id="content">
    <div class="container">

      <article class="co10 coCenter">
        <!-- <img src="http://lorempizza.com/856/500" class="mb40" /> -->
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
         <?php the_content(); ?>
        <?php endwhile; ?>
      </article>

      <!-- <aside class="co3">
          sidebar
      </aside> -->

      <div class="co10 coCenter textCenter">
        <ul class="subPages">
          <li><a href="#">Home</a></li>
          <li><a href="#" class="current">About</a></li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">Hello</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>

    </div>
  </div>


<?php Starkers_Utilities::get_template_parts( array( 'footer') ); ?>