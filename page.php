<?php Starkers_Utilities::get_template_parts( array( 'header' ) ); ?>


  <div id="content">
    <div class="container">

      <aside class="co3">
          sidebar
      </aside>

      <article class="co9">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
         <?php the_content(); ?>
        <?php endwhile; ?>
      </article>


    </div>
  </div>


<?php Starkers_Utilities::get_template_parts( array( 'footer') ); ?>