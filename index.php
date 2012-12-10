<?php
	ini_set('zlib.output_compression', 'on');
	// $Id$
	define( 'PUBWICH', 1 );
	require( dirname(__FILE__) . '/lib/Pubwich.php' );
	Pubwich::init();
	Pubwich::renderTemplate();
