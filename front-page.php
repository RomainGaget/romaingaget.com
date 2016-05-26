<?php
/**
 * The Front Page.
 *

 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RGDesign
 */

get_header(); ?>
<header class="hero">
<div class="carousel">
  <div class="carousel-cell" >
    <div class="hero-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center" id='main_header'>
            <h1 class="wp1">Hello World, I'm Romain</h1>
                      <p>A WEB DESIGNER/FRONT-END DEVELOPER</p>
                      <p>I DESIGN BEAUTIFUL WEBSITE AND ANY COOL STUFF ON THE WEB</p>
                      <a href="#intro" class="btn primary wp2">Learn more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</header>

<div id="content" class="site-content">
<section class="collective has-padding" id="intro"><div class="container">
    <div class="row">
      <div class="col-md-3">
        <h4>Me, Myself and I</h4>

      </div>
      <div class="col-md-9">

          <p>Originaly from France, I moved to the beautilul country side of Surrey ,England in 2008 where I've started to look into web design as a new career path.As soon I've seen my first lines of html/css I was hooked!Since that I'm learning everything related to the web through books, online video tutorials and help from the web community. I love the fact that I'm able to create anything I want and post it online for everybody to see. You can read more about my passions and life here.</p>
      </div>


      </div>
    </div>
  </div>
</section>
<!-- END SECTION: Intro -->
<!-- SECTION: Crew -->
<section class="crew has-padding alternate-bg" id="team">
  <div class="container">

    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <article class="crew-member" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/RomainBl.jpg)">
          <figure>
            <figcaption class="overlay">
              <h2>Romain Gaget</h2>
              <div class="crew-socials">
                <ul>
                  <li><a href="http://www.twitter.com/romain0309/"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li><a href="https://uk.linkedin.com/in/romain-gaget-99931040"><i class="fa fa-linkedin"></i></a>
                  </li>
                </ul>
              </div>
            </figcaption>
          </figure>
        </article>
      </div>
    </div>
    <div class="row skillset">
      <div class="col-md-6">
        <div class="bar-chart-wrapper">
          <h5 class="bar-chart-text">Experience Design <span class="push-right">90%</span></h5>
          <div class="bar-wrapper">
            <div class="bar" data-percentage="90%">
              <span></span>
            </div>
          </div>
        </div>
        <div class="bar-chart-wrapper">
          <h5 class="bar-chart-text">HTML5/CSS3 <span class="push-right">95%</span></h5>
          <div class="bar-wrapper">
            <div class="bar" data-percentage="95%">
              <span></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="bar-chart-wrapper">
          <h5 class="bar-chart-text">Interactive Prototyping <span class="push-right">80%</span></h5>
          <div class="bar-wrapper">
            <div class="bar" data-percentage="80%">
              <span></span>
            </div>
          </div>
        </div>
        <div class="bar-chart-wrapper">
          <h5 class="bar-chart-text">Visual Design <span class="push-right">90%</span></h5>
          <div class="bar-wrapper">
            <div class="bar" data-percentage="90%">
              <span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END SECTION: Crew -->
<!-- SECTION: Stats -->
<div class="stats has-padding-tall">
  <section class='skills'>
          <h1>WHAT CAN I DO</h1>
          <article>
              <div>
                  <img src="<?php bloginfo('template_directory'); ?>/img/paint brush3.png" height="64" width="64" alt="paint brush">
                  <h1>Design</h1>
                  <ul>
                      <li>Branding</li>
                      <li>UX/UI Design</li>
                      <li>Email Template</li>
                      <li>Layout Design</li>
                  </ul>
              </div>
              <div>
                  <img src="<?php bloginfo('template_directory'); ?>/img/code2.png" height="64" width="64" alt="develop">
                  <h1>Develop</h1>
                  <ul>
                      <li>Front End Developement</li>
                      <li>Content Management System</li>
                      <li>Responsive Web Design</li>
                      <li>E-Commerce</li>
                  </ul>
              </div>
              <div>
                  <img src="<?php bloginfo('template_directory'); ?>/img/analytics2.png" height="64" width="64" alt="develop">
                  <h1>Strategy</h1>
                  <ul>
                      <li>SEO</li>
                      <li>Content strategy</li>
                      <li>Prototyping</li>
                      <li>Testing</li>
                  </ul>
              </div>
          </article>
      </section>
</div>
<!-- END SECTION: Stats -->
<!-- SECTION: Articles -->
<section class="latest-articles has-padding alternate-bg" id="articles">
  <div class="container">

    <div class="row">
      <div class="col-md-4">
        <article class="article-post">
          <?php
        if ( have_posts() ) :
        while ( have_posts() ) :
        the_post();
        ?>
    <div class="article-image has-overlay" style="<?php if ( has_post_thumbnail() ) : ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php the_post_thumbnail(); ?>
</a>
<?php endif; ?>">
      <span class="featured-tag">Featured</span>
    </div>
    <figure>
      <figcaption>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<br />
        <?php
      the_content( 'Read more', false );
        endwhile;
        endif;
        ?>
      </figcaption>
    </figure>
</article>
      </div>
  </div>
  </div>
</section>
<!-- END SECTION: Articles -->
  <section class="contact has-padding footer-bg">
<h1>ROMAIN GAGET</h1>
    <div class='main_details'>
        <div class="phone">
        <img src="img/MyIcons/png/cellphone57.png" height="64" width="64" alt='Phone'>
        <p>07445 328460</p>
        </div>
        <div class="mail">
        <img src="img/MyIcons/png/opened4.png" height="64" width="64" alt='Phone'>
        <p><a href='mailto:romaingaget@gmail.com'>romaingaget@gmail.com</a></p>
        </div>
    </div>

    <ul>
        <li><a href='https://www.facebook.com/romain.gaget' target="_blank"><img src="img/MyIcons/png/facebook2.png" height="64" width="64" alt='facebook'></a></li>
        <li><a href="https://www.twitter.com/romain0309" target="_blank"><img src='img/MyIcons/png/twitter.png' height="64" width="64" alt='twitter'></a></li>
        <li><img src='img/MyIcons/png/linkedin12.png' height="64" width="64" alt='linkedin'></li>
    </ul>
  </section>



<!-- SECTION: Contact -->
