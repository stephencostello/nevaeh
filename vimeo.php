<?php /* * Template Name: Vimeo */
get_header();
if (have_posts()) : while (have_posts()) : the_post();
?>

<?php the_title();?>


<div id="content">
  <div class="container">

    <div class="co12">

      <?php

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://vimeo.com/api/v2/channel/bamograph/videos.json');
        curl_setopt($ch, CURLOPT_POST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);

        $result = json_decode($result);
        $result = array_slice($result, 0, 3, true);

        // echo '<pre>';
        // print_r($result);
        // echo '</pre>';
        // exit;

      ?>
      <ul class="bxslider">

      <?php foreach ($result as $key2 => $value2):?>
        <li>
          <iframe src="http://player.vimeo.com/video/<?php echo $value2->id ?>" width="1080" height="607" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen width="100%"></iframe>
          <p><?php echo $value2->description ?></p>
        </li>
      <?php endforeach; ?>

      </ul>

    </div>

  </div>
</div>





<?php endwhile; endif;?>
<?php
get_footer();