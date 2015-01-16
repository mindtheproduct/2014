<section class="sponsors">

    <?php
    $args_1 = array(
      'post_type' => 'sponsors', 
      'posts_per_page' => -1, 
      'sponsor_type' => 'In association with'
    );
    $association_sponsor = new WP_Query($args_1);
    if($association_sponsor->have_posts()) : ?>
      <h5>In association with</h5> 
      <ul class="signature">
        <?php while ($association_sponsor->have_posts()) : $association_sponsor->the_post(); ?>
          <li>
            <a href="<?php the_field('sponsor_link'); ?>">
              <?php $image = wp_get_attachment_image_src(get_field('sponsor_logo'), 'large'); ?>
              <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('sponsor_logo')) ?>">
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
  <?php endif; ?>

  <?php
    $args_3 = array(
      'post_type' => 'sponsors', 
      'posts_per_page' => -1, 
      'sponsor_type' => 'Primary'
    );
    $primary_sponsor = new WP_Query($args_3);
    if($primary_sponsor->have_posts()) : ?>
     <h5>Signature sponsors</h5>
      <ul class="signature">
        <?php while ($primary_sponsor->have_posts()) : $primary_sponsor->the_post(); ?>
          <li>
            <a href="<?php the_field('sponsor_link'); ?>">
              <?php $image = wp_get_attachment_image_src(get_field('sponsor_logo'), 'large'); ?>
              <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('sponsor_logo')) ?>">
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
  <?php endif; ?>

<?php
    $args_4 = array(
      'post_type' => 'sponsors', 
      'posts_per_page' => -1, 
      'sponsor_type' => 'Platinum'
    );
    $platinum_sponsor = new WP_Query($args_4);
    if($platinum_sponsor->have_posts()) : ?>
    <h5>Platinum sponsors</h5> 
      <ul class="platinum">
        <?php while ($platinum_sponsor->have_posts()) : $platinum_sponsor->the_post(); ?>
          <li>
            <a href="<?php the_field('sponsor_link'); ?>">
              <?php $image = wp_get_attachment_image_src(get_field('sponsor_logo'), 'large'); ?>
              <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('sponsor_logo')) ?>">
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
  <?php endif; ?>
  
  <?php
    $args_2 = array(
      'post_type' => 'sponsors', 
      'posts_per_page' => -1, 
      'sponsor_type' => 'Normal'
    );
    $normal_sponsor = new WP_Query($args_2);
    if($normal_sponsor->have_posts()) : ?>
      <h5>Sponsors</h5> 
      <ul>
        <?php while ($normal_sponsor->have_posts()) : $normal_sponsor->the_post(); ?>
          <li>
            <a href="<?php the_field('sponsor_link'); ?>">
              <?php $image = wp_get_attachment_image_src(get_field('sponsor_logo'), 'large'); ?>
              <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('sponsor_logo')) ?>">
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
  <?php endif; ?>



  

  <?php wp_reset_query(); ?>

  <?php
    $args_3 = array(
      'post_type' => 'sponsors_link', 
      'posts_per_page' => 1
    );
    $sponsor_link = new WP_Query($args_3);
    if($sponsor_link->have_posts()) : ?>
        <?php while ($sponsor_link->have_posts()) : $sponsor_link->the_post(); ?>
            <a href="<?php the_title();?>">Interested in sponsoring?</a>
        <?php endwhile; ?>
      </ul>
  <?php endif; ?>

  <?php wp_reset_query(); ?>



</section>