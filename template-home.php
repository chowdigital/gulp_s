<?php /* Template Name: Home*/ get_header(); ?>
<div class="container-fluid">
<div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://localhost:8888/gulp_s/wp-content/uploads/2020/07/AdobeStock_314383449_Preview.jpeg">
      <div class="carousel-caption">
        <h1 class="h1-responsive">Welcome  <br/>to GCat</h1>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=http://localhost:8888/gulp_s/wp-content/uploads/2020/07/12250739-1.jpg">
      <div class="carousel-caption">
        <h1 class="h1-responsive">Welcome  <br/>to GCat</h1>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://localhost:8888/gulp_s/wp-content/uploads/2020/07/279281535-2.jpg">
      <div class="carousel-caption">
        <h1 class="h1-responsive">Welcome  <br/>to GCat</h1>
      </div>
    </div>
	<div class="carousel-item">
      <img class="d-block w-100" src="http://localhost:8888/gulp_s/wp-content/uploads/2020/07/332511826_.jpg">
      <div class="carousel-caption">
        <h1 class="h1-responsive">Welcome <br/>to GCat</h1>
      </div>
    </div>
  </div>
</div>
</div>
<main id="primary" class="site-main container">

<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			

		endwhile; // End of the loop.
		?>


<!--Grid row-->
<div class="row wow fadeIn">
<?php
// The Query
$the_query = new WP_Query( 'cat=3&posts_per_page=4' );
//posts_per_page=5'


// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				$category = get_the_category(); 
				?>		


    <!--Grid column-->
    <div class="col-lg-3 col-md-6 col-sm-12 mb-4 d-flex flex-column">
        <!--Featured image-->
        <div class="view overlay hm-white-slight rounded z-depth-2 mb-4 ">
            <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid')); ?>
            <a href="<?php echo get_permalink() ?>">
                <div class="mask"></div>
            </a>
        </div>

     
        <h4 class="mb-3 font-weight-bold dark-grey-text">
			
            <strong><?php the_title(); ?></strong>
        </h4>
       
       
       
    </div>
    <!--Grid column-->

  <?php
  
  $counter++;
  } // end while
  } // end if
  ?>
  </div>
  <!--Grid row-->
  <div class="container text-center">

  <button type="button" class="btn btn-blue btn-rounded">View all courses</button>




</div>
</main><!-- #main -->
<?php get_footer(); ?>