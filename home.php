<?php /* Template Name: Home */ ?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/header' ) ); ?>


  <div id="banner">
    <ul class="bxslider">
      <li><a href="http://google.com"><img src="http://192.168.0.111/demo/repsonsive-images/tennis1.jpg" /></a></li>
      <li><a href="http://bbc.co.uk"><img src="http://192.168.0.111/demo/repsonsive-images/tennis2.jpg" /></a></li>
      <li><a href="http://fifa.com"><img src="http://192.168.0.111/demo/repsonsive-images/newYork.jpg" /></a></li>
    </ul>
  </div>


  <div id="content">
    <div class="container">

      <div class="co10 coCenter textCenter">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        <?php endwhile; ?>
      </div>

      <div class="clear40"></div>

      <div class="co3 homePod">one</div>
      <div class="co3 homePod">one</div>
      <div class="co3 homePod">one</div>
      <div class="co3 homePod">one</div>
      <div class="co3 homePod">one</div>
      <div class="co3 homePod">one</div>
      <div class="co3 homePod">one</div>
      <div class="co3 homePod">one</div>

      <!-- <div class="co12">
        <ul class="serviceList">
          <li><span class="spriteOne"></span><h4>Demo</h4></li>
          <li><span class="spriteTwo"></span><h4>Demo</h4></li>
          <li><span class="spriteThree"></span><h4>Demo</h4></li>
          <li><span class="spriteFour"></span><h4>Demo</h4></li>
          <li><span class="spriteFive"></span><h4>Demo</h4></li>
          <li><span class="spriteSix"></span><h4>Demo</h4></li>
        </ul>
      </div> -->

    </div>
  </div>


<?php Starkers_Utilities::get_template_parts( array( 'parts/footer') ); ?>