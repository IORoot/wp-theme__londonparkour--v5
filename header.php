<?php

	$body_classes = get_field('body_classes'); 
	
?>

<!doctype html>
<html <?php language_attributes(); ?>>

	<head>
		<title><?php echo wp_title(); ?></title>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<link rel="preload" href="//www.googletagmanager.com">
		<link rel="preload" href="//www.google-analytics.com">

		<?php 
			wp_head(); 
			do_action('page_builder_header_code'); 
		?>
	</head>


	<body <?php body_class('londonparkour ' . $body_classes ); ?>>

		<header>

			<nav class="h-16 bg-night flex">

				<?php include( __DIR__.'/src/components/main-menu-logo/main-menu-logo.php' );  ?>
				<?php include( __DIR__.'/src/components/main-menu/main-menu.php' );  ?>
				<?php include( __DIR__.'/src/components/main-menu-right/main-menu-right.php' );  ?>

			</nav>

		</header>