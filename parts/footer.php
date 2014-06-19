  <div id="upcoming">
    <div class="container">

        <ul class="gce-list">
          <li>
            <div class="co3">
              <span class="upcomingTitle">One</span>
              <span class="upcomingDate">Monday 11 May</span>
              <span class="upcomingTime">18:30 - 20:30</span>
              <span class="upcomingVenue">Mammoth Studio</span>
            </div>
          </li>
          <li>
            <div class="co3">
              <span class="upcomingTitle">One</span>
              <span class="upcomingDate">Monday 11 May</span>
              <span class="upcomingTime">18:30 - 20:30</span>
              <span class="upcomingVenue">Mammoth Studio</span>
            </div>
          </li>
          <li>
            <div class="co3">
              <span class="upcomingTitle">One</span>
              <span class="upcomingDate">Monday 11 May</span>
              <span class="upcomingTime">18:30 - 20:30</span>
              <span class="upcomingVenue">Mammoth Studio</span>
            </div>
          </li>
          <li>
            <div class="co3">
              <span class="upcomingTitle">One</span>
              <span class="upcomingDate">Monday 11 May</span>
              <span class="upcomingTime">18:30 - 20:30</span>
              <span class="upcomingVenue">Mammoth Studio</span>
            </div>
          </li>
        </ul>

    </div>
  </div>


  <div id="visiting">
    <div class="container">
      <div class="co12 textCenter">
        <p>Intested in our design work? <a href="#">Talk to us</a></p>
        <!-- <a href="#" class="cta">Talk to Us</a> -->
      </div>
    </div>
  </div>


  <footer>
    <div class="container">

      <div class="co8">
        <span class="tweet">
          <?php $twitterFeed = file_get_contents('http://192.168.0.111/wordpress/wp-content/themes/starkers/twitter.php'); echo $twitterFeed; ?>
        </span>
        <ul class="social">
          <a href="#" title="Twitter" target="_blank"><li class="twitter"></li></a>
          <a href="#" title="Facebook" target="_blank"><li class="facebook"></li></a>
          <a href="#" title="Instagram" target="_blank"><li class="instagram"></li></a>
          <a href="#" title="Google Maps" target="_blank"><li class="maps"></li></a>
        </ul>
      </div>

      <div class="co4">
        <h6>Stay Connected</h6>
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