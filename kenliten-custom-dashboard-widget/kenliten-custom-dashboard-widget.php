<?php

/*
 * Plugin Name:		Kenliten Custom Dashboard Widget
 * Version:			1.0.0
 * Description:		Get an inspirational quote everyday.
 * Author:			Kenliten
 * Author URI:		https://kenliten.github.io
 * Plugin URI:		https://github.com/xonawebsite/wp-plugins
 */

function register_kenliten_todays_quote()
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://programming-quotesapi.vercel.app/api/random');

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$output = json_decode(curl_exec($ch));
	curl_close($ch);
	?>
	<div style="padding: 80px; text-align: center;">
		<q style="font-style: italic;"><?= $output->quote ?></q>
		<p style="color: cornflowerblue;">- <?= $output->author ?></p>
	</div>
	<?php
}

function setup_kenliten_widgets()
{
	wp_add_dashboard_widget( 'kenliten_todays_quote', 'Today\'s Quote', 'register_kenliten_todays_quote' );
}

add_action( 'wp_dashboard_setup', 'setup_kenliten_widgets' );
