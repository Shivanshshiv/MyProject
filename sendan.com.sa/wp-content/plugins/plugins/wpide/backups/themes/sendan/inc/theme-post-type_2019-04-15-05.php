<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e290ece391d1d"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/inc/theme-post-type.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/inc/theme-post-type_2019-04-15-05.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
$practice_area = new CPT(array(
    'post_type_name' => 'projects',
    'singular' => 'Project',
    'plural' => 'Projects',
    'slug' => 'project',
));
$practice_area->menu_icon();

// Project sectior Taxonomy
$practice_area->register_taxonomy(array(
    'taxonomy_name' => 'sector-type',
    'singular' => 'Sector Type',
    'plural' => 'Sector Types',
    'slug' => 'sector-type'
));

// Practice Type  TaxonomyNews
$practice_area->register_taxonomy(array(
    'taxonomy_name' => 'project-category',
    'singular' => 'Project Category',
    'plural' => 'Project Categories',
    'slug' => 'project-category'
));

// Testimonial Post Type  major-projects.
$testimonials = new CPT(array(
    'post_type_name' => 'testimonials',
    'singular' => 'Clients Review',
    'plural' => 'Clients Reviews',
    'slug' => 'testimonials',
));
$testimonials->menu_icon();


// Testimonial Post Type  major-projects.
$news = new CPT(array(
    'post_type_name' => 'news',
    'singular' => 'News',
    'plural' => 'News',
    'slug' => 'news',
));
$news->menu_icon();



// Awards Post Type  major-projects.
$awards = new CPT(array(
    'post_type_name' => 'awards',
    'singular' => 'Awards',
    'plural' => 'Award',
    'slug' => 'award',
));
$awards->menu_icon();


