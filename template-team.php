<?php /* Template Name: Team*/ get_header(); ?>

<main id="primary" class="site-main container">
<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<!--Grid row-->
<div class="row wow fadeIn">
<?php
// The Query
		$the_query = new WP_Query( 'cat=4&posts_per_page=24' );
//posts_per_page=5'


// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				$category = get_the_category(); 
				?>		


    <!--Grid column-->
    <div class="col-lg-4 col-md-6 col-sm-12 d-flex flex-column">
        <div class="card d-flex flex-column flex-grow flex-fill">
            <!--Featured image-->
            <div class="view overlay hm-white-slight rounded z-depth-2 mb-4 card-img-top">
                <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid')); ?>
                
            </div>

            <div class="card-body d-flex flex-column flex-grow flex-fill">
                <h4 class="mb-3 font-weight-bold dark-grey-text">
                    <strong><?php the_title(); ?></strong>
                </h4>
            
            
                <p class="grey-text"><?php the_content(); ?></p>
                <a href="<?php echo get_permalink() ?>" class="mt-auto btn btn-info btn-rounded btn-md">Email </a>
                </div>
        </div>
    </div>
    <!--Grid column-->

  <?php
  
  $counter++;
  } // end while
  } // end if
  ?>

  </div>
  <!--Grid row-->
</main>
<?php get_footer(); ?>