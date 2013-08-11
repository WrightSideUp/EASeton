<?php
/*
Template Name: Landing Page
*/
?>

<?php get_header( 'nopost' ); ?>

    <div id="content">

        <div id="inner-content" class="wrap clearfix">

        <?php if ( has_post_thumbnail()) : ?>
            <div class="pageImage">
                <?php the_post_thumbnail('full'); ?>
            </div>
         <?php endif; ?>

        <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

            <div id="pageContent">

                <?php the_title('<h1 class="pageHeading">', '</h1>'); ?>

                <div class="pageText">
                    <?php the_content(); ?>
                </div>

                <?php

                    $childPages = get_pages( array( 'child_of' => $post->ID,
                                                    'sort_column' => 'menu_order') );

                    if (count($childPages) > 0)
                    {
                        echo "<section id='subPages'>\n";

                        $firstAdded = false;

                        foreach ($childPages as $page)
                        {
                            $class = "fourcol actionSection";

                            if (!$firstAdded) {
                                $class .= " first";
                                $firstAdded = true;
                            }
                            else {
                                $class .= " withborder";
                            }

                            $title = $page->post_title;
                            $desc = $page->post_excerpt;
                            $link = get_page_link( $page->ID );
                            $linkText = $title . " ->";


                            echo "<div class='$class'>\n";
                            echo "  <h1 class='subPageHeading'>$title</h1>\n";
                            echo "  <p>$desc</p>\n";
                            echo "  <a href=$link>$linkText</a>\n";
                            echo "</div>\n";
                        }

                        echo "</section>\n";
                    }
                ?>

                <?php endwhile; ?>

            </div> <!-- end #pageContent -->

            <?php endif; ?>

        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->

<?php get_footer(); ?>
