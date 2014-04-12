<?php
/*
Template Name: Speakers
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="speaker-schedule">
  

  <?php the_content(); ?>

<?php endwhile; else : ?>

  <p>Nothing here</p>

<?php endif; ?>

<?php
    $args_1 = array(
      'post_type' => 'speakers', 
      'posts_per_page' => -1
    );
    $speakers = new WP_Query($args_1);
    if($speakers->have_posts()) : ?>


      <ul>
        <?php while ($speakers->have_posts()) : $speakers->the_post(); ?>
        <li>
          <div class="schedule">
            <?php if (get_field('schedule_time')) { ?>
              <time><?php the_field('schedule_time');?></time>
            <?php } ?>
            <div class="content">
              
            </div>
          </div>
        </li>
          <li>

            <div class="schedule">
            <?php if (get_field('schedule_time')) { ?>
                <time><?php the_field('schedule_time');?></time>
              <?php } ?>
            <div class="content">
              <?php if (get_field('schedule_name')) { ?>
                <h5><a href="#"><?php the_field('schedule_name');?></a></h5><!--this is the link that opens up 'expanded' and closes 'schedule'  -->
              <?php } ?>
              <?php if (get_field('schedule_other_category')) { ?>
                <h5><?php the_field('schedule_other_category');?></h5>
              <?php } ?>
              <?php if (get_field('schedule_position')) { ?>
                <p><?php the_field('schedule_position');?></p>
              <?php } ?>
            </div>
          </div>



            <div class="expanded">
              <img src="<?php bloginfo('template_directory');?>/library/images/face.jpg" alt="name" />
              <?php if (get_field('schedule_time')) { ?>
                <time><?php the_field('schedule_time');?></time>
              <?php } ?>
              <div class="content">
                <h4><?php the_field('schedule_name');?></h4>
                <p>
                  <?php if (get_field('schedule_position')) { ?>
                    <?php the_field('schedule_position');?><br />
                  <?php } ?>
                  <?php if (get_field('schedule_twitter')) { ?>
                    <a href="http://twitter.com/<?php the_field('schedule_twitter');?>">@<?php the_field('schedule_twitter');?></a>
                  <?php } ?>
                </p>
                <?php if (get_field('schedule_description')) { ?>
                  <p><?php the_field('schedule_description');?></p>
                <?php } ?>
                <a class="close" href="#">close</a><!--this is the link that opens up 'schedule' and closes 'expanded'.  ONly one should open at a time.  -->
              </div>
            </div>
          </li>
        <?php endwhile; ?>

      </ul>
  <?php endif; ?>
</section>
<?php get_footer(); ?>
              