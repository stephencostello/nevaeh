<?php Starkers_Utilities::get_template_parts( array( 'parts/header' ) ); ?>


    <div id="content">
        <div class="container">

            <!--<h2>Category Archive: <?php echo single_cat_title( '', false ); ?></h2>-->
            <article class="co9">
              <?php if ( have_posts() ): ?>
              <ol>
              <?php while ( have_posts() ) : the_post(); ?>
                  <li>
                      <article>
                          <h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                          <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time>
                          <?php the_content(); ?>
                      </article>
                  </li>
              <?php endwhile; ?>
              </ol>
              <?php endif; ?>
            </article>


            <aside class="co3">
                Sidebar
            </aside>

        </div>
    </div>


<?php Starkers_Utilities::get_template_parts( array( 'parts/footer' ) ); ?>