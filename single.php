<?php get_header(); ?>
<?php
  $top_logo = get_field('top_logo');
  $top_image = get_field('top_image');
  $mockup_image_imac = get_field('mockup_image_imac');
  $mockup_image_ipad = get_field('mockup_image_ipad');
  $mockup_image_iphone = get_field('mockup_image_iphone');
  $whole_page_image = get_field('whole_page_image');
  $logo01 = get_field('logo01');
  $logo02 = get_field('logo02');

  $class_prefix = get_field('class_prefix');

  $page = get_the_title();

  function the_image($image, $size = 'full', $class = '') {
    echo wp_get_attachment_image($image['id'], $size, '', array('alt' => $image['alt'], 'class' => $class));
}

?>
<body class="<?= $class_prefix ?>">
<div class="wrapper">
    <header class="customized__jumbotron">
      <a class="marvel__jumbotron__link " href="http://protein-or-die.sakura.ne.jp/customized-heroes/" target="_blank"><?php the_image($top_logo, 'full', 'customized__jumbotron__logoImg'); ?></a>
      <?php if( $page == 'Marvel Heroes'): ?>
          <?php the_image($top_image, 'full', 'customized__jumbotron__topImg'); ?>
    <?php endif; ?>
      <nav class="navbar">
            <div class="navbar__logo">
              <a href="<?php echo get_home_url(); ?>"><img src="<?= get_template_directory_uri().'/img/logo_'.$class_prefix.'.svg' ?>"></a>
            </div>
            <div class="navbar__btn js-navbar__btn js-menu-hide">
              <span class="navbar__btn__icon navbar__btn__icon--customized"></span>
              <?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container_class' => 'menu__outer', 'menu_class' => 'menu js-menu displayNone' ) ); ?>
            </div>
          </nav>
    </header>



    <main class="main--customized">
    <div class="main__inner">

    <section class="individual__title">
      <h1 class="individual__title__main"><a href="http://protein-or-die.sakura.ne.jp/customized-heroes/" target="_blank"><?php echo get_field('main_title'); ?></a></h1>
      <h2 class="individual__title__sub"><?php echo get_field('sub_title'); ?></h2>
<!--       <?php echo "string"; ?>
      <?= "sssss" ?> -->


      <div>
        <h2 class="description__title customized-after-bg">Overview</h2>
        <p><?php echo get_field('overview'); ?></p>
        <?php echo get_field('skills'); ?>
      </div>
      <div>
        <h2 class="description__title customized-after-bg">Design</h2>
        <p><?php echo get_field('design'); ?></p>
      </div>
      <div>
        <h2 class="description__title customized-after-bg">Development</h2>
        <p><?php echo get_field('development'); ?></p>
      </div>
    </section>

    <section class="mockups">
      <?php the_image($mockup_image_imac, 'full', 'mockups__mac'); ?>
      <?php the_image($mockup_image_iphone, 'medium', 'mockups__iphone'); ?>
      <?php the_image($mockup_image_ipad, 'medium', 'mockups__ipad'); ?>
    </section>

    <section class="individual__video">
      <div class="individual__video__inner">
        <iframe src="<?php echo get_field('vimeo_url'); ?>?buttons.watchlater=false&buttons.share=false&color=ffffff&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>
    </section>

    <section class="individual__wholepage">
    <?php the_image($whole_page_image, 'full', 'individual__wholepage__img'); ?>
    </section>

    <section class="individual__description">
      <div class="color individual__description__subsection">
        <h2 class="description__title customized-after-bg">Color Scheme</h2>
        <?php echo get_field('color_scheme'); ?>
      </div> <!-- color -->
      <div class="logos individual__description__subsection">
        <h2 class="description__title customized-after-bg">Logos</h2>
        <ul class="logos__list logos__list--customized">
          <li><?php the_image($logo01, 'medium', 'logos__img--main'); ?><!-- <img class="logos__img--main" src="<?php echo $logo01_url; ?>" alt="customized_heroes_logo"> --><h3>Main Logo</h3></li>
          <li><?php the_image($logo02, 'medium', 'logos__img--favicon'); ?><!-- <img class="logos__img--favicon" src="<?php echo $logo02_url; ?>" alt="customized_logo"> --><h3>Favicon</h3></li>
        </ul>
      </div>
      <div class="typography individual__description__subsection">
        <h2 class="description__title customized-after-bg">Typography</h2>
        <?php echo get_field('typography'); ?>
      </div><!-- typography -->
    </section>

    <section class="visit-website">
      <a class="visit-website__jump customized-hover-color customized-bg customized-bd" href="http://protein-or-die.sakura.ne.jp/customized-heroes/" target="_blank"><span class="visit-website__jump__text">Visit Website</span></a>
    </section>

    <section class="morework">
      <h2 class="description__title customized-after-bg">More Work</h2>
      <ul class="morework__list">
        <li class="morework__list--item"><a href="customizedheroes.html">customized Heroes</a></li>
        <li class="morework__list--item"><a href="bonsai.html">Dream of Bosai</a></li>
        <li class="morework__list--item"><a href="">Sunny Side Hotel</a></li>
      </ul>
    </section>

    <section id="contact" class="contact">
      <h2 class="description__title customized-after-bg">Contact</h2>
      <p>Drop me a line:)</p>
      <div class="email__outer">
        <a id="email" class="email email__individual email__individual--customized" href="mailto:hideto0118yasunori@gmail.com">hideto0118yasunori@gmail.com</a>
      </div>
    </section>

     </div><!-- main__inner -->
  </main>
  <footer id="footer">
    <small>Created by Hideto with full of passion</small>
  </footer>
</div><!-- wrapper -->
<?php get_footer(); ?>