<?php get_header(); ?>
<div class="container">
    <div class="heading_container heading_center">

      <?php if (has_post_thumbnail()) : ?>
        <div class="post-thumbnail">
            <?php the_post_thumbnail('large'); ?>
        </div>
      <?php endif; ?>
      
    <section class="team_section layout_padding">
        
            <h2>
            <?php the_title(); ?>
            </h2>
            <p>
            <?php the_content(); ?>
            </p>
        </div>
    </section>
      </div>
      </div>
<?php get_footer(); ?>