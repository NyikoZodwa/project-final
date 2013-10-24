
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
    <!-- Carousel items 
    <div class="carousel-inner fade in">
    <div class="active item img-polaroid img-rounded"></div>
    <div class="item img-polaroid img-rounded"><img src="images/BlackBerry-Z10-Q10-mobiles.jpg" width="1000"/></div>
    <div class="item img-polaroid img-rounded"><img src="images/BlackBerry-Z10-Q10-mobiles.jpg"  width="1000"/></div>-->
    </div>
	
	<?php echo $date=date('H:i ,jS F Y');?></p>
						</div>
						<div class="entry">
						  <p>
						    <?php

$search=$_POST['search'];

 
 $msg = "Search Result";
if (!$search ) {
echo 'You have not entered search details. Please go back and try again.';

}
else
{
if (!get_magic_quotes_gpc()){
$search = addslashes($search);
 
}
 @ $db = new mysqli('localhost', 'root','','zodwaberry');

  if (mysqli_connect_errno()) {
     echo "Error: Could not connect to database.  Please try again later.";
   
  }
  
  $query = "select * from products where prod_name like '%".$search."%' OR prod_description like '%".$search."%' OR prod_price like '%".$search."%' OR category ='".$search."'";		
	$result = $db->query($query);
	$num_results = $result->num_rows;
	
	echo "<table  border='15'>";
		echo "<tr>";
	echo "<th scope='row' bgcolor='#339900'>". "Name: ";
	echo "<th scope='row' bgcolor='#339900'>"."<br />Description: ";
 echo "<th scope='row' bgcolor='#339900'>"."<br />Price: ";
 echo "<th scope='row' bgcolor='#339900'>"."<br />category: ";
		echo "</tr>";
	for ($i=0; $i <$num_results; $i++) {
	$row = $result->fetch_assoc();
	echo "<tr>";
	 echo "<td>".htmlspecialchars(stripslashes($row['prod_name']));
	 echo "<td>".stripslashes(stripslashes($row['prod_description']));
	 echo "<td>".stripslashes(stripslashes($row['prod_price']));
	 echo "<td>".stripslashes(stripslashes($row['category']));
	}
	echo "</tr>";
	echo "</table>";
$db->close();
}
?>
    <!-- Carousel nav 
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
                
                
    </div>-->
   
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