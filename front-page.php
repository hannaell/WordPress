<?php get_header(); ?>
<div class="row">

  <div class="col">

    <?php if (have_posts()): ?>

      <?php while (have_posts()): the_post(); ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php the_content(); ?>

      <?php endwhile; ?>

    <?php endif; ?>
    <?php
    $args = [
      'numberposts' => 2,
      'order' => 'DESC'
    ];
    ?>

    <?php foreach (get_posts($args) as $post): setup_postdata($post); ?>

      <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

      <?php the_excerpt(); ?>

      <?php the_post_thumbnail('thumbnail') ?>

    <?php endforeach; ?>

    <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Our Blog</a>

  </div>

</div>


<?php get_footer(); ?>
