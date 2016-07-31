<?php
/*
 * Footer
 */
?>
<section>
  <div class="ticket" id="ito-ticket">
    <a href="<?php echo home_url('/ticket2016/'); ?>">前売りチケット発売中</a>
    <p class="center ticket-description">お得な前売りチケット販売中です。<br>糸島芸農開催中は各案内所、主な作品展示場所などでも販売します。</p>
  </div>
</section>

<section>
  <div class="container">
    <h2 class="title">熊本地震　AAFネットワーク活動支援募金にご協力ください</h2>
    <div class="banner">
      <a href="http://www.asahi-artfes.net/news/2016/04/aaf-15.html" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_kumamoto.png" alt="熊本地震　AAFネットワーク活動支援募金" width="475" class="aaf-kumamoto"></a>
      <a href="http://www.asahi-artfes.net/" target="_blank"><img src="http://www.asahi-artfes.net/banner/banner_aaf2010_square.gif" alt="Asahi Art Festival" width="125" class="aaf"></a>
    </div>
  </div>
</section>

<footer>
  <div class="footer">
    <ul class="social">
      <li><a href="https://twitter.com/ItoArtsFarm" class="fa fa-twitter fa-1x" target="_blank"></a></li>
      <li><a href="https://github.com/ito-artsfarm" class="fa fa-github fa-1x" target="_blank"></a></li>
      <li><a href="https://www.youtube.com/channel/UChYMr26nJDUwromf-owl6fw" class="fa fa-youtube-play fa-1x" target="_blank"></a></li>
      <li><a href="https://www.facebook.com/%E7%B3%B8%E5%B3%B6%E8%8A%B8%E8%BE%B2-143252965796552/" class="fa fa-facebook-square fa-1x" target="_blank"></a></li>
    </ul>
    &copy;&nbsp;<a href="http://www.ito-artsfarm.com/">糸島国際芸術祭2016</a>
  </div>
</footer>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-313622-25', 'auto');
  ga('send', 'pageview');
</script>

<?php wp_footer(); ?>

</body>
</html>
