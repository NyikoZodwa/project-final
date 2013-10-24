<?php
include( 'classes/cart.class.php');

session_start();
if(!isset($_SESSION['comGuestCart']))
{
	$_SESSION['comGuestCart']= array();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WSU :: Welcome</title>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/custom.css"/>

</head>

<body>
		 
		<?php require_once('includes/mainNavigation.php');?>
    	
        <div class="hero-unit img-polaroid">
                <div id="myCarousel" class="carousel slide img-polaroid img-rounded fade in">
    <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" ></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Carousel items -->
    <div class="carousel-inner fade in">
    <div class="active item img-polaroid img-rounded"><img src="images/BlackBerry-Z10-Q10-mobiles.jpg" width="1000"/></div>
    <div class="item img-polaroid img-rounded"><img src="images/BlackBerry-Z10-Q10-mobiles.jpg" width="1000"/></div>
    <div class="item img-polaroid img-rounded"><img src="images/BlackBerry-Z10-Q10-mobiles.jpg"  width="1000"/></div>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
                
                
    </div>
   
    <div class="container">
  
    </div>
    
      
   
  

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
	$('.carousel').carousel({
  			interval: 5500
	})
</script>
</body>

</html>