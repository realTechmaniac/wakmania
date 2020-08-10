<?php

/*Template Name: Blog*/
get_header();
?>

<?php  $blog =  get_field('blog_post'); ?>


<main>
    <!-- Hero Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>Blog Area</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Blog</a></li> 
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
<?php get_footer(); ?>