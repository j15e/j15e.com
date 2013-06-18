<?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>
<!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title><?php echo PUBWICH_TITLE?></title>
<style type="text/css">
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,font,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td{margin:0;padding:0;border:0;outline:0;font-size:100%;vertical-align:baseline;background:transparent}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}:focus{outline:0}ins{text-decoration:none}del{text-decoration:line-through}table{border-collapse:collapse;border-spacing:0}@charset "UTF-8";.clearfix:after{content:".";display:block;height:0;clear:both;visibility:hidden}.clearfix{display:inline-block}/*\*/* html
.clearfix{height:1%}.clearfix{display:block}/**/hr{display:none}a
*{cursor:pointer}html{font-size:62.5%}body{background:#B7B7B7;color:#000;font-size:110%;line-height:1.4;font-family:'Segoe UI',Helvetica,Arial,"Lucida Grande","Liberation Sans",Tahoma,Verdana,sans-serif;padding:0.6em 0 10px}#wrap{font-size:110%;width:960px;margin:0
auto}#skip{position:absolute;left: -999px}a{color:#444;text-decoration:none;border-bottom:1px dotted}a:hover{color:#62593d;border-color:#62593d}acronym,abbr{cursor:help}h1{font-size:320%;font-weight:bold;text-align:left;padding-top:0.6em;padding-bottom:0.4em;width:100%;color:#9e9473;letter-spacing: -0.02em}h1
a{border:none;color:white}h1 a:hover{color:white}.erreur{background:#fff;opacity:0.2;padding:8px
10px}#footer{text-align:center;padding:1.3em 0 1.9em}#footer
a.pubwich{padding:2px
1px 2px 2px;border:none}.col1{width:337px;margin-right:20px;float:left}.col2{width:358px;margin-right:20px;float:left}.col3{width:225px;float:left}.boite{margin:0
0 18px}.boite.nodata{opacity:0.5}.boite
h2{font-size:130%;padding:8px
10px 8px;color:white;background:#5AC1F4;line-height:1;margin-bottom:3px;line-height:16px}.boite h2
span{font-size:80%;font-weight:normal}.boite h2
a{text-decoration:none;border:none;color:white;text-decoration:none;border-bottom:1px dotted}.boite ul
li{margin-bottom:5px}.boite ul
li.nodata{opacity:0.5}.boite .boite-inner{padding:10px;background:#fdfdfd}.boite.no-title
h2{display:none}.text .boite-inner{padding-bottom:1px}.text .boite-inner
p{margin:0
0 1em}.rss li, .atom
li{padding:2px
5px 2px 5px}.flickr
h2{background:white;color:#444}.flickr h2
a{color:#5AC1F4}.flickr h2
em{color:#FF0084;font-style:normal}.flickr ul
li{float:left;padding-right:5px;background:none}.flickr ul
li.derniere{padding-right:0}.flickr ul li
a{border:none}.flickr ul li
img{display:block}.readitlater li
p{display:block;margin-left:95px}.readitlater li
span.date{display:block;float:left;width:85px;margin-right:10px}.readitlater li.state0
p{font-style:italic}.twitter
h2{background:white;color:#444}.twitter h2
a{color:#5AC1F4}.twitter
li{padding:3px
10px 4px;margin:0
0 5px}.twitter li span.image,
.twitter li
span.date{display:block;float:left;width:85px;margin-right:10px}.twitter li
span.image{width:48px}.twitter li span.image a,
.twitter li span.date
a{text-decoration:none;border:none}.twitter li
p{display:block;margin-left:95px}.twitter li
em.from{display:none}.twittersearch li
p{margin-left:65px}.twittersearch li
p.date{margin-top:3px;color:rgba(0,0,0,0.4)}.twittersearch li p.date
a{color:rgba(0,0,0,0.4);border-bottom:none}.wtf{margin-bottom:0}.wtf
div{padding:5px}.wtf
p{margin:0
0 1em}.credits
p{padding:5px;margin:0
0 0.3em}.credits
a.pubwich{}.credits a.pubwich
strong{}#intro p{margin-bottom: 12px}
</style>
<?php echo Pubwich::getHeader() ?>
	</head>
	<body>
		<div id="wrap">
			<h1><a href="/" rel="me"><?php echo PUBWICH_TITLE?></a></h1>
			<hr/>
			<div class="clearfix">

<?php echo Pubwich::getLoop()?>

			</div>
			<div id="footer">
				<div class="footer-inner">
					<hr/>
					<?php echo sprintf( 'Propulsé fièrement par  %s.', '<a class="pubwich" href="https://github.com/remiprev/pubwich">Pubwich</a>'  )?>
				</div>
			</div>
		</div>
<?php echo Pubwich::getFooter() ?>
	</body>
</html>