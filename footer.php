<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wordpress-bootstrap-starter-theme
 */

?>
<!-- Footer -->
<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
         <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold my-4">Sign up to our newsletter</h2>
    <!--Section description-->
    <p class="col-md-11">All supplied email addresses will recieve our newsletter and be added to the GCaT Mailing list.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-11 mb-md-0 mb-6">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="mdbInput">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        

    </div>

</section>
<!--Section: Contact v.2-->

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h2 class="h1-responsive font-weight-bold my-4">London</h2>
    <!--Section description-->
    <p class="no-line-break"><strong>GCaT</strong><p>
    <p class="no-line-break"> 79 Langtons Meadow </p>
    <p class="no-line-break">Farnham Common</p>
    <p class="no-line-break">Buckinghamshire</p>
    <p class="">SL2 3NQ</p>
   






        <ul class="list-unstyled">
          <li>
            07879 282820
          </li>
    
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h2 class="h1-responsive font-weight-bold my-4">Midlands</h2>
    <!--Section description-->
    <p class="no-line-break"><strong>GCaT</strong><p>
    <p class="no-line-break">39 Eastwood Road</p>
    <p class="no-line-break">Boston</p>
    <p class="no-line-break">Lincolnshire</p>
    <p class="">PE21 0PH</p>



        <ul class="list-unstyled">
          <li>
          01205 369477
          </li>
          <li>
          07788 550074
          </li>
          <li>
          info@gatehousetraining.com
          </li>
          
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">A 
    <a href="https://mdbootstrap.com/"> Cloudsdale</a> Website
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer 
	<footer id="colophon" class="site-footer container">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wordpress-bootstrap-starter-theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'wordpress-bootstrap-starter-theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'wordpress-bootstrap-starter-theme' ), 'wordpress-bootstrap-starter-theme', '<a href="http://underscores.me/">Me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
