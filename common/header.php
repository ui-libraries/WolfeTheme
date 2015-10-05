<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

		<?php
		queue_css_file(array(
			'bootstrap.min',
			'bootstrap-theme.min',
			'main',
			));
		echo head_css();
		?>
		
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>

		<?php 
		queue_js_file(array(
			'vendor/modernizr-2.8.3.min',
			'vendor/bootstrap.min',
			'plugins',
			'main',
			));
		echo head_js();
		?>
    </head>
	<body>