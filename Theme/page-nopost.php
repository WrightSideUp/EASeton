<?php
/*
Template Name: No-Post Page
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

                  $custom_fields = get_post_custom(72);

                  foreach ( $custom_fields as $custom_field ) {
                    foreach ( $custom_fields as $key => $ value ) {
                        echo "<h2>" . $key . "</h2>";
                        echo <p> . $value . </p>;
                    }
                  }

                ?>

                <?php endwhile; ?>

            </div> <!-- end #pageContent -->

            <?php endif; ?>

        </div> <!-- end #inner-content -->

    </div> <!-- end #content -->

<?php get_footer(); ?>
