<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="pageContent">

                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <h1><?php the_title(); ?></h1>

                            <div class="pageText">

                                <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                                    <section class="entry-content clearfix" itemprop="articleBody">
                                        <?php the_content(); ?>
                                    </section> <!-- end article section -->

                                    <footer class="article-footer">
                                        <?php the_tags('<p class="tags"><span class="tags-title">' . __('Tags:', 'bonestheme') . '</span> ', ', ', '</p>'); ?>

                                        <p class="byline vcard"><?php
                                            printf(__('Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link());
                                        ?></p>
                                    </footer> <!-- end article footer -->

                                    <?php comments_template(); ?>

                                </article> <!-- end article -->

                            </div> <!-- end pageText -->

                        <?php endwhile; ?>

                        <?php else : ?>

                            <article id="post-not-found" class="hentry clearfix">
                                    <header class="article-header">
                                        <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
                                    </header>
                                    <section class="entry-content">
                                        <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
                                    </section>
                                    <footer class="article-footer">
                                            <p><?php _e("This is the error message in the single.php template.", "bonestheme"); ?></p>
                                    </footer>
                            </article>

                        <?php endif; ?>

					</div> <!-- end #pageContent -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
