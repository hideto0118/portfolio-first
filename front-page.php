<?php get_header(); ?>
<?php
  function the_image($image, $size = 'full', $class = '') {
    echo wp_get_attachment_image($image['id'], $size, '', array('alt' => $image['alt'], 'class' => $class));
  }
 ?>
<body>
<!-- SVG Sprite -->
<svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" style="display: none;">
  <defs>
  <symbol id="logo-codepen" viewBox="0 0 300 300">
    <title>codepen icon</title>
    <path d="m296.2 103.4c0-0.4 0-0.8-0.4-1.2 0-0.4 0-0.4-0.4-0.8 0-0.4-0.4-0.8-0.4-0.8 0-0.4 0-0.4-0.4-0.8 0-0.4-0.4-0.4-0.4-0.8s-0.4-0.4-0.4-0.4c0-0.4-0.4-0.4-0.4-0.8l-0.4-0.4-0.8-0.8-0.4-0.4-0.8-0.8-0.4-0.4h-0.4l-133.5-89.6c-4.3-2.8-9.9-2.8-13.8 0l-134.4 89.7h-0.4l-0.4 0.4c-0.4 0-0.4 0.4-0.8 0.4l-0.4 0.4-0.8 0.8-0.4 0.4c0 0.4-0.4 0.4-0.4 0.8l-0.4 0.4c0 0.4-0.4 0.4-0.4 0.8s0 0.4-0.4 0.8c0 0.4-0.4 0.8-0.4 0.8v0.4c0 0.4 0 0.8-0.4 1.2v0.4 1.6 89.3 1.6 0.4c0 0.4 0 0.8 0.4 1.2v0.8c0 0.4 0 0.8 0.4 0.8 0 0 0 0.4 0.4 0.8 0 0.4 0.4 0.4 0.4 0.8l0.4 0.4c0 0.4 0.4 0.4 0.4 0.8l0.4 0.4 0.8 0.8 0.5 0.2c0.4 0 0.4 0.4 0.8 0.8l0.4 0.4 134.7 90.5c2 1.6 4.7 2 7.1 2s4.7-0.8 7.1-2l134-89.3h0.4s0.4-0.4 0.4-0.4c0.4 0 0.4-0.4 0.8-0.8l0.4-0.4 0.8-0.8 0.4-0.4c0-0.4 0.4-0.4 0.4-0.8l0.4-0.4c0-0.4 0.4-0.4 0.4-0.8s0-0.4 0.4-0.8c0-0.4 0.4-0.8 0.4-0.8 0-0.4 0-0.4 0.4-0.8 0-0.4 0-0.8 0.4-1.2v-0.4-1.6-89.7-1.6c-0.9 0.1-0.9-0.3-0.9-0.3zm-146.6 76.7l-44.6-29.7 44.7-29.6 44.7 29.6-44.8 29.7zm-12.2-81.8l-54.6 36.7-44.3-29.6 98.8-66v58.9zm-77.5 51.7l-31.6 21v-41.9l31.6 20.9zm22.5 15.5l54.5 36.7v58.9l-98.8-66 44.3-29.6zm79.8 36.3l54.5-36.7 44.3 29.6-98.8 66v-58.9zm77.5-51.8l31.6-20.9v42.3l-31.6-21.4zm-22.5-15l-54.9-36.7v-58.5l98.8 66-43.9 29.2z"/>
  </symbol>
  <symbol id="logo-facebook" viewBox="0 0 300 300" >
    <title>facebook icon</title>
    <path d="m110.6 58.1v41.3h-30.3v50.5h30.3v150.1h62.2v-150.1h41.7s3.9-24.2 5.8-50.7h-47.3s0-29.4 0-34.5c0-5.2 6.8-12.1 13.5-12.1h33.9v-52.6h-46c-65.3 0-63.8 50.6-63.8 58.1z"/>
  </symbol>
  <symbol id="logo-github" viewBox="0 0 300 300">
    <title>github icon</title>
    <path d="m149.6 7.6c-80.2 0-145.1 65-145.1 145.1 0 64.1 41.8 118.4 98.8 138 7.1 0.9 9.8-3.6 9.8-7.1s0-12.5 0-24.9c-40.1 8.9-49-19.6-49-19.6-6.2-16.9-16-21.4-16-21.4-13.4-8.9 0.9-8.9 0.9-8.9 14.2 0.9 22.3 15.1 22.3 15.1 13.4 22.3 33.8 16 41.8 12.5 0.9-9.8 5.3-16 8.9-19.6-32-3.6-65.9-16-65.9-72.1 0-16 5.3-28.5 15.1-39.2-1.8-3.6-6.2-18.7 1.8-38.3 0 0 12.5-3.6 40.1 15.1 11.6-3.6 24-4.5 36.5-4.5s24.9 1.8 36.5 4.5c27.6-18.7 40.1-15.1 40.1-15.1 8 19.6 2.7 34.7 1.8 38.3 8.9 9.8 15.1 23.1 15.1 39.2 0 56.1-33.8 67.6-65.9 71.2 5.3 4.5 9.8 13.4 9.8 26.7v40.1c0 3.6 2.7 8 9.8 7.1 57.9-19.6 98.8-73.9 98.8-138-1-79.2-65.9-144.2-146-144.2z"/>
  </symbol>
  <symbol id="logo-linkedin" viewBox="0 0 300 300">
    <title>linkedin icon</title>
    <path d="m296.1 181.5v107.9h-62.6v-100.6c0-25.3-9-42.5-31.7-42.5-17.3 0-27.6 11.6-32.1 22.9-1.7 4-2.1 9.6-2.1 15.3v105.1h-62.6s0.8-170.5 0-188.2h62.6v26.7c-0.1 0.2-0.3 0.4-0.4 0.6h0.4v-0.6c8.3-12.8 23.2-31.1 56.4-31.1 41.2-0.2 72.1 26.7 72.1 84.5zm-256.4-170.9c-21.4 0-35.4 14-35.4 32.5 0 18.1 13.6 32.5 34.6 32.5h0.4c21.8 0 35.4-14.5 35.4-32.5-0.5-18.5-13.6-32.5-35-32.5zm-31.7 278.8h62.6v-188.1h-62.6v188.1z"/>
  </symbol>
  </defs>
</svg>
<!-- end of SVG Sprite -->
<div class="wrapper">
    <header id="hello" class="jumbotron">
      <div class="js-parallax parallax js-jumbotron__main-img--parent">
      <!-- <div class="temporary"></div> -->
      <img class="jumbotron__main-img js-jumbotron__main-img" src="<?php echo get_template_directory_uri(); ?>/img/road04.jpg" alt="jumbotoron main image">
        <!-- <div class="jumbotron__background__gradient"> -->
        <nav class="navbar">
          <div class="navbar__logo">
            <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_darkblue.svg"></a>
          </div>
          <div class="navbar__btn js-navbar__btn js-menu-hide">
            <span class="navbar__btn__icon"></span>
            <?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container_class' => 'menu__outer', 'menu_class' => 'menu js-menu displayNone' ) ); ?>
          </div><!-- navbar__btn -->
        </nav>
          <div class="jumbotron__float">
            <div id="scene">
              <div class="layer" data-depth="0.3">
                <svg id="Layer_1" class="fadeInUp" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 316.6 264.19">
                  <title>hideto_logo_mountain</title>
                  <text transform="translate(46.53 248.09)" font-size="33" fill="#fff" stroke="#fff" stroke-miterlimit="10" stroke-width="0.31" font-family="SnellRoundhand-Bold, Snell Roundhand" font-weight="700">Vancouve<tspan x="132.53" y="0" letter-spacing="-0.11em">r</tspan><tspan x="141.7" y="0" letter-spacing="0em">, BC</tspan></text>
                  <text transform="translate(121.88 215.78)" font-size="16" fill="#fff" font-family="RobotoSlab-Bold, Roboto Slab" font-weight="700">D<tspan x="11.02" y="0" letter-spacing="-0.01em">ev</tspan><tspan x="28.46" y="0">e</tspan><tspan x="36.98" y="0" letter-spacing="-0.01em">l</tspan><tspan x="41.93" y="0">oper</tspan></text>
                  <text transform="translate(121.06 132.89)" font-size="16" fill="#fff" font-family="RobotoSlab-Bold, Roboto Slab" font-weight="700"><tspan letter-spacing="-0.01em">F</tspan><tspan x="9.68" y="0" letter-spacing="-0.01em">r</tspan><tspan x="16.26" y="0">ont-E</tspan><tspan x="57.94" y="0" letter-spacing="0em">n</tspan><tspan x="68.02" y="0">d</tspan></text>
                  <g id="line">
                    <g id="line_tl">
                      <rect x="159.15" y="261.56" width="96.21" height="4" transform="translate(-144.73 -135.14) rotate(-0.18)" fill="#fff"/>
                    </g>
                    <g id="line_tr">
                      <rect x="399.27" y="217.11" width="4" height="94.77" transform="translate(-9.31 528.52) rotate(-89.69)" fill="#fff"/>
                    </g>
                    <g id="line_bl">
                      <rect x="158.99" y="343.64" width="97.15" height="4" transform="translate(-144.79 -135.26) rotate(-0.15)" fill="#fff"/>
                    </g>
                    <g id="line_br">
                      <rect x="351.7" y="343.33" width="97.74" height="4" transform="translate(-145 -134.5) rotate(-0.19)" fill="#fff"/>
                    </g>
                  </g>
                  <g id="mountain">
                    <g id="mtn_left">
                      <polyline points="125.51 108.59 100.18 63.9 79.23 15.77 68.36 51.64 61.84 44.03 41.18 79.9 32.49 74.46 6.4 109.25 32.23 102.09 37.06 91.98 56.41 94.61 66.96 80.11 65.2 65.16 84.55 55.92 81.55 28.73" fill="#fff"/>
                      <path d="M269.4,244.39l-7-10.79-6.93-10.84-6.87-10.87-3.43-5.44c-1.14-1.81-2.3-3.62-3.33-5.5l-.09-.16,0-.08c-1.67-4-3.44-8-5.18-12.06l-5.24-12-10.48-24.07,4.68-.27-10.87,35.87-1.32,4.36-3-3.46-6.52-7.61,4.06-.38-20.65,35.87-1.29,2.25-2.2-1.37-8.7-5.43,3.32-.62-26.09,34.78-2.67-3.91,25.83-7.16-1.59,1.33,4.84-10.11.79-1.64,1.81.25,19.34,2.64-2.36,1,10.55-14.51-.46,1.76-.88-7.47c-.28-2.49-.7-5-.9-7.47l-.15-1.91,1.56-.66,19.78-8.33-.85,1.53-.78-13.68-.71-13.69L227.73,178l2.21,13.52.16,1-1,.54-18.91,10.14,1.42-2.56c.4,2.48.56,5,.86,7.48l.88,7.47.11,1-.58.79-10.55,14.51-.88,1.21-1.48-.2-19.34-2.64,2.59-1.4L178.37,239l-.49,1-1.1.3L151,247.45l-7.07,2,4.4-5.87,26.09-34.78,1.38-1.84,1.95,1.22,8.7,5.43-3.49.87,20.65-35.87,1.76-3.06,2.3,2.68,6.52,7.61-4.29.9,10.87-35.87,2-6.51,2.71,6.23,10.48,24.07,5.24,12c1.75,4,3.47,8,5.3,12l-.12-.24c1.09,1.85,2,3.77,3,5.68l2.9,5.74,5.8,11.48,5.74,11.51Z" transform="translate(-143.89 -135.8)" fill="#fff"/>
                    </g>
                    <g id="mtn_middle">
                      <polyline points="219.5 107.28 188.52 51.62 170.27 36.14 162.15 8.52 153.48 12.31 146.98 7.43 132.78 32.67 120.54 50.76 104.65 68.86 119.53 82.82 128.62 59.7 147.62 63.83 145.97 38.22 159.18 19.23" fill="#fff"/>
                      <path d="M363.38,243.07q-8.78-13.34-17.28-26.83l-4.26-6.74c-1.42-2.25-2.56-4.65-3.87-7l-7.74-13.92.57.69-18.25-15.48-.57-.48-.21-.72L303.64,145l3.4,1.58-8.67,3.79L297,151l-1.17-.87-6.5-4.87,3.68-.77-14.2,25.24-.05.09-.06.09L266.5,188l-.09.13-.1.12-15.88,18.11-.17-3.47,14.88,14-4,.91,9.09-23.13.78-2L273,193l19,4.13-3,2.6c-.12-2.14-.32-4.26-.47-6.4s-.08-4.28-.11-6.42l-.1-12.85v-.62l.28-.35,7.2-9.08,7.27-9-5.95,10-6,9.91.27-1,1.55,12.76c.24,2.13.56,4.25.71,6.38s.2,4.27.36,6.4l.25,3.32-3.27-.71-19-4.13,2.86-1.53-9.09,23.13L264.4,223l-2.69-2.52-14.88-14-1.76-1.65,1.59-1.82,15.88-18.11-.19.25,12.24-18.09-.11.18L288.69,142l1.4-2.48,2.28,1.71,6.5,4.87-2.5-.29L305,142l2.6-1.14.8,2.72,8.12,27.62-.78-1.2L334,185.51l.35.29.22.4,7.74,13.92c1.27,2.33,2.72,4.56,3.88,7l3.48,7.18Q356.68,228.58,363.38,243.07Z" transform="translate(-143.89 -135.8)" fill="#fff"/>
                    </g>
                    <g id="mtn_right">
                      <polyline points="316.61 122.89 285.85 70 275.72 38.53 255.85 4.62 249.14 14.15 218.59 57.59 219.94 69.71 189.16 108.51 234.76 99.39 246.27 86.04 246.27 61.3 266.26 57.49 250.08 29.89 255.79 13.72" fill="#fff"/>
                      <path d="M460.49,258.69c-2.82-4.26-5.68-8.49-8.47-12.77s-5.62-8.53-8.38-12.82l-8.32-12.86c-1.4-2.13-2.7-4.33-3.92-6.57s-2.55-4.42-3.82-6.62l-.14-.24-.08-.26-10.13-31.47.22.5-19.87-33.91,4.2.17-37.26,53,.44-1.71,1.35,12.12.11,1-.64.81L335,245.86l-2.45-4,45.6-9.12-1.4.82,11.51-13.35-.61,1.63V195l2-.39,5-1,5-1c3.34-.59,6.71-1,10.06-1.54l-1.48,3.25-7.41-14.2-7.33-14.25-.12-.23.08-.2,6.19-16-5.23,16.35,0-.43,8.85,13.35,8.77,13.4,1.66,2.54-3.14.71c-3.31.75-6.6,1.59-9.92,2.27l-5,.9-5,.94,2-2.46v25.67l-.61.7-11.51,13.35-.56.65-.84.17-45.6,9.12-6.69,1.34,4.24-5.34,30.78-38.8-.53,1.83L360,193.66l-.1-.94.54-.77,37.26-53,2.24-3.18,2,3.35,19.87,33.91.14.24.08.26L432.12,205l-.22-.49c1.28,2.2,2.55,4.41,3.86,6.6s2.61,4.38,3.77,6.65l7.06,13.59c2.36,4.52,4.66,9.08,7,13.63S458.19,254.13,460.49,258.69Z" transform="translate(-143.89 -135.8)" fill="#fff"/>
                    </g>
                  </g>
                  <text transform="translate(18.22 188.67)" font-size="62" fill="#fff" font-family="NexaRustSlab-BlackShadow01, Nexa Rust Slab">HI<tspan x="86.12" y="0" letter-spacing="-0.02em">D</tspan><tspan x="136.9" y="0" letter-spacing="-0.01em">E</tspan><tspan x="181.85" y="0">TO</tspan></text>
                </svg>
              </div><!-- layer -->
            </div><!-- scene -->
          </div><!-- jumbotron__float -->
        <div class="scroll js-arrow-scroll">
          <span>Scroll Down</span>
        </div><!-- scroll -->
        <!-- </div> --><!-- jumbotron__background__gradient -->
      </div><!-- jumbotron__background__img -->
    </header>

  <main>
    <div class="main__inner">
      <section id="work" class="work">
        <h2 class="section-title">Works</h2>
        <div class="gallery">

        <?php
          $args = array(
            'post_type' => 'works',
            'orderby' => 'ID',
            'order'   => 'ASC'
          );
          $the_query = new WP_Query( $args );
          $count = 0;
          if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) :
              $count++;
              $the_query->the_post();
              $thumbnail_image = get_field('thumbnail_image');
              if($count%2 == 1):
                echo "<div class='gallery__row'>";
              endif;
        ?>
          <a id="gallery__item0<?php echo $count; ?>" class="gallery__item item0<?php echo $count; ?>" href="<?php echo get_permalink(); ?>">
          <?php the_image($thumbnail_image, 'full', 'gallery__img'); ?>
            <div class="gallery__item__cover">
              <div class="gallery__border__right"></div>
              <div class="gallery__border__bottom"></div>
              <div class="gallery__item__text">
                <h3 class="gallery__item__title"><?php echo get_the_title(); ?></h3>
                <p><?php echo get_the_excerpt(); ?></p>
              </div>
            </div>
          </a>

        <?php
            if($count%2 == 0):
              echo "</div>";
            endif;
          endwhile;
          else:
            // no posts found
          endif;
          wp_reset_postdata();
        ?>

          <div class="gallery__row">
            <a id="gallery__item03" class="gallery__item item03" href="http://hidestagram.hidetoyasunori.com/" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/img/hotel.jpg" class="gallery__img">
              <div class="gallery__item__cover">
                <div class="gallery__border__right"></div>
                <div class="gallery__border__bottom"></div>
                <div class="gallery__item__text">
                  <h3 class="gallery__item__title">Hidestagram</h3>
                  <p>React, Redux, Sentry</p>
                </div>
              </div>
            </a>

            <a id="gallery__item04" class="gallery__item item04" href="http://webdev-bodymake.com/" target="_blank">
               <img src="<?php echo get_template_directory_uri(); ?>/img/vancouver.jpg" class="gallery__img">
              <div class="gallery__item__cover">
                <div class="gallery__border__right"></div>
                <div class="gallery__border__bottom"></div>
                <div class="gallery__item__text">
                  <h3 class="gallery__item__title">Personal Blog</h3>
                  <p>Web Design, Web Development, Wordpress, SVG Animation, Instagram API</p>
                </div>
              </div>
            </a>
          </div>

          <div class="gallery__row">
            <a id="gallery__item05" class="gallery__item item05" href="http://protein-or-die.sakura.ne.jp/fav-movie-poster/" target="_blank">
            <picture>
              <source media="(max-width:500px)" srcset="<?php echo  get_template_directory_uri(); ?>/img/movieposter_square.jpg">
              <source media="(max-width:1150px)" srcset="<?php echo  get_template_directory_uri(); ?>/img/movieposter.jpg">
              <img class="gallery__img" src="<?php echo get_template_directory_uri(); ?>/img/movieposter_square.jpg" alt="movieposter_square">
            </picture>
              <div class="gallery__item__cover">
                <div class="gallery__border__right"></div>
                <div class="gallery__border__bottom"></div>
                <div class="gallery__item__text">
                  <h3 class="gallery__item__title">Movie-poster Finder</h3>
                  <p>Description is going to be shown here.</p>
                </div>
              </div>
            </a>
            <div id="gallery__item06" class="gallery__item item06">
              <img src="<?php echo get_template_directory_uri(); ?>/img/harley.jpg" class="gallery__img">
              <div class="gallery__item__cover">
                <div class="gallery__border__right"></div>
                <div class="gallery__border__bottom"></div>
                <div class="gallery__item__text">
                  <h3 class="gallery__item__title">Ruby on Rails App</h3>
                  <p>Coming Soon</p>
                </div>
              </div>
            </div> <!-- item06 -->
          </div> <!-- row-03 -->
        </div> <!-- gallery -->
      </section>
      <section id="about" class="about">
        <div class="about__title">
          <h2 class="section-title">About</h2>
        </div>
        <div class="hideto_svg">
        <svg id="hideto_draw" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.08 44.04">
            <title>Hideto SVG</title>
            <defs>
              <clipPath id="clip_h">
                <path d="M36.54,22.9l-1.89,2.93a49.8,49.8,0,0,1-9.13,11,28.61,28.61,0,0,1-10.11,5.5A27.35,27.35,0,0,1,8,43.54a12.06,12.06,0,0,1-2.42-.21,12.16,12.16,0,0,1-2.06-.63q-3-1.33-3-3.64v-.91l.43-1.26a3.23,3.23,0,0,1,1.28-1c.33-.09.62-.16.85-.21a3.7,3.7,0,0,1,.71-.07q1.42,0,1.74.82a3.93,3.93,0,0,1,.32,1.33.8.8,0,0,1-.63.79H4.56q-.7.14-.7,1.52a2.53,2.53,0,0,0,.35,1.27,3,3,0,0,0,1.16,1.08,4.38,4.38,0,0,0,2.2.47H8.69q3.92,0,8.12-3.22Q21.5,36,26.68,28.35l1.33-2,.7-1.19.91-1.33.35-.7,1.4-1.9a70.44,70.44,0,0,1,6.19-7.84,46.59,46.59,0,0,1,6.75-5.52L45.51,7l.42-.28L44.18,6.3A54.1,54.1,0,0,0,31.93,4.62a24.35,24.35,0,0,0-8.45,1.29,15.74,15.74,0,0,0-5.92,3.82,14.66,14.66,0,0,0-3.83,6.93,11.5,11.5,0,0,0-.14,1.47,5.18,5.18,0,0,0,1.32,3.71,4.56,4.56,0,0,0,3.48,1.4,11.11,11.11,0,0,0,1.5-.17,8.52,8.52,0,0,0,2.75-1.16l1.81-1.47.83-.91.14-.21.21-.07.07.28a1.66,1.66,0,0,1-.35.77q-.21.28-1.68,1.75a12.74,12.74,0,0,1-3.78,2.59,10.21,10.21,0,0,1-4.06.84A5.15,5.15,0,0,1,11.91,24a5.54,5.54,0,0,1-1.4-4,8.56,8.56,0,0,1,.14-1.54,9.21,9.21,0,0,1,.67-2,26.66,26.66,0,0,1,1.44-2.73,21.48,21.48,0,0,1,4-4.44,32.84,32.84,0,0,1,5.85-4,24.24,24.24,0,0,1,11.62-3A39.21,39.21,0,0,1,46.07,4.48l2.52.84,1.26-.56A17.43,17.43,0,0,1,53.42,3.5l.63-.21L55.38,3a11.09,11.09,0,0,1,2.87-.42,3.87,3.87,0,0,1,2.52.7,1.15,1.15,0,0,1,.35.84.67.67,0,0,1-.21.49,6,6,0,0,1-1.82,1.33,4,4,0,0,1-.91.35l-1.4.42q-.21.07-1.37.28a12,12,0,0,1-2.13.21h-4.9a20.53,20.53,0,0,0-3.08,2.88Q44,11.57,41.59,15q-.7,1-1.89,2.81-.84,1.34-1.68,2.6Zm1.55,16.33L50.25,21q4.34-5.8,7.5-9.23a44.65,44.65,0,0,1,5.88-5.32A34,34,0,0,1,71.16,2,16.65,16.65,0,0,1,77.22.56a6.33,6.33,0,0,1,1.23.1L79.7.94a1.32,1.32,0,0,1,.95.59q.21.49-.35.7H80l-.77-.63a2.62,2.62,0,0,0-1.75-.49q-3.08,0-7.7,3.57Q63.93,9.24,57.5,18.34l-2,3L53.84,23.8,41.52,42.28l-5.2,0ZM58.88,4.69q.42-.77-.17-1a4.09,4.09,0,0,0-1.37-.21H56.15l-1.54.28a11.71,11.71,0,0,0-4.27,2,10,10,0,0,0,4.34.63l1.82-.28a8.66,8.66,0,0,0,1.75-.73A1.53,1.53,0,0,0,58.88,4.69Z"/>
              </clipPath>
              <clipPath id="clip_h_middle">
                <polygon points="51.59 24.24 25.93 24.19 26.39 22.58 51.69 22.58 51.59 24.24"/>
              </clipPath>
              <clipPath id="clip_i">
                <path d="M68.19,30.59l-.07.35-.35.56-.14.14-.91,1.12-.49.7-.7.77-1.26,1.26-1.19,1.33-.77.77-.84.91A23.29,23.29,0,0,1,57.06,42a6.67,6.67,0,0,1-3.15.91,3.27,3.27,0,0,1-2.52-1,3.48,3.48,0,0,1-.91-2.46,5.42,5.42,0,0,1,.17-1.09,11.33,11.33,0,0,1,.38-1.3q.14-.35,1-1.89l.62-.8,6.06-9.12a5.08,5.08,0,0,0,1-2.38V22h5a7.24,7.24,0,0,1,.14.84,4.59,4.59,0,0,1-1.19,2.45l-7.07,10.5-.63,1a6.43,6.43,0,0,0-.77,1.71A6,6,0,0,0,55,40q0,1.19,1,1.19a3.32,3.32,0,0,0,1.12-.42q.63-.35,1.08-.56a5.11,5.11,0,0,0,1.16-.84q.21-.14,1.4-1.26l1-.77,1-1,1.12-1.12.63-.77,1.19-1.33a11.65,11.65,0,0,0,1.47-2l.42-.56.28-.14Zm1.33-17.22A4.15,4.15,0,0,1,69,15.15a5.79,5.79,0,0,1-1.82,2q-.35.21-.87.46a2.69,2.69,0,0,1-1.16.24A1.94,1.94,0,0,1,63,16.38a3.81,3.81,0,0,1-.14-.77,3.86,3.86,0,0,1,1.68-3,5,5,0,0,1,2.94-1.36A1.83,1.83,0,0,1,69.52,13.37Z"/>
              </clipPath>
              <clipPath id="clip_i_dot">
                <path d="M68.54,16.76c1.42-1.28,2.09-4.2.84-5.29-1.65-1.45-3.71-.5-5.26,1-2.1,1.5-2.13,4-1,5.21S66.52,18.58,68.54,16.76Z" transform="translate(0 -0.06)"/>
              </clipPath>
              <clipPath id="clip_d">
                <path d="M100.88,6.3a3.81,3.81,0,0,1-.1,1.75,10.34,10.34,0,0,1-1.29,2.17L83.8,33.6a20.24,20.24,0,0,0-1.65,2.66,12.93,12.93,0,0,0-.8,1.89,8.3,8.3,0,0,0-.28,1.19,2.93,2.93,0,0,0,0,.91,1.18,1.18,0,0,0,1.33.91,3.83,3.83,0,0,0,.77-.14,9.28,9.28,0,0,0,2.21-1.26,34.34,34.34,0,0,0,2.77-2.66l1.54-1.61.42-.28.7-.91,1-1.26,1.47-1.82a2.51,2.51,0,0,1,.56-.7.2.2,0,0,0,.14-.07l.28.21-.14.28-.14.28-.28.42-1.47,1.84-.84,1-.84,1-.77.85-1.26,1.35a29.67,29.67,0,0,1-3.85,3.5,11.49,11.49,0,0,1-3.5,1.66A3.92,3.92,0,0,1,80,43a2.9,2.9,0,0,1-2.94-2.93,18.29,18.29,0,0,1,.42-2.57l.42-1.57-2.17,2.17-1.33,1.47L73,40.81a8.8,8.8,0,0,1-3.71,2,8.49,8.49,0,0,1-1.19.14,4.29,4.29,0,0,1-2.94-1.12,3.59,3.59,0,0,1-1.26-2.8A15.28,15.28,0,0,1,64,37.45a11.66,11.66,0,0,1,.49-2,16.56,16.56,0,0,1,3.47-6A27.9,27.9,0,0,1,75,24l2-1a13.16,13.16,0,0,1,4.81-1.33A3.22,3.22,0,0,1,85,23.85l.21.55,9.61-14.2a6.39,6.39,0,0,0,1.42-2.93v-1ZM84.08,25.06a3,3,0,0,0-.49-2.31,1.84,1.84,0,0,0-1.89-.42,9.51,9.51,0,0,0-2.87,1.4,30.89,30.89,0,0,0-4.34,3.92,24.33,24.33,0,0,0-2.31,2.69Q71.06,31.85,70,33.53a23.87,23.87,0,0,0-1.26,2.31A6,6,0,0,0,68.12,39a2.05,2.05,0,0,0,2.1,1.89,3.55,3.55,0,0,0,1.61-.35,8.07,8.07,0,0,0,1.47-1,28.1,28.1,0,0,0,2.45-2.27q1.4-1.43,2-2.14.28-.35.63-.84l2.87-4.41q1.82-2.66,2.31-3.43A3.38,3.38,0,0,0,84.08,25.06Z"/>
              </clipPath>
              <clipPath id="clip_e">
                <path d="M111.52,30.94v.56l-5.35,6.09L105,38.71a22.87,22.87,0,0,1-3.95,2.8,14,14,0,0,1-3.81,1.26,9,9,0,0,1-1.41.14c-.28,0-.89-.06-1.83-.17a3.8,3.8,0,0,1-2.5-1.54,5.23,5.23,0,0,1-1.09-3.38,10.63,10.63,0,0,1,.07-1.39A6.55,6.55,0,0,1,90.94,35a20,20,0,0,1,3-4.85,25,25,0,0,1,4.83-4.54,21.56,21.56,0,0,1,5.15-2.9,14.24,14.24,0,0,1,4.55-1,12.68,12.68,0,0,1,1.75.24q1.33.24,1.33,1.85a4,4,0,0,1-.7,2.09,12.56,12.56,0,0,1-2.1,2,28.17,28.17,0,0,1-4.41,2.65q-1.19.56-2.48,1a24.47,24.47,0,0,1-2.35.77l-2.66.77A7.7,7.7,0,0,0,96,34.74a17,17,0,0,0-1,2.58,4.84,4.84,0,0,0-.14,1Q94.79,41,98.5,41a6.51,6.51,0,0,0,2.69-.7,14.36,14.36,0,0,0,3-1.89l1.4-1.19.63-.7,3.08-3.43,1.47-1.75.56-.84.21.14Zm-2.87-6a2.46,2.46,0,0,0,.21-.7,3.25,3.25,0,0,0,.07-.63q0-1-.6-1.15a4,4,0,0,0-.73-.17,2.59,2.59,0,0,0-1.23.28,8.79,8.79,0,0,0-1.36,1q-1.33,1.11-2.17,1.88t-1.89,1.81A24.76,24.76,0,0,0,98,30.88l-.91,1.25,1-.14a4.71,4.71,0,0,0,.77-.14l.7-.28a28.54,28.54,0,0,0,3.12-1.25,13.53,13.53,0,0,0,2.59-1.67,22.82,22.82,0,0,0,2.1-1.88A7.39,7.39,0,0,0,108.65,25Z"/>
              </clipPath>
              <clipPath id="clip_t">
                <path d="M121.25,22.89l-8,12L111.59,37a3.2,3.2,0,0,0-.57,2.58,1.92,1.92,0,0,0,.94,1.26,2.21,2.21,0,0,0,1.65.21l.74-.35A11.24,11.24,0,0,0,116,39.62l.56-.49.77-.63L118.66,37l1.82-1.82.7-.84,1-1.19,1.54-1.82.56-.84h.28a.38.38,0,0,1,.07.56l-.21.35-.35.42-.35.42-1,1.4L121,35.49l-2,2.17-2.1,2.1-.49.49-1.12.91a10.17,10.17,0,0,1-2.77,1.72,7.49,7.49,0,0,1-2.62.45,3.21,3.21,0,0,1-2.52-1.22,4.14,4.14,0,0,1-1-2.76,8.1,8.1,0,0,1,.17-1.26,5.17,5.17,0,0,1,1-2l.85-1.26,8-11.91L117,22l3.78-5.6a10.25,10.25,0,0,0,1-1.68,3.11,3.11,0,0,0,.31-1.26h4.48a2.53,2.53,0,0,1-.07,1.33,12.71,12.71,0,0,1-1,1.9L121.92,22Z"/>
              </clipPath>
              <clipPath id="clip_t_top">
                <polygon points="128.34 23.33 112.25 23.32 112.84 21.42 129.37 21.42 128.34 23.33"/>
              </clipPath>
              <clipPath id="clip_o">
                <path d="M143.51,27.44A11.93,11.93,0,0,1,142,31.88,27,27,0,0,1,138.12,37l-1.23,1.23a13.49,13.49,0,0,1-1.43,1.23,20.5,20.5,0,0,1-4.8,2.83,11.35,11.35,0,0,1-4.17.94,5.7,5.7,0,0,1-3.32-.94,5.41,5.41,0,0,1-2-2.62,4.43,4.43,0,0,1-.28-1.75,11.43,11.43,0,0,1,1-4.2,16.44,16.44,0,0,1,2.42-4A26.35,26.35,0,0,1,128.11,26a18.62,18.62,0,0,1,4.44-3,20.32,20.32,0,0,1,3.77-1.16l1.38-.27a11.6,11.6,0,0,1,1.33-.14q4.55,0,4.55,5A5.87,5.87,0,0,1,143.51,27.44Zm-2.73-1.68a5.16,5.16,0,0,0,.21-1.33q0-2.1-2.66-2.1a4,4,0,0,0-1.85.6,19.47,19.47,0,0,0-2.9,2.13,22.9,22.9,0,0,0-2.31,2.38q-1.26,1.47-2.66,3.43l-1.54,2.38q-1,1.82-1.5,3a9.13,9.13,0,0,0-.67,2.13q-.35,3.29,2.52,3.29a6.35,6.35,0,0,0,1.54-.17,5.67,5.67,0,0,0,1.82-1,22.92,22.92,0,0,0,2.66-2.45l1.12-1.26.77-.91.91-1.33,1.05-1.47.49-.63.84-1.54q.49-.91.84-1.65t.63-1.47Q140.36,27.09,140.78,25.76Z"/>
              </clipPath>
            </defs>

            <g id="stroke">
              <g clip-path="url(#clip_h)" >
                <path id="h_left" d="M24.72,20.6s-9.38,8.81-12.51,1.71c-1.14-8.81,1.42-9.38,6-13.65s17.82-9,31-1.92c0,0,14.48-.36,11.07-2.92s-16.78,3.7-20.19,8.81-15.61,30.07-31,30.71c-5.69.85-9.1-4.27-6-6" fill="none" stroke="#000" stroke-miterlimit="10"/>
                <path id="h_right" d="M40.3,40.59c1-1,15.74-25.77,19.87-29.31,3.15-3.34,15.93-14,19.67-9.84" fill="none" stroke="#000" stroke-miterlimit="10"/>
              </g>
              <path id="h_middle" clip-path="url(#clip_h_middle)" d="M27.56,23.47H50.07" fill="none" stroke="#000" stroke-miterlimit="10"/>
              <path id="i_main" clip-path="url(#clip_i)" d="M62.28,23s-9.91,13.81-10,16.23c-1,8,12-2.47,14.41-6.44" fill="none" stroke="#000" stroke-miterlimit="10"/>
              <path id="i_dot" clip-path="url(#clip_i_dot)" d="M69.1,10.59c-.33.53-5.91,7.27-6.37,8.11" fill="none" stroke="#000" stroke-miterlimit="10"/>
              <path id="d" clip-path="url(#clip_d)"  d="M84.2,23.86c-1.14-.87-.63-3.82-6-.93-3,1.62-6.41,4.14-7.5,5.79C67.43,31,62.38,42.2,68.36,42.2c3.62.17,10.36-7.07,12.88-9.52C81.75,31.93,98.5,7.43,98.5,7.43L79.39,37.32s-1.85,7.92,5.05,3.28a32.1,32.1,0,0,0,9.72-9.66" fill="none" stroke="#000" stroke-miterlimit="10"/>
              <path id="e"  clip-path="url(#clip_e)" d="M97.46,33c1.47.74,12.42-3.46,12.78-8.09.84-3.37-1.63-4.55-7.36-1.35s-13.28,12.79-8.5,18C101.2,45.15,111.13,31,111.13,31" fill="none" stroke="#000" stroke-miterlimit="10"/>
              <path id="t_main" clip-path="url(#clip_t)" d="M123.85,14.42s-14.48,21.64-14.9,23.24c-.28,1.06-2.71,5.69,4.11,4.34,2.25,0,11.16-10.67,11.84-11.7" fill="none" stroke="#000" stroke-miterlimit="10"/>
              <path id="t_top" clip-path="url(#clip_t_top)" d="M113.58,22.46l13.71-.06" fill="none" stroke="#000" stroke-miterlimit="10"/>
              <path id="o" clip-path="url(#clip_o)" d="M137.5,21.88c-2,.14-9.3,5.67-10.36,7.27-.51.76-5.73,8-3.12,12.29,3.87,4.88,13.47-5.14,14.31-7.07.54-1.24,6.58-9.22,2.95-12.13-1.68-1.35-4.56-.07-4.65-.16" fill="none" stroke="#000" stroke-miterlimit="10"/>
            </g>
          </svg>
        </div>
        <div class="about__pic">
          <img id="about__pic__item" class="about__pic__item" src="<?php echo get_template_directory_uri(); ?>/img/hideto_with_moon.jpg">
        </div>
        <div id="about__description" class="about__description">
          <h3>I am.</h3>
          <p>I'm Hideto, who is front-end developer and loves design and coding. I've always enjoyed being crative and chanllenged myself in design and building a web site. </p>
          <h3>I work.</h3>
          <p>When I work, I devote every single tip of myself to a project. I'm always punctual and a great team player. I never stop learning and keep running with new coming skills. </p>
          <h3>I love.</h3>
          <p>I'm pretty happy as long as I code everyday and workout 3 times a week. I also love grabbing <span class="cross-text">beer</span> kale protein smoothies, hiking, and playing rugby. I've tackled any coding bugs and beaten them all up! Let me know any troubles of web stuff. I will knock them down ASAP!</p>
          <ul class="about__description__sns">
            <li><a href="https://github.com/hideto0118" target="_blank"><svg class="icon__sns icon__sns--github"><use xlink:href="#logo-github"></use></svg></a></li>
            <li><a href="https://www.linkedin.com/in/hidetoyasunori" target="_blank"><svg class="icon__sns icon__sns--linkedin"><use xlink:href="#logo-linkedin"></use></svg></a></li>
            <li><a href="https://codepen.io/Hideto/" target="_blank"><svg class="icon__sns icon__sns--codepen"><use xlink:href="#logo-codepen"></use></svg></a></li>
            <li><a href="https://www.facebook.com/hideto.yasunori" target="_blank"><svg class="icon__sns icon__sns--facebook"><use xlink:href="#logo-facebook"></use></svg></a></li>
          </ul>
        </div>
      </section>
      <section id="skill" class="skill">
        <div class="skill__title">
          <h2 class="section-title">What I Can Do</h2>
        </div>
        <div class="skill_range_outer">
          <div id="skill01" class="skill_range_inner">
            <h4>Front End</h4>
            <ul>
              <li>HTML<span class="hundred"></span></li>
              <li>CSS, Sass<span class="seventyFive"></span></li>
              <li>JavaScript, ES6<span class="seventyFive"></span></li>
            </ul>
          </div>

          <div id="skill02" class="skill_range_inner">
            <h4>CMS/Frameworks</h4>
            <ul>
              <li>Wordpress<span class="seventyFive"></span></li>
              <li>Ruby on Rails<span class="fifty"></span></li>
              <li>React, Redux<span class="fifty"></span></li>
            </ul>
          </div>

          <div id="skill03" class="skill_range_inner">
          <h4>Graphic Design</h4>
            <ul>
              <li>PhotoShop<span class="seventyFive"></span></li>
              <li>Illustrator<span class="fifty"></span></li>
              <li>Web Design<span class="fifty"></span></li>
            </ul>
          </div>

          <div id="skill04" class="skill_range_inner otherSkills">
            <h4>Other Skills</h4>
            <ul>
              <li>Gulp, Webpack</li>
              <li>Responsive Design</li>
              <li>BEM, SMACSS, OOCSS</li>
              <li>GSAP</li>
              <li>SVG Animation</li>
              <li>Cross Browser</li>
              <li>jQuery</li>
            </ul>
          </div>
        </div>
      </section>
       <section id="contact" class="contact">
        <h2 class="section-title">Contact</h2>
        <p>Drop me a line :-)</p>
        <div class="email__outer">
          <a id="email" class="email" href="mailto:hideto0118yasunori@gmail.com">hideto0118yasunori@gmail.com</a>
        </div>
       </section>
    </div><!-- main__inner -->
  </main>
  <footer id="footer">
    <small>Created by Hideto with full of passion</small>
  </footer>
</div><!-- wrapper -->
<?php get_footer(); ?>