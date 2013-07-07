<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php bloginfo('name');?> -<?php wp_title(''); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]> <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico"> <![endif]-->

		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#e7d683">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">

					<div id="header-bar">

                        <div id="logo">
                            <a href="<?php echo home_url(); ?>" rel="nofollow">
                                <?php if ( is_front_page() ) : ?>
                                    <img src=" <?php echo get_template_directory_uri(); ?>/img/mark.png" alt="Elizabeth Ann Seton Program Logo" />
                                <?php else : ?>
                                    <img src=" <?php echo get_template_directory_uri(); ?>/img/mark horizontal.png" alt="Elizabeth Ann Seton Program Logo" />
                                <?php endif; ?>
                            </a>
                        </div>

                        <nav role="navigation">
                            <?php bones_main_nav(); ?>
                        </nav>

                    </div> <!-- end header-bar -->

				</div> <!-- end #inner-header -->

			</header> <!-- end header -->
