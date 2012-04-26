<!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="" class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html lang="" class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html lang="" class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html lang="" class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="" class="newbie no-js"><!--<![endif]-->
<head>
  <meta charset="utf-8">
  
  
  <script type="text/javascript" src="js/modernizr.js"></script>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-28492745-1']);
    _gaq.push(['_trackPageview']);

    Modernizr.load([
      { load: ['//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'],
    	  complete: function(){ if(!window.jQuery){ Modernizr.load('js/jquery.js'); } }
    	},
    	{ test: window.JSON, nope: 'js/json2.js' },
    	<?php /* plugins.js & common.js fordevelopment */ ?>
    	<?php /* ?>
    	{ load: 'js/plugins.js' },
    	{ load: 'js/common.js' },
    	<?php */ ?>
    	<?php /* concatenate and optimize seperate script files for deployment using google closure compiler (compiler.jar) in js folder */ ?>
    	{ load : 'js/theme.js' },
      { load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js' }
    ]);
  </script>
	  	<link rel="stylesheet" href="css/main.css" />

		<title>Instagram + OSM</title>
		<meta name="description" content="" />
	  <meta name="keywords" content="" />
		<meta name="robots" content="" />
</head>

<body>
<div id="fb-root"></div>

<div id="container">
	<div id="header">
		<h1>
		  <span class="line"></span>
		  <span class="text">instagram + osm</span>
		</h1>
		<div class="right">
		  <div class="line"></div>
		  <div id="nav">
		    <span class="rough">
		      <span class="view">View</span>
          <span class="current">tulsa</span>
		    </span>
		    <span class="hashtag">
		      <span class="text">Hashtag</span>
		      <span class="icon"></span>
          <div id="hashSelect"></div>
		    </span>
		  </div>
	  </div>
	</div>

<!-- <img src="images/orangearrow.png" /> -->

	<div id="map"></div><!-- Map gets inserted here -->
	
		
	<div id="footer-wrap">
  	<div id="subfooter">
  	  <div id="carousel">
  	    <div id="carousel-bg">
          <div id="bg-inner"></div>
  	    </div>
  	    <div id="carousel-wrap">
    	    <div class="nav next">
    	      <div class="line"></div>
    	      <div class="icon"></div>
    	    </div>
    	    <div class="nav prev">
    	      <div class="line"></div>
    	      <div class="icon"></div>
    	    </div>
          <div id="carousel-inner">
            <div id="carousel-images"></div>
          </div>
  	    </div>
  	  </div>
    	<div id="carousel-logo"></div>
  	</div>
	  
	  <div id="footer">
	    <div class="sm"></div>
	    <div class="links">
	      <a href="http://benjrallen.com" target="_blank" title="My Portfolio">portfolio</a>
	      <a href="#" id="play-along" title="Play">start over</a>
	    </div>
	    <div class="copy"></div>
	  </div>
	</div><!-- Footer -->
	
</div>

<div id="hashtag-json"><?php include 'cache/hashtags.json'; ?></div>
<div id="modal-content">
  <article class="insta-wrap modal-wrap">
    <h2>hi.  this is an <br />instagram + open street maps mashup</h2>
    <h3>it was created for a forward thinking company and their version will be launched soon</h3>
    <div class="content">
      <strong>look around you:</strong>
      <p>a set of hashtags is waiting for your selection up in the top right.</p>
    </div>
    <button>continue</button>
  </article>
</div>

</body>
</html>