<?php
/*
Template Name: Speakers
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="speaker-schedule">
  <div class="content-main">
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
  </div>
<?php endwhile; else : ?>

  <p>Nothing here</p>

<?php endif; ?>

<?php
    $args_1 = array(
      'post_type' => 'speakers', 
      'posts_per_page' => -1,
      'orderby' => 'meta_value_num',
      'meta_key' => 'speaker_order',
      'order' => 'ASC'
    );
    $speakers = new WP_Query($args_1);
    if($speakers->have_posts()) : ?>


      <ul class="accordion">
        <?php while ($speakers->have_posts()) : $speakers->the_post(); ?>

          <li>
            <div class="time-image">
              
                <?php if (get_field('schedule_time')) { ?>
                  <time>
                  <?php the_field('schedule_time');?>
                  </time>
                <?php } ?>
              
              <?php if (get_field('speakers_photo')) { ?>
                <?php $image = wp_get_attachment_image_src(get_field('speakers_photo'), 'thumbnail'); ?>
                <img class="photo" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('speakers_photo')) ?>">
                <?php } else { ?>
                <div class="placeholder"></div>
              <?php } ?>
            </div>
              
              <div class="content">
                <?php if (get_field('schedule_name')) { ?>
                  <h4><a href="#"><?php the_field('schedule_name');?></a><img src="<?php bloginfo('template_directory');?>/library/images/arrow.png" /></h4>
                <?php } ?>
                <?php if (get_field('schedule_other_category')) { ?>
                  <h4><?php the_field('schedule_other_category');?></h4>
                <?php } ?>
                <p>
                  <?php if (get_field('schedule_position')) { ?>
                    <?php the_field('schedule_position');?><br />
                  <?php } ?>
                  <?php if (get_field('speaker_other_link')) { ?>
                    <?php the_field('speaker_other_link');?><br />
                  <?php } ?>
                  <?php if (get_field('schedule_twitter')) { ?>
                    <a href="http://twitter.com/<?php the_field('schedule_twitter');?>">@<?php the_field('schedule_twitter');?></a>
                  <?php } ?>
                </p>
                <?php if (get_field('schedule_description')) { ?>
                  <div class="description"><?php the_field('schedule_description');?></div>
                <?php } ?>
                <a class="close" href="#">close</a>
              </div>
          </li>
        <?php endwhile; ?>

      </ul>
  <?php endif; ?>
  <?php wp_reset_query(); ?>
  <?php if (get_field('schedule_more_soon')) { ?>
    <div class="content-main">
      <div class="entry-content">
          <?php the_field('schedule_more_soon');?>
      </div>
    </div>
  <?php } ?>
</section>
<?php get_footer(); ?>
              