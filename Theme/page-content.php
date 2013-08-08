<?php
/*
Template Name: Content Page
*/
?>

<?php get_header( 'nopost' ); ?>

    <div id="content">

        <div id="inner-content" class="wrap clearfix">

        <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

        <?php if ( has_post_thumbnail()) : ?>
            <div class="pageImage">
                <?php the_post_thumbnail('full'); ?>
            </div>
         <?php endif; ?>

            <div id="pageContent">

                <?php the_title('<h1 class="pageHeading">', '</h1>'); ?>

                <div class="pageText">
                    <?php the_content(); ?>
                </div>

                <?php

                  if ($keys = get_post_custom_keys() ) {

                    echo "<section id='subPages'>\n";

                    $firstItemFound = false;

                    for ($i = 0; $i < count($keys); $i++) {

                        $key = $keys[$i];
                        $keyt = trim($key);

                        if (is_protected_meta( $keyt, 'post' ) || $key == "custom_post_template" )
                            continue;

                        $class = "fourcol actionSection";

                        if (!$firstItemFound) {
                            $class .= " first";
                            $firstItemFound = true;
                        }
                        else {
                            $class .= " withborder";
                        }


                        $values = array_map('trim', get_post_custom_values($key));
                        $value = implode($values, ', ');

                        echo "<div class='$class'>\n";
                        echo "  <h1 class='subPageHeading'>$keyt</h1>\n";
                        echo "  <p>$value</p>\n";
                        echo "  <a href=#>$keyt -></a>\n";
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
