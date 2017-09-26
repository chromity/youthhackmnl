<?php
  /*-----------------------------------------------------------------------------------*/
  /* This template will be called by all other template files to finish 
  /* rendering the page and display the footer area/content
  /*-----------------------------------------------------------------------------------*/
?>

 </main><!-- / end page container, begun in the header -->

  <footer class="f5 bg-light-gray mid-gray ph4 ph5-ns pv4 pv5-ns">
    <div class="row">
      <div class="col-xs-12 col-sm-8">
        <div class="box">
          <img src="<?php echo get_template_directory_uri() . '/img/yh-logo.svg' ?>" alt="YouthHack Logo" class="h3">
          <h3 class="f3 mv3">YouthHack Manila</h3>
          <p class="lh-copy measure-wide mb1 ttu">Contact us</p>
          <ul class="fa-ul mv0">
            <li class="pv1"><i class="pv1 fa fa-envelope fa-li"></i><a class="link dim navy" href="mailto:mnbatara3@gmail.com">example@youthhack.net</a></li>
            <li class="pv1"><i class="pv1 fa fa-phone fa-li"></i>(123) 456-7890</li>
            <li class="pv1"><i class="pv1 fa fa-map-marker fa-li"></i>1234 Example St. <br> Sample City, PH 1101</li>
          </ul>
          <div class="f6 mt5">
            <p class="ma0">&copy; 2017 YouthHack Manila. All rights reserved.</p>
            <p class="ma0">Powered by <a href="https://wordpress.org" class="link dim navy">WordPress</a>.</p>
            <p class="ma0">Made with <3 by Maded Batara III and Michael Daryl Mayo.</p>
          </div>
        </div>
      </div>
  </footer>

<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>

</body>
</html>
