<?php
/*
Template Name: Stories Page
*/
?>


<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="pageContent">

                            <h1>Our Stories</h1>

                            <div class="pageText">

                                <?php
                                $args = array ( 'category' => 6);
                                $myposts = get_posts( $args );
                                foreach( $myposts as $post ) :	setup_postdata($post);
                                 ?>

                                <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                                    <header class="article-header">

                                        <h2 class="page-title" itemprop="headline"><?php the_title(); ?></h2>

                                    </header> <!-- end article header -->

                                    <section class="entry-content clearfix" itemprop="articleBody">
                                        <?php the_excerpt(); ?>
                                </section> <!-- end article section -->

                                    <footer class="article-footer">

                                        <p class="byline vcard"><?php
                                            printf(__('Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(__('F jS, Y', 'bonestheme')));
                                        ?></p>

                                        <?php the_tags('<span class="tags">' . __('Tags:', 'bonestheme') . '</span> ', ', ', ''); ?>

                                    </footer> <!-- end article footer -->

                                </article> <!-- end article -->

                                <?php endforeach ?>

    						</div> <!-- end #pageText -->

						</div> <!-- end #pageContent -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
