<?php get_header(); ?>

<?php  $banner =  get_field('banner_section'); ?>
<?php  $about =  get_field('about_section'); ?>
<?php  $quote =  get_field('quote_section'); ?>


<main>
     <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div class="hero__caption text-white">
                                    <span data-animation="fadeInUp" data-delay=".4s"></span>
                                    <h1 class="text-white" data-animation="fadeInUp" data-delay=".6s"><?php echo $banner['header_text']; ?></h1>
                                    <P   data-animation="fadeInUp" data-delay=".8s" class="text-white" ><?php echo $banner['header_quote']; ?>
                                    </P>
                                    <!-- Hero-btn -->

                                    <div class="hero__btn">


                                        <a href="/wordpress/about" class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s"><?php echo $banner['first_button_text']; ?></a>
                                        <a href="/wordpress/#contact" class="btn border-btn ml-15" data-animation="fadeInRight" data-delay="1.0s"><?php echo $banner['second_button_text']; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
       <!-- About Me Start -->
        <div class="about-me pb-top">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    
                    <div class="col-lg-5 col-md-6">
                        <div class="about-me-caption">
                            <h2><?php echo $about['about_heading'] ?></h2> 
                            <p class="pb-30  text-justify"><?php echo $about['about_body'] ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="about-me-img mb-30">
                            <img src="<?php bloginfo('template_directory')?>/assets/img/about/about.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Me End -->



        <section data-background="<?php bloginfo('template_directory')?>/assets/img/blog/4.jpeg" class= "quote-section" id="overlay" >
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 ">     
                        <div class="quote">
                            <img src="<?php bloginfo('template_directory')?>/assets/img/testmonial/quote.svg" alt="">
                        </div>
                            <div class="text-center pt-5">       
                                <h1 class="text-center font-weight-bold text-white"><?php echo $quote ?></h1>
                                <p class="text-white"></p>
                            </div>
                        <div class="testmonial_author text-white">

                            <div class="thumb">
                                <img src="img/testmonial/thumb.png" alt="">
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
     <?php  $info =  get_field('info_section'); ?>
    <!-- Categories Area Start -->
    <section class="categories-area section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2 class="pt-5"><?php echo $info['info_head'] ?></h2>
                    <button class="btn hero-btn mt-4" ><?php echo $info['info_button'] ?></button>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 mt-5">
                    <div class="row p-2">
                        <div class="col text-center">
                            <ion-icon name="person" size="large"></ion-icon>
                            
                                <p><?php echo $info['icon_a_text'] ?></p> 
                        </div>
                        
                    </div>
                    <div class="row p-2">
                        <div class="col text-center">
                            <ion-icon name="mic" size="large"></ion-icon>
                            
                                <p><?php echo $info['icon_b_text'] ?></p> 
                        </div>
                        <div class="col text-center">
                             <ion-icon name="key" size="large"></ion-icon>
                             <p><?php echo $info['icon_c_text'] ?></p>
                        </div>
                        
                    </div>
                    <div class="row p-2">
                       
                        
                    </div>
                </div>
             </div>
        </div>
    </section>
    <!-- Categories Area End -->
     <?php  $consultation =  get_field('consultation_section'); ?>
    <!-- Want To Work Start -->
    <section class="wantToWork-area w-padding2 mt-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-lg-8 col-md-8">
                    <div class="wantToWork-caption wantToWork-caption2">
                        <h2><?php echo $consultation['consultation_text']?></h2>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3">
                    <a href="#" class="btn btn-black f-right"><?php echo $consultation['consultation_button']?></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Want To Work End -->

    <!-- client-comments 
        
    - Contact Info Start --->
    <?php  $contact =  get_field('contact_section'); ?>
    <section class="contact-info-area w-padding2" data-background="<?php bloginfo('template_directory')?>/assets/img/gallery/section_bg04.jpg" id ="contact">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-7">
                  <div class="contact-caption mb-50">
                        <h3><?php echo $contact['contact_head'] ?></h3>
                        <p><?php echo $contact['contact_text'] ?></p>
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