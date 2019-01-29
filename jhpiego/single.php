<?php  get_header();
    require_once('components/navbar.inc.php'); 

    if ( have_posts() ) {
        while ( have_posts() ) {
            
            the_post();
            
            $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
            
?>

 

<!--Main Navigation-->
<header>

    
        
        
   <!-- Full Page Intro -->
  <div class="view" style="background: url('<?php echo $backgroundImg[0] ?>'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
              
               <h1 class=" display-2 font-weight-bold mt-sm-5"><?php the_title() ?></h1>
              
               <!-- Breadcrumbs -->
                    <?php
                    $categories = get_the_category();
                    $first_category_name = $categories[0]->cat_name;
                    $first_category_id = get_cat_ID( $category[0]->cat_name );
                    $first_category_link = get_category_link( $category_id );
                    ?>
                    <ol class="breadcrumb" style="background:transparent;" >
                        <li class="breadcrumb-item">
                            <a href="<?php echo get_home_url(); ?>">Home</a>
                        </li>
                        <?php
                        if (count($categories)){
                        ?>
                        <li class="breadcrumb-item">
                            <a href="<?php echo $first_category_link ?>"><?php echo $first_category_name ?></a>
                        </li>
                        <?php
                        }
                        ?>
                        <li class="breadcrumb-item active"><?php the_title() ?></li>
                    </ol>
                    <!-- Breadcrumbs -->
           
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-md-6 white-text col-xl-5 mt-xl-5 wow fadeInRight" data-wow-delay="0.3s">
              
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->
    

</header>
<!--Main Navigation-->

<!--Main layout-->
<main>
    <div class="container">

        <!--Section: Post-->
        <section class="mt-3">

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-8 mb-4">

                   

                    <!--Card-->
                        <div class="card mb-4">

                            <!--Card content-->
                            <div class="card-body">

                                <div class="post-content">
                                <?php the_content(); ?>
                                </div>
                                
                                <hr>
                                
                                 <p>by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a> on <?php echo get_the_date(); ?></p>

                            </div>

                        </div>
                    <!--/.Card-->


                                       
                    <!--Comments and reply-->
                    <?php /*?><?php comments_template(); ?><?php */?>
                    <!--/.Comments and reply-->
                    

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-4">

                    <!-- Sticky content -->
                    <div class="sticky">
                        <!--Section: Dynamic Content Wrapper-->
                        <section>
                          <div id="dynamic-content"></div>

                        </section>
                        <!--Section: Dynamic Content Wrapper-->

                      
                        
                        <!--Sidebar-->
                        <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
                        <?php dynamic_sidebar( 'sidebar' ); ?>
                        <?php endif; ?>
                        <!--/.Sidebar-->

                    </div>
                    <!-- Sticky content -->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Post-->

    </div>
</main>
<!--Main layout-->

<?php
    } // end while
    
    } // end if

get_footer();
?>

