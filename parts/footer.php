  <div id="upcoming">
    <div class="container">

      <!-- <h3>Upcoming Events</h3> -->

      <ul class="gce-list">
        <li>
          <h5>Keynote Speech</h5>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
        <li>
          <h5>New Office Party</h5>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
        <li>
          <h5>Showcase Event</h5>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
        <li>
          <h5>Random Night Out</h5>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
      </ul>

      <!-- <div class="clear40"></div>
      <a href="/events" class="cta">More Events</a> -->

    </div>
  </div>




  <div id="visiting">
    <div class="container">
      <div class="co12 textCenter">
        <p>Interested In Our Company</p>
        <a href="/events" class="cta">Let Us Know</a>
      </div>
    </div>
  </div>




  <footer>
    <div class="container">

      <div class="co5 mobile40">
        <img src="http://localhost/wordpress/wp-content/themes/starkers/images/banner.jpeg" width="200px" height="30px" class="mb20" />
        <p>Hi there! I’m a bike messenger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like piña coladas. (And gettin’ caught in the rain.) or something like this:</p>
      </div>

      <div class="co4 mobile40">
        <h6>Stay Connected</h6>
        <ul class="tweet">
          <?php Starkers_Utilities::get_template_parts( array( 'parts/twitter') ); ?>
        </ul>
        <ul class="social">
          <a href="#" title="Twitter" target="_blank"><li class="twitter"></li></a>
          <a href="#" title="Facebook" target="_blank"><li class="facebook"></li></a>
          <a href="#" title="Instagram" target="_blank"><li class="instagram"></li></a>
          <a href="#" title="Google Maps" target="_blank"><li class="maps"></li></a>
        </ul>
      </div>

      <div class="co3">
        <h6>Contact Us</h6>
        <p>Design Company<br />40 Great Patrick Street, Belfast<br />Co Down, BT2 3OJ<br />Northern Ireland</p>
        <p><a href="#">hello@gracegeneration.co.uk</a></p>
      </div>

      <hr class="clear40" />

      <div class="co12 credit textCenter">
        <span>&copy; <?php echo date("Y"); ?> - All rights reserved. Site by <a href="http://stephencostello.com">Stephen Costello</a></span>
      </div>

    </div>
  </footer>




  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type='text/javascript' src='http://localhost/wordpress/wp-content/themes/starkers/js/jquery.bxslider.min.js'></script>

  <script>
    $(function() {
      var pull = $('#pull');
          menu = $('nav ul');
          menuHeight = menu.height();
      $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
      });
      $(window).resize(function(){
        var w = $(window).width();
        if(w > 320 && menu.is(':hidden')) {
          menu.removeAttr('style');
        }
      });
    });
  </script>

  <script>
    $('.bxslider').bxSlider({
      auto: true,
      //controls: true,
      random: false,
      pager: false,
      default: 5000,
      mode:'fade'
    });
  </script>



  <!--<script type='text/javascript' src='http://localhost/wordpress/wp-content/themes/starkers/js/jquery.min.js'></script>
  <script type='text/javascript' src='http://localhost/wordpress/wp-content/themes/starkers/js/jquery.fitvids.js'></script>-->

  <!--<script>
    if (document.documentElement.clientWidth < 640) {
      $('#eventList').bxSlider({
        minSlides: 1,
        maxSlides: 4,
        slideWidth: 368,
        slideMargin: 0,
        controls: false,
      });
    }
  </script>-->

  <!--<script>
    if (document.documentElement.clientWidth > 640) {
      $('#eventList').bxSlider({
        minSlides: 1,
        maxSlides: 4,
        slideWidth: 260,
        slideMargin: 1,
        controls: false,
      });
    }
  </script>-->


  <!--<script>
    $('#eventList').bxSlider({
      minSlides: 1,
      maxSlides: 4,
      slideWidth: 368,
      slideMargin: 0,
      controls: false,
    });
  </script>-->



  <!--<script type='text/javascript' src='http://localhost/wordpress/wp-content/themes/starkers/js/jquery.tinycarousel.min.js'></script>
  <script type="text/javascript">
    $(document).ready(function()
    {
      $('#slider1').tinycarousel();
    });
  </script>-->




  <!-- VIDEO SLIDER
  <script type="text/javascript">
    $(document).ready(function(){

    $('.bxslider').bxSlider({
      video: true,
      useCSS: false
    });

    });
  </script>-->

  <?php wp_footer(); ?>

</body>
</html>