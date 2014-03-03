<section class="sponsors">

  <?php
    $args_1 = array(
      'post_type' => 'sponsors', 
      'posts_per_page' => -1, 
      'sponsor_type' => 'Primary'
    );
    $primary_sponsor = new WP_Query($args_1);
    if($primary_sponsor->have_posts()) : ?>
     <h5>Signature sponsor</h5>
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
    $args_2 = array(
      'post_type' => 'sponsors', 
      'posts_per_page' => -1, 
      'sponsor_type' => 'Normal'
    );
    $normal_sponsor = new WP_Query($args_2);
    if($normal_sponsor->have_posts()) : ?>
     <h5>Sponsor</h5>
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

  <?php if (get_field('sponsoring_link')) { ?>
    <a href="<?php the_field('sponsoring_link');?>">Interested in sponsoring?</a>
  <?php } ?>

</section>