<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

    <div id="content">

        <div id="inner-content" class="wrap clearfix">

            <section id="story">

                <img src="<?php echo get_template_directory_uri(); ?>/img/StoryBackground.png" alt="Mom and Child Image" />

                <div class="callout">
                    <h2>Building Stronger Communities,</h2>
                    <h1 class="mainheading">One Mom at a Time</h1>
                    <div class="calloutText">
                        <h2>Assisting pregnant and parenting women with</h2>
                        <ul class="calloutList">
                            <li>Mentoring Support</li>
                            <li>Education</li>
                            <li>Employment</li>
                            <li>Practical Assistance</li>
                        </ul>
                    </div>
                </div>

            </section>

            <section id="callToAction">

                <div class="first fourcol actionSection">
                    <h1 class="mainheading">Get Help</h1>
                    <p>If you are a pregnant or parenting mother...</p>
                    <a href="<?php echo get_permalink(103); ?>" title="Get Help">See What We Offer -></a>
                </div>

                <div class="fourcol actionSection">
                    <h1 class="mainheading">Join Us</h1>
                    <p>Find out how you can help make a difference</p>
                    <a href="<?php echo get_permalink(22); ?>" title="Join Us">How Can I Help -></a>
                </div>

                <div class="last fourcol actionSection">
                    <h1 class="mainheading">Donate</h1>
                    <p>Your gift will help mothers in central Illinois</p>
                    <a href="<?php echo get_permalink(25); ?>" title="Donate">I'd Like to Give Now -></a>
                </div>

            </section>

            <section id="News">
                <h1 class="mainheading">EAS News</h1>

                <div class="newsContent">

                    <?php

                        // WP_Query arguments
                        $args = array ('category_name'  => 'News');

                        // The Query
                        $query = new WP_Query( $args );

                        // The Loop
                        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                        <a href="<?php the_permalink() ?>" rel="bookmark">
                            <div class="newsitem">
                                <div class="newsdate">
                                    <p class="newsmonth"><?php echo get_the_date('M') ?></p>
                                    <p class="newsday"><?php echo get_the_date('j') ?></p>
                                </div>
                                <p class="headline"><?php the_title() ?></p>
                            </div>
                        </a>

                    <?php endwhile; ?>

                    <?php else : ?>

                        <div class="newsitem">
                            <div class="newsdate">
                                <p class="newsmonth">JAN</p>
                                <p class="newsday">1</p>
                            </div>
                            <p class="headline">No News!</p>
                        </div>

                    <?php endif; wp_reset_postdata(); ?>

                </div>

            </section>

            <section id="RecentPics">
                <h1 class="mainheading">Recent Pics</h1>

                <div class="recentPicsContent">
                    <?php echo do_shortcode('[nggallery id=1 template=EASetonHome]'); ?>
                </div>

            </section>

        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->

<?php get_footer(); ?>
