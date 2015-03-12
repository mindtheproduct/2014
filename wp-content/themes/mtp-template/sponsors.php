<section class="sponsors">

    <?php
/*
 * Loop through Categories and Display Posts within
 */
$post_type = 'sponsors';
 
// Get all the taxonomies for this post type
$taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );
 
foreach( $taxonomies as $taxonomy ) :
 
    // Gets every "category" (term) in this taxonomy to get the respective posts
    $terms = get_terms( $taxonomy );
 
    foreach( $terms as $term ) : ?>

      <div class="<?php echo $term->slug; ?>">
        
        <h5><?php echo $term->name; ?></h5> 

        <?php
          $args = array(
                'post_type' => $post_type,
                'posts_per_page' => -1,  //show all posts
                'tax_query' => array(
                    array(
                        'taxonomy' => $taxonomy,
                        'field' => 'slug',
                        'terms' => $term->slug,
                    )
                )
 
            );
          $posts = new WP_Query($args); ?>

          <ul>
 
            <?php if( $posts->have_posts() ): while( $posts->have_posts() ) : $posts->the_post(); ?>
              
                <li>
                  <a href="<?php the_field('sponsor_link'); ?>">
                    <?php $image = wp_get_attachment_image_src(get_field('sponsor_logo'), 'large'); ?>
                    <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('sponsor_logo')) ?>"<?php if(get_field('sponsor_logo_width')) echo ' width="' . get_field('sponsor_logo_width') . '"' ?>>
                  </a>
                </li>
   
            <?php endwhile; endif; ?>

          </ul>

      </div>
 
    <?php endforeach;
 
endforeach; ?>



</section>