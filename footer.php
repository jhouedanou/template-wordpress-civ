<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>

<div id="footerwrapper" class="orange darken-2">
  <footer id="footer" class="source-org vcard copyright footer center" style="
    font-size: 16px;
    color: rgba(255,255,255,0.64) !important;">
    <div class="white-text center">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?> | <a href="#" class="pawn white-text"><i class="fa fa-github"></i> </a>  | <a href="#" class="pawn white-text"><i class="fa fa-facebook"></i> </a> | <a href="#" class="pawn white-text"><i class="fa fa-twitter"></i> </a> | <a href="#" class="pawn white-text"><i class="fa fa-instagram"></i> </a></div>
    </footer>
</div>

  <div id="modal1" class="modal bottom-sheet">
       <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
              <input id="icon_prefix" type="text" class="validate">
              <label for="icon_prefix">First Name</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">phone</i>
              <input id="icon_telephone" type="tel" class="validate">
              <label for="icon_telephone">Telephone</label>
            </div>
          </div>
        </form>
      </div>

    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
	<?php wp_footer(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/materialize.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.matchHeight-min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fullPage.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>
<script>
  (function ($) {
 var timer = 0;
    function recheck() {
        var window_top = $(this).scrollTop();
        var window_height = $(this).height();
        var view_port_s = window_top;
        var view_port_e = window_top + window_height;

        if ( timer ) {
          clearTimeout( timer );
        }

        $('.fly').each(function(){
          var block = $(this);
          var block_top = block.offset().top;
          var block_height = block.height();

          if ( block_top < view_port_e ) {
            timer = setTimeout(function(){
              block.addClass('show-block');
            },100);
          } else {
            timer = setTimeout(function(){
              block.removeClass('show-block');
            },100);
          }
        });
    }

    $(function(){
      $(window).scroll(function(){
        recheck();
      });

      $(window).resize(function(){
         recheck();
      });

      recheck();
    });
        $(document).ready(function (){
       // $(".button-collapse").sideNav();
        //$('.parallax').parallax();
        $('.modal-trigger').leanModal();
        $('.slappy').matchHeight();
        $('.tapey').matchHeight();
        $('#gridz > li > div > div.card').matchHeight();
    });
  }(window.jQuery || window.$));
  </script>
<!-- Asynchronous google analytics; this is the official snippet.
         Replace UA-XXXXXX-XX with your site's ID and domainname.com with your domain, then uncomment to enable.

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-XXXXXX-XX', 'domainname.com');
  ga('send', 'pageview');

</script>
-->

</body>

</html>
