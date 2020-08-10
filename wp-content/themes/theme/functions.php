<?php 


      function load_stylesheets()
      {

      wp_register_style('icon', get_template_directory_uri().'/assets/img/favicon.ico', array(), 1 ,'all');
      wp_enqueue_style('icon');

      wp_register_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), 1 ,'all');
      wp_enqueue_style('bootstrap');

      wp_register_style('owl', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), 1 ,'all');
      wp_enqueue_style('owl');

      wp_register_style('slicknav', get_template_directory_uri().'/assets/css/slicknav.css', array(), 1 ,'all');
      wp_enqueue_style('slicknav');

      wp_register_style('flaticon', get_template_directory_uri().'/assets/css/flaticon.css', array(), 1 ,'all');
      wp_enqueue_style('flaticon');

      wp_register_style('animate', get_template_directory_uri().'/assets/css/flaticon.css', array(), 1 ,'all');
      wp_enqueue_style('animate');

      wp_register_style('magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), 1 ,'all');
      wp_enqueue_style('magnific-popup');

      wp_register_style('fontawesome-all', get_template_directory_uri().'/assets/css/fontawesome-all.min.css', array(), 1 ,'all');
      wp_enqueue_style('fontawesome-all');

      wp_register_style('themify-icons', get_template_directory_uri().'/assets/css/themify-icons.css', array(), 1 ,'all');
      wp_enqueue_style('themify-icons');

      wp_register_style('slick', get_template_directory_uri().'/assets/css/slick.css', array(), 1 ,'all');
      wp_enqueue_style('slick');

      wp_register_style('nice-select', get_template_directory_uri().'/assets/css/nice-select.css', array(), 1 ,'all');
      wp_enqueue_style('nice-select');

      wp_register_style('styles', get_template_directory_uri().'/assets/css/style.css', array(), 1 ,'all');
      wp_enqueue_style('styles');

      wp_register_style('gallery', get_template_directory_uri().'/assets/css/gallery.css', array(), 1 ,'all');
      wp_enqueue_style('gallery');

      wp_register_style('custom', get_template_directory_uri().'/custom.css', array(), 1 ,'all');
      wp_enqueue_style('custom');


}

add_action('wp_enqueue_scripts','load_stylesheets');



//Load Scripts

function load_js()
{

wp_register_script('jquery', get_template_directory_uri(). '/assets/js/vendor/jquery-1.12.4.min.js', array(), 1,1,1);
wp_enqueue_script('jquery');


wp_register_script('popper', get_template_directory_uri(). '/assets/js/popper.min.js', array(), 1,1,1);
wp_enqueue_script('popper');


wp_register_script('bootsrap', get_template_directory_uri(). '/assets/js/popper.min.js', array(), 1,1,1);
wp_enqueue_script('bootsrap');


wp_register_script('modernizr', get_template_directory_uri(). '/assets/js/vendor/modernizr-3.5.0.min.js', array(), 1,1,1);
wp_enqueue_script('modernizr');


wp_register_script('slicknav', get_template_directory_uri(). '/assets/js/jquery.slicknav.min.js', array(), 1,1,1);
wp_enqueue_script('slicknav');


wp_register_script('owl', get_template_directory_uri(). '/assets/js/owl.carousel.min.js', array(), 1,1,1);
wp_enqueue_script('owl');


wp_register_script('slick', get_template_directory_uri(). '/assets/js/slick.min.js', array(), 1,1,1);

wp_enqueue_script('slick');


wp_register_script('wow', get_template_directory_uri(). '/assets/js/wow.min.js', array(), 1,1,1);

wp_enqueue_script('wow');


wp_register_script('headline', get_template_directory_uri(). '/assets/js/animated.headline.js', array(), 1,1,1);
wp_enqueue_script('headline');


wp_register_script('magnific-popup', get_template_directory_uri(). '/assets/js/jquery.magnific-popup.js', array(), 1,1,1);
wp_enqueue_script('magnific-popup');


wp_register_script('nice-select', get_template_directory_uri(). '/assets/js/jquery.nice-select.min.js', array(), 1,1,1);
wp_enqueue_script('nice-select');


wp_register_script('sticky', get_template_directory_uri(). '/assets/js/jquery.sticky.js', array(), 1,1,1);
wp_enqueue_script('sticky');


wp_register_script('contact', get_template_directory_uri(). '/assets/js/jquery.sticky.js', array(), 1,1,1);
wp_enqueue_script('contact');


wp_register_script('form', get_template_directory_uri(). '/assets/js/jquery.form.js', array(), 1,1,1);
wp_enqueue_script('form');


wp_register_script('validate', get_template_directory_uri(). '/assets/js/jquery.validate.mivalidate', array(), 1,1,1);
wp_enqueue_script('validate');


wp_register_script('ajaxchimp', get_template_directory_uri(). '/assets/js/jquery.ajaxchimp.min.js', array(), 1,1,1);
wp_enqueue_script('ajaxchimp');


wp_register_script('mail', get_template_directory_uri(). '/assets/js/jquery.ajaxchimp.min.js', array(), 1,1,1);
wp_enqueue_script('mail');


wp_register_script('main', get_template_directory_uri(). '/assets/js/main.js', array(), 1,1,1);

wp_enqueue_script('main');


wp_register_script('custom', get_template_directory_uri(). '/custom.js', array(), 1,1,1);

wp_enqueue_script('custom');


}



//add_action('wp_enqueue_scripts','load_js');



//Theme Support
add_theme_support('menus');


//Register Menu
register_nav_menus(


      array(

            'top-menu'=>__('Top Menu' , 'theme'),    
      )


);




?>

 





      
        
            
        