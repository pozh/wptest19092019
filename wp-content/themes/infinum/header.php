<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>

	<?php
	$ico_baseuri = get_template_directory_uri() . '/assets/images/icons/';
	?>

	<div class="container">
		<div class="navbar">
			<h1 class="navbar__logo"><a
						href="<?= esc_url( home_url( '/' ) ); ?>"><span><?php bloginfo( 'name' ); ?></span></a></h1>
			<div class="navbar__nav">
				<?php wp_nav_menu( array( 'menu' => 'Main', 'container' => false, ) ); ?>
			</div>
			<div class="navbar__actions">
				<ul>
					<li><a class="btn btn-primary text-uppercase" href=""><img src="<?php echo $ico_baseuri . 'ic-apple.svg' ?>" alt=""> Get for iOS</a></li>
					<li><a class="btn btn-secondary" href=""><img src="<?php echo $ico_baseuri . 'ic-unicorn.svg' ?>" alt=""> Unicorn owners</a></li>
				</ul>
			</div>
		</div>
	</div>
</header>
