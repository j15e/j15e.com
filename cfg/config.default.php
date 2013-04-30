<?php
	// Rename this file to config.php
	defined('PUBWICH') or die('No direct access allowed.');

	error_reporting(E_ALL ^ E_NOTICE); // uncomment this line in development environment
	// error_reporting(0); // uncomment this line in production environment (prevent errors from showing up)

	// Localisation
	date_default_timezone_set( 'America/Montreal' );
	define('PUBWICH_LANG', 'fr_CA'); // leave to '' to keep Pubwich in english
	setlocale( LC_ALL, 'fr_CA.UTF8' ); // for date methods

	// General site informations
	define('PUBWICH_URL', '/');
	define('PUBWICH_THEME', 'default');
	define('PUBWICH_TITLE', 'Jean-Philippe Doyle (j15e)');

	// Logging configuration (you should not have to edit this)
	define('PUBWICH_LOGLEVEL', 0);
	define('PUBWICH_LOGTOFILE', false);

	// Pubwich services configuration
	Pubwich::setServices(
		array(
			array(
				array( 'Text', 'intro', array(
						'title' => 'À propos',
						'text' => '<p>Bonjour! Je suis Jean-Philippe Doyle, chargé de projet et développeur web. J\'ai développé depuis plusieurs années une expertise pour le développement web à travers ma participation à des projets et des entreprises dans ce domaine. Je travaille présentement avec ma superbe équipe chez <a href="http://www.hooktstudios.com" target="_blank">Hookt Studios</a>, dans la magnifique basse ville de Québec. Au plaisir d\'échanger avec vous!</p>
						',
					)
				),

				array( 'Flickr', 'photos', array( 
						'method' => 'FlickrUser',
						'key' => '',
						'userid' => '', // use http://www.idgettr.com to find it
						'username' => 'j15e',
						'total' => 12,
						'title' => 'Flick<em>r</em>',
						'description' => 'dernières photos',
						'row' => 4,
					)
				),				
				
				array( 'Text', 'links3', array(
						'title' => 'Sur mon iPhone',
						'description'=>'mes app favorites',
						'text' => '
<p>
	<a target="_blank" href="http://itunes.apple.com/us/app/runkeeper-pro/id300235330?mt=8">RunKeeper Pro</a><br>
	<a target="_blank" href="http://itunes.apple.com/ca/app/ing-direct-canada/id357596184?mt=8">ING direct</a><br>
	<a target="_blank" href="http://itunes.apple.com/ca/app/rtc-mobile/id307982071?mt=8">RTC Mobile</a><br>
	<a target="_blank" href="http://itunes.apple.com/fr/app/wunderlist/id406644151?mt=8">Wunderlist</a><br>
  </p>
'					)
				),						
				
				array( 'Text', 'links5', array(
						'title' => 'Sur mon iPad',
						'description'=>'mes app favorites',
						'text' => '
<p>
	<a target="_blank" href="http://itunes.apple.com/us/app/im-pro/id296246130?mt=8">IM+ Pro</a><br>
	<a target="_blank" href="http://itunes.apple.com/ca/app/tou-tv/id411538137?mt=8">Tou.tv</a><br>
	<a target="_blank" href="http://itunes.apple.com/ca/app/cut-the-rope/id380293530?mt=8">Cut the Rope</a><br>
	Safari :) <br>
  </p>
'					)
				),				
				/*
array( 'Text', 'links4', array(
						'title' => 'Des projets',
						'description' => 'survol de mes projets',
						'text' => 
				'
				
<h3>2011</h3>	
<a target="_blank" href="http://www.webaquebec.org/ironweb/">Iron Web au Web à Québec</a>
<h3>2010</h3>
<a target="_blank" href="http://www.tiragephoto.ma">TiragePhoto.ma</a>, 
<a target="_blank" href="http://mo.hooktstudios.com">Movember Hookt</a>
<h3>2009</h3>
  <a target="_blank" href="http://www.hooktstudios.com">Hookt Studios</a>,
  <a target="_blank" href="http://encheresquebec.webiscake.com">Projet web de fin de DEC</a>,
  <a target="_blank" href="http://www.flbeauport.com">Flbeauport.com</a>,
<h3>2008</h3>
  <a target="_blank" href="http://www.gogarneau.com">GoGarneau</a>,
  <a target="_blank" href="http://www.grainwiz.com">Grainwiz</a>,
  <a target="_blank" href="http://www.themetropolitain.ca">The Metropolitain</a>,
  <a target="_blank" href="http://www.jeudunet.com">JeuDuNet</a>,
  Fungratuit,
  Agama Yoga Québec
<h3>2007</h3>
    <a target="_blank" href="http://www.pascalepicard.com">Pascale Picard Band</a>,
    <a target="_blank" href="http://www.garneautravail.com">Garneau Travail Inc.</a>,
    <a target="_blank" href="http://www.constructionbdm.com">Construction  BDM inc. </a>,
	<a target="_blank" href="http://www.indea.ca">INdéa inc. </a>,
    <a target="_blank" href="http://www.od2007.org">OD 2007</a>  
  <h3>2006</h3>
    <a target="_blank" href="http://www.defiez.com">Defiez.com</a>
    <a target="_blank" href="http://www.christophepratiffi.com"> Christophe 
      Pratiffi : Guitare Classique</a>
    <a target="_blank" href="http://www.pbr.creationkjp.com/HTML/">Pabst Blue
      Ribbon</a>,
    <a target="_blank" href="http://www.heritage.creationkjp.com">Projet Héritage</a>,
    Eberleen 3,
      Monster Up,
      Pascal Pierre Paillé
  
  <h3>2005</h3>
	District Seven Distribution,
    Service d\'entretient P.A.
  
  <h3>2004</h3>
  MaxiGames.net
  Fruits et Légumes Beauport
  
  <h3>2003</h3> 
    <a target="_blank" href="http://www.traiteurlionelriverin.com">Traiteur Lionel Riverin</a>,
    <a target="_blank" href="http://www.webfolio3.devdoyle.com">WebFolio</a> (Création KJP SENC)
  ')),
*/
				
			),
			array(
				array( 'Twitter', 'etats', array(
						'method' => 'TwitterUser',
						'username' => 'j15e',
						'oauth' => array(
							'app_consumer_key'=>'',
							'app_consumer_secret'=>'',
							'user_access_token'=>'',
							'user_access_token_secret'=>'',
						),
						'total' => 10,
						'title' => 'Twitter',
						'description' => 'derniers états'
					)
				),
				array( 'Lastfm', 'tracks', array(
						'method' => 'LastFMRecentTracks',
						'key' => '',
						'username' => 'j15e',
						'total' => 10,
						'size' => 64,
						'title' => 'Last.fm',
						'description' => 'derniers morceaux écoutés',
					)
				),
			),
			array(
				array( 'Text', 'links1', array(
						'title' => 'Ressources favorites',
						'description' => '<br/>mes recommendations',
						'text' => '
<h3>Services pour le web</h3>
<p>
	<a href="http://aws.amazon.com" target="_blank">Amazon WS</a> services cloud <br/>
	<a href="http://www.rackspacecloud.com" target="_blank">RackSpace</a> services cloud<br/>
	<a href="http://www.hostgator.net" target="_blank">HostGator</a> hébergement mutualisé<br/>
	<a href="http://www.1and1.com" target="_blank">1and1</a> noms de domaine<br/>
	<a href="http://www.netfirms.ca" target="_blank">NetFirms</a> noms de domaine .ca<br/>
	<a href="http://wiki.nginx.org/" target="_blank">Ngnix</a> serveur web<br/>
</p>
<h3>Magasins en ligne</h3>
<p>
	<a href="http://www.ncix.com" target="_blank">NCIX</a> matériel informatique<br/>
	<a href="http://www.cafe-vrac.com/" target="_blank">Café Vrac</a> café<br/>
	<a href="http://www.espressotec.com" target="_blank">EspressoTec</a> machines espresso<br/>
</p>
'
	)),				
				array( 'Text', 'links2', array(
						'title' => 'Développement web',
						'description' => '<br/>quelques-uns de mes sites et logiciels favoris',
						'text' => '


  <h4>Accessibilité</h4>
	<p>
  		<a href="http://yaccessibilityblog.com/" target="_blank">Yahoo Accessibility</a><br/>
		<a href="http://wave.webaim.org/" target="_blank">WebAim Wave</a><br/>
		<a href="https://addons.mozilla.org/en-US/firefox/addon/juicy-studio-accessibility-too/" target="_blank">Juicy Studio Accessibility Toolbar</a><br/>
		<a href="https://addons.mozilla.org/en-US/firefox/addon/accessibility-evaluation-toolb/ target="_blank"">Accessibility Evaluation Toolbar</a>
	</p>
  <h4>OS X</h4>
  <p>
	<a href="https://github.com/mxcl/homebrew" target="_blank">Brew</a> installer ce qu\'il faut
  	<a href="http://macromates.com/" target="_blank">TextMate</a> Éditeur de code<br/>
  	<a href="http://www.adiumx.com" target="_blank">Adium</a> Messagerie Instantanée<br/>
    <a href="http://www.panic.com/transmit/" target="_blank">Transmit</a> Client FTP<br/>
    <a href="http://cyberduck.ch/" target="_blank">Cyberduck</a> Client FTP/Cloud files<br/>
    <a target="_blank" href="http://www.colloquy.info">Colloquy</a> Client IRC</p>
  	<a href="http://www.virtualbox.org/" target="_blank">Virtual Box</a> Windows...<br/>
</p>
<h4>Blogs et articles</h4>
<p>
<a target="_blank" href="http://news.ycombinator.com/news">Hacker News</a><br/>
<a href="http://www.joelonsoftware.com" target="_blank">Joel on software</a><br/>
<a href="http://www.alistapart.com" target="_blank">A List Apart</a><br/>
<a href="http://www.smashingmagazine.com" target="_blank">Smashing Magazine</a>
</p>
<h4>Ruby</h4>
<p>
	<a href="https://github.com/capistrano/capistrano" target="_blank">Capistrano</a> cap deploy<br/>
	<a href="http://nokogiri.org/" target="_blank">Nokogiri</a> décode moi ça<br/>
	<a target="_blank" href="http://sass-lang.com/">SASS</a> CSS plaisant<br/>
	<a href="https://github.com/sporkrb/spork" target="_blank">Spork</a> serveur de tests<br/>
	<a href="https://github.com/guard/guard-spork target="_blank">Guard::spork</a> reload tests
</p>
<h4>PHP</h4>
<p>
	<a href="http://www.cakephp.org" target="_blank">CakePHP</a><br/>
	<a href="http://www.php.net/manual/en/install.fpm.php" target="_blank">PHP-FPM</a> fork process manager<br/>
	<a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> templates<br/>
	<a target="_blank" href="http://www.imagemagick.org">ImageMagick</a>
</p>
<h4>Firefox/Mozilla</h4>
<p>
	<a target="_blank" href="https://developer.mozilla.org/En/DOM">Mozilla DOM API</a><br/>
  <a href="https://addons.mozilla.org/fr/firefox/addon/1843" target="_blank">Firebug</a><br/>
  <a href="https://addons.mozilla.org/fr/firefox/addon/60" target="_blank">Web Developper</a></p>
<h4>JavaScript</h4>
  <p> <a href="http://www.jquery.com" target="_blank">jQuery</a><a href="https://addons.mozilla.org/fr/firefox/addon/60" target="_blank"></a><br/>
    <a target="_blank" href="http://www.json.org">JSON</a>
</p>
'

					)
				),
			),
		)
	);

	// Caching system
	define( 'CACHE_LOCATION', dirname(__FILE__) . '/../cache/' );
	define( 'CACHE_LIMIT', 20 * 60 );
