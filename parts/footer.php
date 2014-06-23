  <div id="upcoming">
    <div class="container">

      <ul class="gce-list">
        <li>
          <h6>Keynote Speech</h6>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
        <li>
          <h6>New Office Party</h6>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
        <li>
          <h6>Showcase Event</h6>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
        <li>
          <h6>Random Night Out</h6>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
      </ul>
      <!-- <h5><span class="lines">View more Upcoming Events</span></h5> -->
      <a href="#">View all events &rarr;</a>

    </div>
  </div>




  <!-- <div id="visiting">
    <div class="container">
      <div class="co12 textCenter">
        <p>Intested in our design work? <a href="#">Talk to us</a></p>
      </div>
    </div>
  </div> -->




  <footer>
    <div class="container">

      <div class="co8 mobile40">
        <span class="tweet">
          <?php //$twitterFeed = file_get_contents('http://192.168.0.111/wordpress/wp-content/themes/starkers/twitter.php'); echo $twitterFeed; ?>
        </span>
        <ul class="social">
          <a href="#" title="Twitter" target="_blank"><li class="twitter"></li></a>
          <a href="#" title="Facebook" target="_blank"><li class="facebook"></li></a>
          <a href="#" title="Instagram" target="_blank"><li class="instagram"></li></a>
          <a href="#" title="Google Maps" target="_blank"><li class="maps"></li></a>
        </ul>
      </div>

      <div class="co4">
        <p><strong>Stay Connected</strong></p>
        <p>Receive updates from our company, join our mailing list.</p>
        <form>
          <input type="email" value="Email Address" />
          <input type="submit" value="Signup">
        </form>
      </div>

      <hr class="clear80" />

      <div class="co12 credit">
        <span class="floatLeft">Design Company, 40 Great Patrick Street, Belfast, BT2 3OJ, Northern Ireland</span>
        <span class="floatRight">&copy; <?php echo date("Y"); ?> - All rights reserved. Site by <a href="http://stephencostello.com">Stephen Costello</a></span>
      </div>

    </div>
  </footer>



  <script type='text/javascript' src='http://localhost/wordpress/wp-content/themes/starkers/js/jquery.min.js'></script>
  <script type='text/javascript' src='http://localhost/wordpress/wp-content/themes/starkers/js/jquery.fitvids.js'></script>
  <script type='text/javascript' src='http://localhost/wordpress/wp-content/themes/starkers/js/jquery.bxslider.min.js'></script>

  <script>
    // if (document.documentElement.clientWidth < 640) {
    //   $('#eventList').bxSlider({
    //     minSlides: 1,
    //     maxSlides: 4,
    //     slideWidth: 368,
    //     slideMargin: 0,
    //     controls: false,
    //   });
    // }
  </script>

  <script>
    // if (document.documentElement.clientWidth > 640) {
    //   $('#eventList').bxSlider({
    //     minSlides: 1,
    //     maxSlides: 4,
    //     slideWidth: 260,
    //     slideMargin: 1,
    //     controls: false,
    //   });
    // }
  </script>


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