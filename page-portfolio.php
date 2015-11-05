<?php
/*
Template Name:Portfolio
*/
/**
 * The template for displaying portfolio page.
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package portfolio
 */

get_header();

?>

<div class="container">
    <?php if(have_posts()) : while(have_posts()) : the_post() ?>
    <h3 class="page-title text-center"><?php the_title(); ?></h3>
        <div class="page-wrapper">
        <!-- Portfolio 159a8b4caa920cfa7974428f8d8cb791 -->
        <div class="portfolio-image">
            <span class="top-bar">
               <i class="fa fa-chevron-up" id="chevArrow"></i>
            </span>
            <span class="shadow hidden-xs"></span>
            <img src="<?php echo get_template_directory_uri(); ?>/images/159a8b4caa920cfa7974428f8d8cb791.jpg" draggable="false" id="imgMine" alt="<?php bloginfo('name'); ?>" />
            <div class="col-sm-12" style="padding:0 !important;">
                <a href="http://www.facebook.com/rohan30993" target="_blank" rel="author">
                    <div class="col-sm-3 hero-social icon-fb">
                        <i class="fa fa-facebook"></i>
                    </div>
                </a>
                <a href="http://www.twitter.com/rohan30993" target="_blank" rel="author">
                    <div class="col-sm-3 hero-social icon-twitter">
                        <i class="fa fa-twitter"></i>
                    </div>
                </a>
                <a href="https://in.linkedin.com/pub/rohan-krishna/4b/662/a60" target="_blank" rel="author">
                    <div class="col-sm-3 hero-social icon-linkedin">
                        <i class="fa fa-linkedin"></i>
                    </div>
                </a>
                <a href="https://github.com/rohan-krishna" target="_blank" rel="author">
                    <div class="col-sm-3 hero-social icon-git">
                        <i class="fa fa-git"></i>
                    </div>
                </a>
            </div>
        </div>

        <!-- Portfolio Introduction -->
        <h2 class="about-header">Hi,I'm Rohan.I'm a Front-End Software Engineer.I work with organisations and determined individuals to build websites and applications in real world.I'm currently freelancing.</h2>

        <h3>Front-End Software Engineer</h3>
        <p>
            Currently pursuing Computer Science & Engineering in Chennai, I have an appetite for building websites with human-friendly interfaces.I love building easy to use web applications
        using web's latest technologies.
        </p>
        <p>
        I enjoy projects of all kinds,right from developing a simple Single Page Application to complex CRP systems.WordPress is my primary area of expertise.When I'm not in front of my computer
        screen,I love to craft things with my hands.And when I'm not swamped with my work,I'd love to write tutorials to share what I've learned from all the great teachers online.Or you can see me
            spotting aeroplanes at the local airport.
        </p>

        <!-- Services -->
            <h3>Services I offer</h3>
            <p>
                I can build <span class="highlight">responsive</span> websites for you and your business.I can design your organisation's <span class="highlight">Logo</span> , design a complete suite
                of <span class="highlight">marketing materials</span> and also write <span class="highlight">content</span> for your business.
            </p>
            <p>
                All my projects considers a <span class="highlight">360&#176;</span> approach where we'll work closely to bring all your ideas into life.<span class="highlight">Sustainability</span> ,
                <span class="highlight">Scalability</span> , <span class="highlight">Security</span> and <span class="highlight">Support</span> are the key principles I use to develop all the projects from
                ground-up.
            </p>
            <p>
                I believe that if we can infuse creativity and imagination with precision of engineering,we can bring out a lot of great stuff into the world.If you think alike , let's meet. Just holler me
                at my number or just send me a mail. And hey , Coffee's on me!
            </p>

        <h3>
            Wanna talk?
        </h3>
        <p>
            Call me at <span class="highlight">+91-9600 167 855</span> , I'm available from <i>9:00AM to 5:00PM IST</i>. Or post me at <a href="mailto:me@rohankrishna.com">me@rohankrishna</a> anytime. .
        </p>
        <div class="col-md-12" style="padding:0 !important;">
            <div class="col-md-6" style="padding:0 !important;">
                <h3>My Hobbies</h3>
                <ul style="margin: 0 !important;padding:0 !important;">
                    <li>Reading</li>
                    <li>Listening to Music</li>
                    <li>Riding my Motorcycle</li>
                    <li>Quality time at the park</li>
                    <li>Gym</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3>My Beliefs</h3>
                <ul style="margin: 0 !important;padding:0 !important;">
                    <li>Work Hard,Think Positive,Treat everyone nice.</li>
                    <li>Respect Time.</li>
                    <li>Creativity comes from our Imagination.Be limitless.Be Unique.</li>
                    <li>Precise Thinking comes from Precise Communication.</li>
                    <li>An idea is always worth analysing.Be it silly as ever.</li>
                    <li>Always have fun with whatever I do.</li>
                </ul>
            </div>

        </div>
        </div>

    <?php endwhile; endif; ?>
</div>

<?php

get_footer();

?>