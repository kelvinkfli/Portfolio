<?php get_header();  ?>
   <?php $heroImage = get_field('hero_image'); ?>
   <section class="hero-section" style="background: url('<?php echo $heroImage['url']; ?>'); background-size: cover;">
      <div class="hero-wrapper">
         <div class="hero-nav">
            <p>
               logo
            </p>
            <ul>
               <li>home</li>
               <li>about</li>
               <li>portfolio</li>
               <li>skills</li>
               <li>contact</li>
            </ul>
         </div>
         <div class="hero-content">
            <h1><?php the_field('hero_name'); ?></h1>
            <h4><?php the_field('hero_tagline'); ?></h4>
         </div>
      </div>
   </section>
   <section class="about-me">
      <div class="about-content">
         <h1>about me</h1>
         <div class="about-wrapper">
            <p class="about-text"><?php the_field('about_me'); ?></p>
            <?php $aboutpic = get_field('about_photo'); ?>
            <div class="about-image">
               <img src="<?php echo $aboutpic['url']; ?>"/>
            </div>
         </div>
      </div>
   </section>
   <section class="portfolio">
      <?php $portfolioArgs = array('post_type' => 'portfolio');

      $portfolioLoop = new WP_Query($portfolioArgs);

      if($portfolioLoop ->have_posts()) while($portfolioLoop ->have_posts()) : $portfolioLoop->the_post(); ?>

      <div class="portfolio-item">
         <div class="portfolio-image">
            <?php $portImage = get_field('portfolio_image'); ?>
            <img src="<?php echo $portImage['url']; ?>" alt="" />
         </div>
         <div class="portfolio-description">
            <h2><?php the_field('portfolio-header'); ?></h2>
            <p><?php the_content(); ?></p>
            <ul class="tools-list">
               <?php
                  if( have_rows('tools_used')):
                      while ( have_rows('tools_used')) : the_row(); ?>
                        <li><?php the_sub_field('tool_name'); ?></li>
               <?php
                  endwhile;
                  else :
                  endif;
               ?>
            </ul>
            <a class="view-button" href="<?php the_field('portfolio_link'); ?>">VIEW LIVE</a>
         </div>
      </div>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
   </section>
   <section class="skills-section">
      <div class="skills-wrapper">
         <div class="fluent-wrapper skills-style">
            <h1>Fluent</h1>
            <ul class="fluent-skills">
               <li><i class="devicon-html5-plain"></i><p>
                  html5
               </p></li>
               <li><i class="devicon-css3-plain"></i><p>
                  css3
               </p></li>
               <li><i class="devicon-sass-plain"></i><p>
                  sass
               </p></li>
               <li><i class="devicon-javascript-plain"></i><p>
                  javascript
               </p></li>
               <li><i class="devicon-jquery-plain"></i><p>
                  jquery
               </p></li>
               <li><i class="devicon-python-plain"></i><p>
                  python
               </p></li>
               <li><i class="devicon-wordpress-plain"></i><p>
                  wordpress
               </p></li>
               <li><i class="devicons devicons-responsive"></i><p>
                  responsive
               </p></li>
            </ul>
         </div>
         <div class="skills-right">
            <div class="tools-wrapper skills-style">
               <h1>Tools</h1>
               <ul class="tools-skills">
                  <li><i class="devicon-git-plain"></i><p>
                     git
                  </p></li>
                  <li><i class="devicon-github-plain"></i><p>
                     github
                  </p></li>
                  <li><i class="devicons devicons-terminal"></i><p>
                     bash
                  </p></li>
                  <li><i class="devicon-gulp-plain"></i><p>
                     gulp
                  </p></li>
               </ul>
            </div>
            <div class="learning-wrapper skills-style">
               <h1>Learning</h1>
               <ul class="learning-skills">
                  <li><i class="devicon-nodejs-plain"></i><p>
                     node
                  </p></li>
                  <li><i class="devicon-react-plain"></i><p>
                     react
                  </p></li>
               </ul>
            </div>
         </div>
      </div
   </section>
<?php get_footer(); ?>

<!-- <div class="portfolio-item">
   <div class="portfolio-image">
      image goes here
   </div>
   <div class="portfolio-description">
      <h2>Portfolio One</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
      <button type="button">learn more</button>
   </div>
</div> -->
