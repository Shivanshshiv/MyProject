<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f50fc07a4caf7"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/header.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/header_2020-03-25-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sendan
 * @developed by Hariom ( Sendan International )
 * @since 1.0.0
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>
<title>Sendan International Company</title>
<!-- CSS -->
<link rel="stylesheet" href="css/slider.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Heebo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kameron" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<!-- Clients Review CSS -->
<link rel="stylesheet" type="text/css" href="css/component.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<!-- Clients Review CSS -->
<!-- News Update CSS -->
<link rel="stylesheet" href="newsupdate/demo.css" />
<link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">
<!-- End News Update CSS -->
<style>  
.inner {
    margin: 0 auto;
    position: relative;
    width: 100%;
}
.inner h2 {
    height: auto;
    font-size: 2.25rem;
    line-height: 2.875rem;
}
.inner p {
    line-height: 1.6875rem;
}
.inner .row-cta {
    padding: 0;
}
.inner .row-cta a {
    font-size: 16px;
}
.inner .image-container {
    float: right;
}
.inner .block.image {
    margin: 0;
    position: relative;
    overflow: hidden;
}
.ob{
    padding-bottom: 0px !important;
    border-bottom: none !important;
}
</style>
<style>
/* PROFIL */
.blog .carousel-indicators {
	left: 0;
	top: auto;
    bottom: -40px;

}

/* The colour of the indicators */
.blog .carousel-indicators li {
    background: #a3a3a3;
    border-radius: 50%;
    width: 8px;
    height: 8px;
    margin-bottom:10px;
    
}

.our-team .pic {
    display: inline-block;
    width: 250px;
    height: 240px;
    z-index: 1;
    position: relative;
}
.blog .carousel-indicators .active {
background: #707070;
margin-bottom:10px;
}

.our-team-section {
  position: relative;
  padding-top: 40px;
  padding-bottom: 40px;
}
.our-team-section:before {
  position: absolute;
  top: -0;
  left: 0;
  content: " ";
  background: url(img/service-section-bottom.png);
  background-size: 100% 100px;
  width: 100%;
  height: 100px;
  float: left;
  z-index: 99;
}
.our-team {
  text-align: center;
  overflow: hidden;
  position: relative;
}
.our-team {
	min-height: 336px;
}
.our-team:hover .pic:before {
  height: 100%;
  background: #2f2f2f;
}

.our-team:hover .pic:after {
  background: #7ab92d;
}
.our-team .pic img {
  width: 100%;
  height: 100%;
  border-radius: 5%;
  transform: scale(1);
  transition: all 0.9s ease 0s;
  box-shadow: 0 0 0 14px #f7f5ec;
  transform: scale(0.7);
  position: relative;
  z-index: 2;
}
.our-team:hover .pic img {
  box-shadow: 0 0 0 14px #f7f5ec;
  transform: scale(0.7);
}
.our-team .team-content {
  margin-bottom: 30px;
}
.our-team .title {
  font-size: 22px;
  font-weight: 700;
  color: #4e5052;
  letter-spacing: 1px;
  text-transform: capitalize;
  margin-bottom: 5px;
}
.our-team .post {
  display: block;
  font-size: 15px;
  color: #4e5052;
  text-transform: capitalize;
}
.our-team .social {
  width: 100%;
  padding-top: 10px;
  margin: 0;
  background: #2f2f2f;
  position: absolute;
  bottom: -100px;
  left: 0;
  transition: all 0.5s ease 0s;
}
.our-team .social li {
  display: inline-block;
}
.our-team .social li a {
  display: block;
  padding-top: 6px;
  font-size: 15px;
  color: #fff;
  transition: all 0.3s ease 0s;
}
.our-team .social li a:hover {
  color: #2f2f2f;
  background: #f7f5ec;
}
@media only screen and (max-width: 990px) {
  .our-team {
    margin-bottom: 10px;
  }
}

.sli{
width: 100%;
height: 100%;
}
.clientslog img {
    height: auto !important;
}
.navbar {
    background: #fff;
	box-shadow: 0px 2px 5px #3c8c5e;
}
.block.html h2 {
    color: #266c44;
}
.sectr li {
    color: #353535;
    font-size: 15px;
    display: flex;
}
.radiotextsty {
	vertical-align: sub;
    padding-left: 5px;
}
.navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover {
    color: #000;
}
</style>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ( is_front_page() || is_home() ) { ?>
    <div class="custom">    
        <?php  get_template_part( 'template-parts/sections/home/slider-image'); ?>    
       <?php  get_template_part( 'template-parts/header/menu-section'); ?>    
        <?php  get_template_part( 'template-parts/sections/home/slider-content' ); ?>
        <?php  get_template_part( 'template-parts/sections/home/slider-counter'); ?> 
    </div>
 <?php } else{
     get_template_part( 'template-parts/header/menu-section');
     ?>
    <div class="container-fluid main-content-home" style="padding-bottom:0px;">
         <div class="container">
               <div class="row">
                    <div class="col-md-12 heading-details" ><br><br>
                    <h2>
                    <?php 
                    if( get_field('page_heading') ) 
                        the_field('page_heading');
                    else
                        if ( is_archive() ) {
                            echo get_the_archive_title(); 
                        }
                        elseif(is_search() ){
                            echo 'You are searching for : ' . get_search_query();
                        }
                        else{
                            the_title();
                        }
                        
                        ?>
                    </h2>
                    <?php 
                    if( get_field('page_subheading') ) 
                        echo '<p class="main-p">'.get_field('page_subheading').'</p>';
                    ?>
                        
                	</div>
            </div>
        </div>
    </div>
<?php
 }
 ?>
        