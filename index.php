<?php get_header(); ?>
  
   <?php
    if (have_posts(  ) ) :
        while (have_posts(  )) : the_post(  );?>
        
        <section class="about_section layout_padding">
            <div class="container">
            <div class="row">
                <div class="col-md-6 px-0">
                <div class="img_container">
                    <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-img.jpg" alt="" />
                    </div>
                </div>
                </div>
                <div class="col-md-6 px-0">
                <div class="detail-box">
                    <div class="heading_container ">
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                    </div>
                    <p>
                    <?php the_excerpt(); ?>
                    </p>
                    <div class="btn-box">
                    <a href="<?php the_permalink(); ?>">
                        Read More
                    </a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
        
        <?php endwhile; ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6 px-0">
                    <?php the_posts_pagination(); ?>
                </div>
            </div>
        </div>
        <?php
    endif;

    get_footer();
    ?>