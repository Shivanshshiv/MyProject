<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f50d8c4e88ce4"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/header-2.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/header-2_2020-03-23-11.php") )  ) ){
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
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <!--css-->
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets-2/css/bootstrap.min.css">
	  <link href="<?php echo get_template_directory_uri() ?>/assets-2/css/gallery.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets-2/css/theme-style.css">
      <script src="<?php echo get_template_directory_uri() ?>/assets-2/js/jquery.min.js"></script>
      <script src="<?php echo get_template_directory_uri() ?>/assets-2/js/popper.min.js"></script>
      <script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets-2/css/slider.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets-2/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets-2/css/style.css">
	  <!-- STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets-2/css/style.css" type="text/css" media="all">

        
        
        <script type="text/javascript" src="<?php echo get_template_directory_uri() ;?>/assets-2/assets/js/modernizr.custom.20160111.js"></script>
		
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		
    <?php wp_head(); ?>
</head>
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
  border-radius: 50%;
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
height: 700px;
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

</style>

<body <?php body_class(); ?>>
