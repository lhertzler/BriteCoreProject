 <!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <title>BriteCore UI Project</title>
  <meta name="author" content="Luke Hertzler">
  <meta name="description" content="BriteCore Project">
  <meta name="keywords" content="britecore, ui">
  <link rel="stylesheet" href="foundation-6/css/foundation.css" type="text/css">
  <link rel="stylesheet" href="fonts/pe-icon-7-stroke.css" type="text/css">
  <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>
	  <div id="nano-bar" class="nano"></div>
	  <section class="top-menu">
		  <div class="extra-nav">
			  <i class="pe-7s-more"></i>
		  </div>
		  <div class="search">
				<i class="pe-7s-search"></i>
		  </div>
		  <div class="avatar">
			  <span class="name">Luke Hertzler</span>
			  <i class="pe-7s-angle-down"></i>
			  <span class="img">
			  	<img src="http://lukehertzler.com/BriteCore/images/avatar.png" alt="Luke">
			  </span>
		  </div>
	  </section>
	  
	  <section class="left-menu">
		  <i class="pe-7s-home"></i>
		  <i class="pe-7s-note2"></i>
		  <i class="pe-7s-cash"></i>
		  <i class="pe-7s-id"></i>
		  <i class="pe-7s-tools"></i>
	  </section>
	  
	  <section class="main">
		  <section class="overview">
			  <div class="row">
				  <h1 class="title">OVERVIEW</h1>
				  <div class="small-12 medium-3 columns">
					  <div class="card">
						  <div class="stats">
							  <h2>5</h2>
							  <p><i class="pe-7s-culture"></i><br>
							  AGENCIES</p>
						  </div>
					  </div>
				  </div>
				  <div class="small-12 medium-3 columns">
					  <div class="card">
						  <div class="stats">
							  <h2>14</h2>
							  <p><i class="pe-7s-map-2"></i><br>
							  ACTIVE STATES</p>
						  </div>
					  </div>
				  </div>
				  <div class="small-12 medium-3 columns">
					  <div class="card">
						  <div class="stats">
							  <h2>36</h2>
							  <p><i class="pe-7s-users"></i><br>
							  AGENTS</p>
						  </div>
					  </div>
				  </div>
				  <div class="small-12 medium-3 columns">
					  <div class="card">
						  <div class="stats">
							  <h2>1</h2>
							  <p><i class="pe-7s-attention"></i><br>
							  EXPIRED LICENSE</p>
						  </div>
					  </div>
				  </div>
			  </div>
		  </section>
		  
		  <section class="abc">
			  <div class="row">
				  <div class="letters">
				  <?php $chars = range('A', 'Z');  
						foreach ($chars as $char)   
							{  
						    echo '<span>' . $char . '</span>';  
							}
					?>
				  </div>
			  </div>
		  </section>
		  
		  <section class="agencies">
			  <section class="a-to-z">
				  <div class="row">
				  	<div class="small-12 columns">
					  	<div class="divider">
					  		<h2>A</h2>
					  		<span></span>
					  	</div>
				  	</div>
				  	<?php $agency = '<div class="small-12 medium-3 columns">
					  	<div class="card">
						  	<div class="options"><i class="pe-7s-more"></i></div>
						  	<h2 class="name">An Agency Name</h2>
						  	<div class="item">
						  		<i class="pe-7s-map-marker"></i><p>1234 Birch Road</p><p class="town">Scotts Valley, CA</p><p class="zip">95060</p>
						  	</div>
						  	<div class="item">
						  		<i class="pe-7s-call"></i><p>1 (831) 456-2639</p>
						  	</div>
						  	<div class="item">
						  		<i class="pe-7s-mail"></i><p>agencyname@anagencyname.com</p>
						  	</div>
						  	<div class="item">
						  		<i class="pe-7s-power"></i><p>2 active states</p>
						  	</div>
						  	<div class="item">
						  		<i class="pe-7s-users"></i><p>3 agents</p>
						  	</div>
						  	<a class="view-agency">View Agency <i class="pe-7s-angle-right"></i></a>
					  	</div>
					  	</div>';
					  	
					  	echo str_repeat($agency, 4);
					  	?>
					  	
				  </div>
			  </section>
			  
			  <section class="a-to-z">
				  <div class="row">
				  	<div class="small-12 columns">
					  	<div class="divider">
					  		<h2>B</h2>
					  		<span></span>
					  	</div>
				  	</div>
				  	<?php $agency = '<div class="small-12 medium-3 columns">
					  	<div class="card">
						  	<div class="options"><i class="pe-7s-more"></i></div>
						  	<h2 class="name">B Agency Name</h2>
						  	<div class="item">
						  		<i class="pe-7s-map-marker"></i><p>1234 Birch Road</p><p class="town">Scotts Valley, CA</p><p class="zip">95060</p>
						  	</div>
						  	<div class="item">
						  		<i class="pe-7s-call"></i><p>1 (831) 456-2639</p>
						  	</div>
						  	<div class="item">
						  		<i class="pe-7s-mail"></i><p>agencyname@anagencyname.com</p>
						  	</div>
						  	<div class="item">
						  		<i class="pe-7s-power"></i><p>2 active states</p>
						  	</div>
						  	<div class="item">
						  		<i class="pe-7s-users"></i><p>3 agents</p>
						  	</div>
						  	<a class="view-agency">View Agency <i class="pe-7s-angle-right"></i></a>
					  	</div>
					  	</div>';
					  	
					  	echo str_repeat($agency, 3);
					  	?>
					  	
				  </div>
			  </section>
			  
		  </section>
	  </section>
	  
	  
	  
	  
	  
	  
	<script src="foundation-6/js/vendor/jquery.js"></script>
    <script src="foundation-6/js/vendor/what-input.js"></script>
    <script src="foundation-6/js/vendor/foundation.min.js"></script>
    <script src="js/nanobar.js"></script>
    <script>
	    var options = {
		  classname: 'nano',
		  id: 'nano-bar',
		  target: document.getElementById('nanoID')
		};
	    var nanobar = new Nanobar( options );
	    nanobar.go(100);
	</script>
    <script>
      $(document).foundation();
    </script>
  
  <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.5.3/modernizr.min.js" type="text/javascript"></script>-->
  </body>
</html>
