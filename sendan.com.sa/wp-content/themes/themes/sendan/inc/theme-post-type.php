<?php
$practice_area = new CPT(array(
    'post_type_name' => 'projects',
    'singular' => 'Project',
    'plural' => 'Projects',
    'slug' => 'project',
));
$practice_area->menu_icon('dashicons-chart-bar');

// Project sectior Taxonomy
$practice_area->register_taxonomy(array(
    'taxonomy_name' => 'sector-type',
    'singular' => 'Sector Type',
    'plural' => 'Sector Types',
    'slug' => 'sector-type'
));

// Year Project sectior Taxonomy
$practice_area->register_taxonomy(array(
    'taxonomy_name' => 'pyear',
    'singular' => 'Year',
    'plural' => 'Year',
    'slug' => 'pyear'
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
$testimonials->menu_icon('dashicons-format-quote');


// News Post Type  major-projects.
$news = new CPT(array(
    'post_type_name' => 'news',
    'singular' => 'News',
    'plural' => 'News',
    'slug' => 'news',
));
$news->menu_icon('dashicons-megaphone');



// Awards Post Type  major-projects.
$awards = new CPT(array(
    'post_type_name' => 'awards',
    'singular' => 'Awards',
    'plural' => 'Award',
    'slug' => 'award',
));
$awards->menu_icon('dashicons-smiley');

// Practice Type  TaxonomyNews
$awards->register_taxonomy(array(
    'taxonomy_name' => 'award-year',
    'singular' => 'Award Year',
    'plural' => 'Award Year',
    'slug' => 'award-year'
));

// Testimonilas for business page Post Type  major-projects.
$testimonials_business= new CPT(array(
    'post_type_name' => 'business_review',
    'singular' => 'Testimonial For Business Page',
    'plural' => 'Testimonials For Business Page',
    'slug' => 'business_review',
));
$testimonials_business->menu_icon('dashicons-format-chat');


// $site_phots .
$site_phots = new CPT(array(
    'post_type_name' => 'site_phots',
    'singular' => 'Site Photo',
    'plural' => 'Site Photos',
    'slug' => 'site_phots',
));
$site_phots->menu_icon('dashicons-images-alt2');

// $site_phots .
$our_people = new CPT(array(
    'post_type_name' => 'our_people',
    'singular' => 'Our People',
    'plural' => 'Our People',
    'slug' => 'our_people',
));
$our_people->menu_icon('dashicons-groups');




// $site_phots .
$events = new CPT(array(
    'post_type_name' => 'event',
    'singular' => 'event',
    'plural' => 'events',
    'slug' => 'event',
));
$events->menu_icon('dashicons-groups');



// $site_phots .
$broucheure = new CPT(array(
    'post_type_name' => 'broucheure',
    'singular' => 'BROCHURE',
    'plural' => 'BROCHURES',
    'slug' => 'broucheure',
));
$broucheure->menu_icon('dashicons-groups');



// Job Posting Url.
$news = new CPT(array(
    'post_type_name' => 'jobs_posting_url',
    'singular' => 'Jobs Posting Url',
    'plural' => 'Jobs Posting Url',
    'slug' => 'Jobs Posting Url',
));
$news->menu_icon('dashicons-admin-links');

