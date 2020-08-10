<?php

/*Template Name: About */
get_header();
?>

<?php  $hero =  get_field('banner'); ?>


<main>
    <!-- Hero Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                              <h2 class="text-dark"><?php echo $hero['banner_header'] ?></h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>"><?php echo $hero['link_text_a'] ?></a></li>
                                    <li class="breadcrumb-item"><a href="#"><?php echo $hero['link_text_b'] ?></a></li> 
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
    <?php  $content =  get_field('about_banner'); ?>
        <!-- About Me Start -->
        <div class="about-me pb-top">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="about-me-img mb-30">
                            <?php if( get_field('about_banner') ): ?>

                                <img src="<?php echo $content['about_image'] ?>" />

                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="about-me-caption">
                            <h2><?php echo $content['about_header'] ?></h2> 
                            <p class="pb-30  text-justify"><?php echo $content['about_body'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Me End -->
        <!-- Want To Work Start -->
        <?php  $quotetext =  get_field('quote_banner'); ?>
            <section class="wantToWork-area w-padding2 mt-0">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-12">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2 class="text-center"><?php echo $quotetext['quote_text'] ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <!-- Want To Work End -->

        <!--Contact Info Start --->
        <section class="contact-info-area w-padding2" data-background="<?php bloginfo('template_directory')?>/assets/img/gallery/section_bg04.jpg">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-7">
                      <div class="contact-caption mb-50">
                            <h3>If Not Now, When? Let’s Work Together!</h3>
                            <p>Feel free to get in touch & I’ll get back to you.</p>
                            <img src="assets/img/gallery/sin.png" alt="">
                      </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <form action="#" class="contact-wrapper">
                            <input type="text" name="name" placeholder="Full Name">
                            <input type="email" name="email" placeholder="Email Address">
                            <textarea name="message" id="message" placeholder="Your Message"></textarea>
                            <button class="submit-btn2" type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Info End -->       
</main>

 


<?php get_footer(); ?>