<!DOCTYPE html>
<html lang="en" dir="ltr"<?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>
  </head>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">wu18</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        <?php foreach (get_pages(['sort_column' => 'menu_order']) as $page): ?>
        <li class="nav-item <?php if (is_page($page) || is_home() && $page->ID == get_option('page_for_posts')) { echo 'active'; } ?>">
          <a class="nav-link" href="<?php echo get_permalink($page); ?>">
             <?php echo $page->post_title; ?>
          </a>
        </li>
        <?php endforeach; ?>

      </ul>
    </div>
  </nav>

  <body>
    <div class="container">
