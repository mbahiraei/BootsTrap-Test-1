<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
	<title><?php bloginfo("name"); wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hover.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hover-min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/toggler.css">
    <!-- SLICK -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css"/>
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/pace.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fonts/fonts.css">

    <!-- SCRIPT -->
  	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
  	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/toggler.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/toggle.js"></script>
    
    <?php wp_head(); ?>
    <?php wp_enqueue_script("jquery"); wp_head(''); ?>
</head>
<body>
        <!-- header -->
        <header class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header p0">
            <div class="container p0">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 logo p0">
        		<a href="<?php bloginfo("url"); ?>">
          		<img src="<?php echo get_template_directory_uri(); ?>/img\logo.png" alt="logo">
          		</a>
    		  </div>
            <section id="menu-top">
            <nav class="col-lg-5 col-md-6 col-sm-6 col-xs-12 menu-top p0">
          		<ul>

                    <li class="col-lg-2 col-md-2 col-sm-2 col-xs-2 p0">
                        <a href="#">
                            <div class="top-menu-list">
                                <i class="icon-home32"></i><br>
                                صفحه نخست</div>
                        </a>
                    </li>
                    <li class="col-lg-2 col-md-2 col-sm-2 col-xs-2 p0">
                 		<a href="#">
                   		<div class="top-menu-list">
                     		<i class="icon-vimeo2"></i><br>
                   				VIP اشتراک</div>
                 		</a>
               		</li>
               		<li class="col-lg-2 col-md-2 col-sm-2 col-xs-2 p0">
                   		<a href="#">
                     		<div class="top-menu-list">
                       		<i class="icon-enter"></i><br>
                            پنل کاربری</div>
                   		</a>
               		</li>
               		<li class="col-lg-2 col-md-2 col-sm-2 col-xs-2 p0">
                   		<a href="#">
                     		<div class="top-menu-list">
                     			<i class="icon-clipboard2"></i><br>
                   	      ثبت نام</div>
                   		</a>
               		</li>
               		<li  class="col-lg-2 col-md-2 col-sm-2 col-xs-2 p0">
                   		<a href="#">
                     		<div class="top-menu-list">
                     			<i class="icon-download"></i><br>
                                آدرس یاب</div>
                   		</a>
               		</li>
               		<li  class="col-lg-2 col-md-2 col-sm-2 col-xs-2 p0">
                   		<a href="#">
                     		<div class="top-menu-list">
                     			<i class="icon-users3"></i><br>
             				       تماس با ما</div>
                   		</a>
               		</li>
           		</ul>
            </nav>
            </section>
        </div>
        </header>
    
    
        <div class="container">
        <!-- menu -->
            <section id="menu">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menu p0">
                <div class="hidden-lg hidden-md col-sm-3 col-xs-1 empty-1 p0"></div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-10 search p0">
				<form action="" method="">
                        <input class="col-lg-10 col-md-10 col-sm-10 col-xs-10 input p0" type="text" placeholder=" ...جستجو  ">
                        <button class="col-lg-2 col-md-2 col-sm-2 col-xs-2" type="submit">
                    	<i class="icon-search7"></i>
                        </button>
				</form>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 main-menu p0">
                    <ul>
                        <li class="col-lg-2 col-md-2 col-sm-2 col-xs-4 p0">
                      <a href="#">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-menu-inner p0">
                              HOME
                          </div>
                      </a>
                  </li>
                        <li class="col-lg-2 col-md-2 col-sm-2 col-xs-4 p0">
                      <a href="#">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-menu-inner p0">
                              FROUM
                          </div>
                      </a>
                  </li>
                        <li class="col-lg-2 col-md-2 col-sm-2 col-xs-4 p0">
                      <a href="#">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-menu-inner p0">
                              MEMBERSHIP
                          </div>
                      </a>
                  </li>
                        <li class="col-lg-2 col-md-2 col-sm-2 col-xs-4 main-menu-out p0">
                      <a href="#">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-menu-inner p0">
                              MOVIE
                          </div>
                      </a>
                  </li>
                        <li class="col-lg-2 col-md-2 col-sm-2 col-xs-4 p0">
                      <a href="#">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-menu-inner p0">
                              TV SEREIS
                          </div>
                      </a>
                  </li>
                        <li class="col-lg-2 col-md-2 col-sm-2 col-xs-4 p0">
                      <a href="#">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-menu-inner p0">
                              ARCHIVES
                          </div>
                      </a>
                  </li>
                    </ul>
                </div>
            </div>
            </section>