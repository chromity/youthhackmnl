<?php
  /**
   * Header for YouthHack website, present in all pages.
   *
   * @author      Maded Batara III, Michael Daryl Mayo
   * @version     v20170923
   */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>

    <!-- Meta -->
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title>
      <?php bloginfo('name');  ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
    </title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />

    <!-- HTML5 Shiv -->
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->

    <?php wp_head(); ?>

  </head>

<body <?php body_class('karla'); ?>>

  <header id="masthead" class="site-header vw-100 <?php echo is_front_page() ? "header-bg header-bg-tint cover bg-right-l white pb5 pb3-ns vw-100" : '' ?>">

    <nav class="flex items-center ph5 vh-10 justify-between">
      <a href="http://youthhack.net" title="YouthHack Home" class="align-center mid-gray link dim">
        <img src="<?php echo get_template_directory_uri() . '/img/yh-logo.svg' ?>" alt="YouthHack Logo" class="w2 h2">
      </a>
      <?php wp_nav_menu(array( 
        'theme_location' => 'primary',
        'menu_class' => 'dtc v-mid tr list',
        'container' => false,
        'walker' => new Tachyons_Walker_Nav_Menu()
      ));?>
    </nav>

    <?php if (is_front_page()): ?>
    <div class="row around-xs start-xs pt5 w-100 vh-90">
      <div class="col-xs-9 col-sm-8">
        <div class="box">
          <h1 class="bg-yh-yellow black di zilla-slab f-display fw3 lh-solid measure mv0 ttu" >
            Think. <br> Create. <br> Innovate.
          </h1>
        </div>
      </div>
    </div>
    <?php endif; ?>

  </header>

  <main class="main-fluid">
