<?php get_header();  ?>
   <section class="menu-overlay">
      <div class="menu-wrapper">
         <ul class="menu-list">
            <li><a href="#about-full">about</a></li>
            <li><a href="#portfolio-full">work</a></li>
            <li><a href="#skills-full">skills</a></li>
            <li><a href="#contact-full">contact</a></li>
         </ul>
      </div>
   </section>
   <div class="hero-nav">
      <a class="hero-reload">
         KL
      </a>
      <ul class="hero-nav-items">
         <li><a href="#about-full">About</a></li>
         <li><a href="#portfolio-full">Work</a></li>
         <li><a href="#skills-full">Skills</a></li>
         <li><a href="#contact-full">Contact</a></li>
      </ul>
      <ul class="hero-nav-hamburger hero-nav-hamburger-hide">
         <!-- <li><i class="fa fa-bars"></i></li> -->
         <li>
            <a id="menu-toggle" class="button">
               <span class="menu-bar bar1"></span>
               <span class="menu-bar bar2"></span>
               <span class="menu-bar bar3"></span>
            </a>
         </li>
      </ul>
   </div>
   <div class="blur">
      <?php $heroImage = get_field('hero_image'); ?>
      <section id="hero-full" class="hero-section">
         <div class="hero-background" style="background: url('<?php echo $heroImage['url']; ?>'); background-size: cover;">

         </div>
         <div class="hero-wrapper">
            <div class="hero-content">
               <h1><?php the_field('hero_name'); ?></h1>
               <h4><?php the_field('hero_tagline'); ?></h4>
               <ul class="hero-links">
                  <li><a target="_blank" href="https://twitter.com/kelvincodes"><i class="fa fa-twitter"></i><span></span></a></li>
                  <li><a target="_blank" href="https://github.com/kelvinkfli"><i class="fa fa-github"></i><span></span></a></li>
                  <li><a target="_blank" href="https://www.linkedin.com/in/kelvin-li-b6b0b3126?trk=hp-identity-name"><i class="fa fa-linkedin"></i><span></span></a></li>
                  <li><a class="email-message" target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=kelvinkfli@gmail.com"><i class="fa fa-envelope"></i><span></span></a><span class="email-buttons"></span></li>
               </ul>
            </div>
         </div>
      </section>
      <section id="about-full" class="about-me">
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
      <section id="portfolio-full" class="portfolio">
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
               <a target="_blank" class="view-button" href="<?php the_field('portfolio_link'); ?>">VIEW LIVE</a>
            </div>
         </div>

         <?php endwhile; ?>
         <?php wp_reset_postdata(); ?>
      </section>
      <section id="skills-full" class="skills-section" style="background: url('<?php echo $heroImage['url']; ?>'); background-size: cover;">
         <div class="skills-overlay"></div>
         <div class="skills-full">
            <h3>Skills</h3>
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
         </div>
      </section>
      <section id="contact-full" class="footer">
         <div class="footer-wrapper">
            <h1>Let's chat</h1>
            <div class="form-wrapper">
               <form action="http://www.focuspocus.io/magic/kelvinkfli@gmail.com"
               method="POST">
                 <div class="form-name form-part">
                    <label for="fullName">Name</label>
                    <input type="text" name="Full Name" id="fullName" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name'" placeholder="Your name">
                 </div>
                 <div class="form-email form-part">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email'" placeholder="Your email">
                 </div>
                 <div class="form-message form-part">
                    <label for="message">Message</label>
                    <textarea name="comments" id="message" cols=40 rows=10 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your message'" placeholder="Your message"></textarea>
                 </div>
                 <input class="submit" type="submit" value="Send message">
                 <input type="reset" name="reset" class="reset" value="Reset">
               </form>
               <ul class="social-links">
                  <li><a target="_blank" href="https://twitter.com/kelvincodes"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
                  <li><a target="_blank" href="https://github.com/kelvinkfli"><i class="fa fa-github"></i><span>Github</span></a></li>
                  <li><a target="_blank" href="https://www.linkedin.com/in/kelvin-li-b6b0b3126?trk=hp-identity-name"><i class="fa fa-linkedin"></i><span>LinkedIn</span></a></li>
                  <li><a class="email-message" target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=kelvinkfli@gmail.com"><i class="fa fa-envelope"></i><span>Email</span></a><span class="email-buttons"><button class="copy-button" data-clipboard-target="#email-copy"><i class="fa fa-clipboard"></i></button></span></li>
                  <input id="email-copy" value="kelvinkfli@gmail.com">
               </ul>
            </div>
         </div>
      </section>
      <footer class="copyright-footer">
         <p>
            <i class="fa fa-copyright"></i>
            Kelvin Li 2016
         </p>
      </footer>
   </div>
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


<!-- <p>Want to chat? kelvinkfli@gmail.com</p>
<ul class="footer-links">
   <li><a href=""><i class="fa fa-twitter"></i></a></li>
   <li><a href=""><i class="fa fa-github"></i></a></li>
   <li><a href=""><i class="fa fa-linkedin"></i></a></li>
</ul> -->
