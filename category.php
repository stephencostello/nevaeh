<?php Starkers_Utilities::get_template_parts( array( 'parts/header' ) ); ?>


  <div id="content">
    <div class="container">

      <div class="co12 mb0">
        <img src="http://lorempixel.com/766/400/" class="floatRight" />
      </div>

      <hr class="clear40" />

      <aside class="co3">
          Sidebar
      </aside>

      <!--<h2>Category Archive: <?php echo single_cat_title( '', false ); ?></h2>-->
      <article class="co9">
        <?php if ( have_posts() ): ?>
        <ul class="messages">
        <?php while ( have_posts() ) : the_post(); ?>
            <li>
                <article>
                    <h2><?php the_title(); ?></h2>
                    <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?></time>
                    <?php the_content(); ?>
                </article>
            </li>
        <?php endwhile; ?>
        </ul>
        <?php endif; ?>
      </article>

    </div>
  </div>


<?php Starkers_Utilities::get_template_parts( array( 'parts/footer' ) ); ?>