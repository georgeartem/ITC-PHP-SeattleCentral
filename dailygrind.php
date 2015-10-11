<?php 

$dayofweek = date(w);

switch($dayofweek) {
	case 0:
		$name = 'De Brahe';
		$image = 'images/debrahe.jpg';
		$imagealt = 'Tycho De Brahe';
		$paragraph = '<i>Sunday is for Tycho De Brahe: Astronomer, Observationalist</i>';
		$color = 'red';
		break;
	case 1:
		$name = 'Faraday';
		$image = 'images/faraday.jpg'	;
		$imagealt = 'Michael Faraday'	;
		$paragraph ='<i>Monday is for Michael Faraday: Chemist, Physicist, Electrician</i>'	;
		$color = 'orange';
		break;
	case 2:
		$name =	'Kepler';
		$image = 'images/kepler.jpg'	;
		$imagealt =	 'Johannes Kepler' ;
		$paragraph = '<i>Tuesday is for Johannes Kepler: Astronomer </i>'	;
		$color = 'yellow';
		break;
	case 3:
		$name ='Einstein';
		$image =	'images/einstein.jpg';
		$imagealt =	'Albert Einstein';
		$paragraph =	'<i>Wednesday is for Albert Einstein: Physicist, General Relativist</i>';
		$color = 'green';
		break;
	case 4:
		$name = 'Newton';
		$image = 'images/newton.jpg';
		$imagealt = 'Isaac Newton';
		$paragraph = '<i>Thursday is for Sir Isaac Newton: Physicist, Philosopher, Alchemist</i>' ;
		$color = 'blue';
		break;
	case 5:
		$name =	'Maxwell';
		$image =	'images/maxwell.png';
		$imagealt =	'James Maxwell';
		$paragraph =	'<i>Friday is for James Maxwell: Mathematician, Electro-magnetist</i>';
		$color = 'indigo';
		break;
	case 6:
		$name =	'Schrodinger';
		$image =	'images/schrodinger.jpg';
		$imagealt =	'Erwin Schrodinger';
		$paragraph =	'<i>Saturday is for Schrodinger: Physicist, Uncertain</i>';
		$color = 'violet';
		break;	
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>PreviousK | Daily Grind by George Artem</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="George Artem: a CV of Poetry & Projects" />
    <meta name="author" content="George Artem">
    <meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/icon" href="images/kicon.gif" />
	
	<link href="style.css" rel="stylesheet" />
	<link href="css/bootstrap.min.css" rel="stylesheet" /> 
<link href="css/font-awesome.min.css" rel="stylesheet" />

 <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css' />    
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	
</head>
<body>
<div id="navigation" class="navbar navbar-fixed-top">
		<div class="navbar-inner ">
        	<div class="container no-padding">
					<a class="show-menu" data-toggle="collapse" data-target=".nav-collapse">
						<span class="show-menu-bar"></span>
					</a>

					<div id="logo"><a class="external" href="index.html"></a></div>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li class="menu-1"><a class="colapse-menu1" href="../index.html#home">Home</a></li>
							<li class="menu-6"><a class="colapse-menu1" href="../projects/index.html">Projects</a></li>
							<li class="menu-6"><a class="colapse-menu1" href="../index.html#contact-parallax">Contact</a></li>
							</ul>
						</div>
					</div>
			</div>
	</div>
    <!--/Navigation -->
<section id="home">
 
			<div class="container">
        
                	<div class="section-title" style= "color: <?php echo $color?>">
				<h1>DAILY GRIND</h1>      
 <span class="border"></span>				
	
			<h2><?php echo $name; ?> </h2>

          <img src="<?php echo $image ?>" alt="<?php echo $imagealt ?>"/>
		  <br/>
		  <p><?php echo $paragraph ?></p>
                   <p>...<p> 
                    </div>
                
               
            
        	</div>
            

	</section>	


	    <!-- Footer -->
    <footer>
		<div class="container no-padding">
        	
            <a id="back-top"><div id="menu_top"><div id="menu_top_inside"></div></div></a>
            
            <ul class="socials-icons">
                <li><a href="https://www.facebook.com/metacampusllp"><img src="images/facebook.png" alt="" /></a></li>
                <li><a href="https://twitter.com/GeorgeArtem"><img src="images/twitter.png" alt="" /></a></li>
                <li><a href="https://plus.google.com/116311611803861697621/posts"><img src="images/google.png" alt="" /></a></li>
            </ul> 
            
			<p class="copyright">2015 &copy; George Artem. All rights reserved.</p>
            
		</div>
	</footer>
	<!--/Footer -->
</body>
</html>