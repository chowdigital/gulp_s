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



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php wordpress_bootstrap_starter_theme_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wordpress-bootstrap-starter-theme' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'wordpress-bootstrap-starter-theme' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</main><!-- #main -->
<?php get_footer(); ?>