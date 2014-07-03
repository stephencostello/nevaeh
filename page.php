<?php Starkers_Utilities::get_template_parts( array( 'parts/header' ) ); ?>


  <section id="content">
    <div class="container">

      <div class="co12 mb40">
        <img src="http://localhost/wordpress/wp-content/themes/starkers/images/banner.jpeg" class="floatRight" />
      </div>

      <?php Starkers_Utilities::get_template_parts( array( 'parts/sidebar') ); ?>

      <article class="co9">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        <?php endwhile; ?>
      </article>

    </div>
  </section>


<?php Starkers_Utilities::get_template_parts( array( 'parts/footer') ); ?>