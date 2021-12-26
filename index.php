<!-- =============================================== -->
<!-- =                                             = -->
<!-- =                King	                   = -->
<!-- =                                             = -->
<!-- =          http://asplit.com/	               = -->
<!-- =============================================== -->
<?php 
include 'include/config.php'; 
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <!-- PopMyAds.com Popunder Code for kqw.aqworlds.org -->
     
    <script type="text/javascript">
    var pmauid = '25513';
    var pmawid = '26121';
    var fq = '0';
    </script>
    <script type="text/javascript" src="https://cdn.popmyads.com/pma.js"></script>
     
    <!-- PopMyAds.com Popunder Code End -->
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>KingQuestWorlds l Home</title>
	<link rel="shortcut icon" href="images/kqw.ico" type="image/x-icon">
	<meta name="description" content="">
	<meta name="author" content=" Made by King">
    <meta http-equiv="X-UA-Compatible" content="IE=9" />


	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- PT Sans -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	<!-- Crete Roung -->
	<link href='http://fonts.googleapis.com/css?family=Crete+Round&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	<!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/layout.css">
	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
	<script type="text/javascript" src="js/validate.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
	<script type="text/javascript">
		$(document).ready(function() {
				$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
		});
	</script>

</head>
<body>


	<header>			
		<nav>
			<div class='container'>
				<div class='five columns logo'>
					<a href='#'>AQWorlds.org</a>
				</div>

				<div class='eleven columns'>
					<ul class='mainMenu'>
						<li><a href='#' title='Home'>Home</a></li>
						<li><a href='register/' title='Signup'>registre</a></li>
						<li><a href='Rank.php' title='Ranking'>Ranking</a></li>
						<li><a href='Maps.php' title='Maps'>Maps</a></li>
						<li><a href='#' title='Staff'>Team</a></li>
						<li><a href='store.php' title='Store'>Shop</a></li>
						<li><a href='#' title='Contact'>Contact</a></li>
						<li><a class="navLI"> Players Online <?php echo $mysql->query('SELECT sum(Count) as ser FROM meh_servers')->fetch_object()->ser; ?></a></li>
					</ul>
				</div>
			</div>
		</nav>

		<div class='container'>
			<div class='slogan'>
				<div class='ten columns'>
					<h1>           </h1>
					<h2>	       </h2>
				</div>

				<div class='six columns'>
					<h4>Welcome To KingQuestWorlds!</h4>
					<p>Virtual MMORPG AQWorlds private server, we only want the entreterimiento of our players.</p>
					<a href='Play.php' class='button medium green'>Play Now!</a>
					<ul class="sky-mega-menu sky-mega-menu-anim-scale sky-mega-menu-response-to-icons" style="z-index:0 !important;">                
                              
                        <form id="search-form" action="/character.php">          
                          <div class="input">
                            <input id="query" name="id" value="" type="text" placeholder="Username" >
                          </div>         
                        </form>
                    </ul>
				</div>
			</div>
		</div>		
	</header>
 
	<div class='clear'></div>
	<div class='clear'></div>
	<center>
    <br>
    <a href="/store.php"><img src="images/pay/banner-promotion-founderKQW.png"></a>
    <br/>
    </center>	
	<div class='container'>
		<div class='one-third column'>
			<img src='images/misc/about_us.png'>
			<h3>About Us</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
		</div>


		<div class='one-third column'>
			<img src='images/misc/team.png'>
			<h3>The Team</h3>
			<p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur.</p>
		</div>



		<div class='one-third column'>
			<img src='images/misc/goals.png'>
			<h3>Goals</h3>
			<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		
	</div>


	


 <center>
 <iframe data-aa='252347' src='https://ad.a-ads.com/252347?size=728x90' scrolling='no' style='width:728px; height:90px; border:0px; padding:0;overflow:hidden' allowtransparency='true' frameborder='0'></iframe>
	<div class='clear'></div>
	<footer>
		<div>
			<div class='eight columns'>
				<h5>KingQuestWorlds © 2009/2016 - ASPLIT</h5>
				<p>AQWorlds Private Server Community.</p>
			</div>
		</div>
	</footer>
	</center>
	<script type="text/javascript">	
		var form = $('form');
	
		$(document).ready(function(){
		    form.validate({
		    	ignore: "",
	            rules: {
	            	'message': {
	                    required: true,	                 
	                },
	            	'name': {
	                    required: true,	                 
	                },
	                'mail': {
	                    required: true,
	                    email: true
	                }			                
	            },
	            errorPlacement: function(error, element){}

		    });
		  });     
	</script>


	<script type="text/javascript">
		var toper = $('a#top');


		$(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                toper.fadeIn( 200 );
            } else {
                toper.fadeOut( 200 );
            }
        });

         toper.click(function(){
        	$('html, body').animate({scrollTop:0}, 500);	        	
        	return false;
    	}); 
	</script>


</body>
</html>