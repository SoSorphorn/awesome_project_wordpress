<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="">
			<title>Awesome Agency</title>
			<?php wp_head(); ?>
		</head>
    <?php 
		
		if( is_front_page()  ):
			$awesome_classes = array( 'awesome-class', 'my-class' );
		else:
			$awesome_classes = array( 'no-awesome-class' );
		endif;
		
	?>
	  <body id="page-top" <?php body_class($awesome_classes);?>>
    <!-- Navigation -->
     <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Our Logo</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href='#gallery'>Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href='<?php wp_nav_menu(array('theme_location' => 'primary'));?>'>Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href='<?php wp_nav_menu(array('theme_location' => 'primary'));?>'>Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#teams">Teams</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <li>
              <div class="search-form-container">
                <?php get_search_form(); ?>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      <header class="masthead text-center text-white d-flex" id="home">
        <div class="container my-auto">
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <h3> We Are Creative</h3>
              <h1 class="text-uppercase">
                <strong>THE WAY OF GROW UP</strong>
              </h1>
              <hr>
            </div>
            <div class="col-lg-8 mx-auto">
              <p class="text-faded mb-5">A single place to share,curate and discover visual that tell a story</p>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Get started</a>
                </div>
              </div>
          </div>
        </div>
      </header>
