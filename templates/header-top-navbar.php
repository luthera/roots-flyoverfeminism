<header id="banner" class="navbar navbar-fixed-top" role="banner">
  <?php roots_header_inside(); ?>
  <div class="logo-banner span12">
      <img class="logo-image" src="<?php echo get_template_directory_uri(); ?>/img/femplane.jpg"/>
      <hgroup class="logo-text">
          <h1 class="logo-main-text">
              <?php bloginfo('name'); ?>
          </h1>
          <h2 class="logo-sub-text">
              <?php bloginfo('description'); ?>
          </h2>
      </hgroup>
  </div>
  <div class="navbar-inner">
    <div class="<?php echo WRAP_CLASSES; ?>">
     <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <!-- a class="brand" href="<?php echo home_url(); ?>/">
        <?php bloginfo('name'); ?>
      </a -->
      <nav id="nav-main" class="nav-collapse" role="navigation">
        <?php wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav')); ?>
      </nav>
    </div>
  </div>
</header>