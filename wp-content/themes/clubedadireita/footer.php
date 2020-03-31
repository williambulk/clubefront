<?php
/**
 * Template para exibicao do rodapé da página inicial.
 */
?>

<!--====== FOOTER PART START ======-->
  <footer id="footer" class="footer-area">
      <div class="footer-widget">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                      <div class="footer-link">
                        <a href="/">
                          <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="Logo">
                        </a>
                        <p>Notícias de Direita, Isentas de Fake-News</p>
                      </div> <!-- footer link -->
                  </div>
              </div> <!-- row -->
          </div> <!-- container -->
      </div> <!-- footer widget -->
      
      <div class="footer-copyright">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="copyright text-center">
                          <p class="text f12">Todos os direitos reservados &copy; <?php echo date('Y'); ?></p>
                      </div>
                  </div>
              </div> <!-- row -->
          </div> <!-- container -->
      </div> <!-- footer copyright -->
  </footer>
  <!--====== FOOTER PART ENDS ======-->
  <!--====== BACK TO TOP PART START ======-->
  <!-- IMPORTAÇÃO DOS ARQUIVOS DE JAVASCRIPT -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url') ?>/assets/js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/main.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/popper.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/scrolling-nav.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/vendor/modernizr-3.6.0.min.js"></script>
  <?php wp_footer(); ?>

</body>
</html>