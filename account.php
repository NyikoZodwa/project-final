<?php
include('classes/databaseinteraction.class.php');
 include('adminnav.php');
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ZodwakieBerry :: Account</title>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/custom.css"/>

</head>

<body>
		 
<?php require_once('includes/mainNavigation.php');?>
    	   
        <div class="hero-unit img-polaroid custom-unit">
                <h1> Account</h1>
                
    </div>
    <ul class="breadcrumb navbar navbar-static-top">
    <li><a href="index.php">Home</a> <span class="divider">></span></li>
   <li class="active">Account</li>
    </ul>
      <div class="container-fluid">
    <div class="row-fluid">
    <div class="span4">
   <h2 class="muted"> Profile Details</h2>
   <?php
        echo '<table class="table img-polaroid">';
              
                echo '<tr class="error">';
                echo '<td class="span5">Name</td>';
                  echo '<td class="span3">Surname</td>';
                  echo '<td class="span3">Email Address</td>';
                  
            
                
                
                echo '</tr>';
                echo '<tr class="success">';
                
                echo '<td class="span5">'.$_SESSION['comUser']->getName().'</td>';
        
                 echo '<td class="span2">'.$_SESSION['comUser']->getSurname().'</td>';
                 echo '<td class="span2">'.$_SESSION['comUser']->getEmail().'</td>';
                 
                
                echo '</tr>';
				
                
               
             echo '<tr class="warning">';
                
                echo "<td colspan='3'> <button class='btn btn-block btn-success type='button'>Edit my profile</button></td>";
        
               
                echo '</tr>';
         echo '</table>';
        
        ?>
   
    </div>
    <div class="span10">
    <!--Body content-->
    </div>
    </div>
    </div>
  

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>

</html>