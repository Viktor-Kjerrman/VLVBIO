<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php if (is_front_page()) { bloginfo('name'); } else { wp_title(''); } ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png?v=2">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<script type="text/javascript">
			var templateDir = "<?php bloginfo('template_directory') ?>";
		</script>

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

		

	</head>

	<body <?php body_class(); ?>>


		<div class="countires-container isset">
			<div class="row">
			<div class="col-md-4 europe">
				<div class="countries-content">
					<i class="countries-icon"><img src="<?php echo get_template_directory_uri(); ?>/library/images/america.png?>"/></i>
					<h3 class="countires-title">AMERICA</h3>
					<p>For more delicate matters of information.</p>
				</div>
			</div>
			<div class="col-md-4 america">
				<div class="countries-content">
					<i class="countries-icon"><img src="<?php echo get_template_directory_uri(); ?>/library/images/world.png?>"/></i>
					<h3 class="countires-title">EUROPE</h3>
					<p>For more delicate matters of information.</p>
				</div>
			</div>
			<div class="col-md-4 germany">
				<div class="countries-content">
					<i class="countries-icon"><img src="<?php echo get_template_directory_uri(); ?>/library/images/world_2.png?>"/></i>
					<h3 class="countires-title">GERMANY</h3>
					<p>For more delicate matters of information.</p>
				</div>
			</div>
			</div>

			</div>
    <header class="header">

      <nav role="navigation">
        <div class="navbar navbar-inverse navbar-fixed-top border-bottom-big">
          <div class="container">
            <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"></a>

            </div>

            <div class="navbar-collapse collapse navbar-responsive-collapse">

             <div class="countries-select pull-right">
				 <div id="select-dropdown" class="closed">
					    <div id="select-default" class="select default"><a href="/">EN</a></div>
					    <div class="select option" data-id="hexpound"><a href="/us">US</a></div>
					    <div class="select option" data-id="hexclean"><a href="/ger">GER</a></div>
				</div>
			</div>
              <?php bones_main_nav(); ?>


            </div>

          </div>
        </div> 
        
      </nav>

		</header> <?php // end header ?>
