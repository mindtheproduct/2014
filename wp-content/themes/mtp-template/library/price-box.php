<?php
  $args = array('post_type' => 'price', 'posts_per_page' => 1);
  $loop = new WP_Query($args);
  while ($loop->have_posts()) : $loop->the_post(); ?>
    <?php if (get_field('show_panel')) { ?>

    <li class="get-tickets">
      <a class="get-tickets-button" href="#" title="">Get tickets</a>
      <ul class="submenu-yo">
        
        <li class="buy buy-conference">
          <?php if (get_field('buy_link')) { ?>
            <a href="<?php the_field('buy_link');?>">
          <?php } ?>
            <?php if (get_field('buy_date')) { ?>
              <h3 class="date"><?php the_field('buy_date');?></h3>
            <?php } ?>
            <?php if (get_field('buy_price')) { ?>
              <h1 class="price"><?php the_field('buy_price');?></h1>
            <?php } ?>
            <?php if (get_field('buy_action')) { ?>
              <span><?php the_field('buy_action'); ?></span>
            <?php } ?>
          <?php if (get_field('buy_link')) { ?>
            </a>
          <?php } ?>
        </li>

        <?php if (get_field('workshop_price')) { ?>
          <li class="buy buy-workshops">
            <?php if (get_field('workshop_buy_link')) { ?>
              <a href="<?php the_field('workshop_buy_link');?>">
            <?php } ?>
              <?php if (get_field('workshop_date')) { ?>
                <h3 class="date"><?php the_field('workshop_date');?></h3>
              <?php } ?>
              <?php if (get_field('workshop_price')) { ?>
                <h1 class="price"><?php the_field('workshop_price');?></h1>
              <?php } ?>
              <?php if (get_field('workshop_action')) { ?>
                <span><?php the_field('workshop_action'); ?></span>
              <?php } ?>
              <?php if (get_field('workshop_buy_link')) { ?>
              </a>
            <?php } ?>
          </li>
        <?php } ?>
      </ul>
    </li>
  <?php } ?>
<?php endwhile; ?>