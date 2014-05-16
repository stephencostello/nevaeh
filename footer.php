<div id="upcoming">
  <div class="container">

    <div class="co12 coCenter textCenter">
      <h5>Upcoming Events</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adiper a elit. Praesent dignissim ornare <a href="#">lorem eu mattis</a>.</p>
      <ul class="gce-list">
        <li>
          <h6>Title goes here</h6>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
        <li>
          <h6>Title goes here</h6>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
        <li>
          <h6>Title goes here</h6>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
        <li>
          <h6>Title goes here</h6>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
        <li>
          <h6>Title goes here</h6>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
        <li>
          <h6>Title goes here</h6>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
        <li>
          <h6>Title goes here</h6>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
        <li>
          <h6>Title goes here</h6>
          <span class="upcomingDate">Monday 11 May</span>
          <span class="upcomingTime">18:30 - 20:30</span>
          <span class="upcomingVenue">Mammoth Studio</span>
        </li>
      </ul>
    </div>

  </div>
</div>


<div id="visiting">

    <div class="vAlign">
      Hello World
    </div>

</div>

<footer>
  <div class="container">

    <div class="co9 coCenter textCenter">

      <span class="tweet">
        <?php //$twitterFeed = file_get_contents('http://192.168.0.111/wordpress/wp-content/themes/starkers/twitter.php'); echo $twitterFeed; ?>
      </span>

      <ul class="social">
        <a href="#" title="Twitter" target="_blank"><li class="twitter"></li></a>
        <a href="#" title="Facebook" target="_blank"><li class="facebook"></li></a>
        <a href="#" title="Instagram" target="_blank"><li class="instagram"></li></a>
      </ul>

      <p>Design Company, 40 Great Patrick Street, Belfast, BT2 3OJ, Northern Ireland - <a href="http://stephencostello.com">Google Maps</a></p>

      <span class="credit"> &copy; <?php echo date("Y"); ?> - All rights reserved. Site by <a href="http://stephencostello.com">Stephen Costello</a></span>

    </div>

  </div>
</footer>


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



<script type='text/javascript' src='http://localhost/wordpress/wp-content/themes/starkers/js/jquery.min.js'></script>
<script type='text/javascript' src='http://localhost/wordpress/wp-content/themes/starkers/js/jquery.fitvids.js'></script>
<script type='text/javascript' src='http://localhost/wordpress/wp-content/themes/starkers/js/jquery.bxslider.min.js'></script>

<script type="text/javascript">
  $(document).ready(function(){

$('.bxslider').bxSlider({
  video: true,
  useCSS: false
});

  });
</script>


<?php wp_footer(); ?>

</body>
</html>