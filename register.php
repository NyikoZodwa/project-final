<?php 
 session_start();
 include( 'classes/cart.class.php');
 if(!isset($_SESSION['comGuestCart']))
{
	$_SESSION['comGuestCart']= array();}
 ?>
<?php
     include_once 'classes/databaseinteraction.class.php';
        if(isset($_REQUEST['register']))
        {
            $name = $_REQUEST['name']; $surname=$_REQUEST['surname']; $emailAddress=$_REQUEST['emailAddress'];
            $password =md5($_REQUEST['password']); $confirmPassword=md5($_REQUEST['confirmPassword']);
            
            if($confirmPassword != $password)
            {
                echo "password are not the same";
                exit();
            }
            try{
            
                $db = new DatabaseInteraction();
                $db->register($name, $surname, $emailAddress,$password);
                header('Location: login.php');
            }
            
                catch(Exception $err)
                {
                    echo '<div class="alert alert-error">';
                      echo '<button data-dismiss="alert" class="close" type="button">×</button>';
                     echo "An error occured!";
                     echo '</div>';
                     exit();
                }
        }
            
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: Register</title>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/custom.css"/>

</head>

<body>
<?php require_once('includes/registerpagenav.php');?>
    <?php 
    ?>
       <div class="hero-unit custom-unit">
   				<h1>Registration</h1>
                
   
    </div>
      <div class="container">
          <form class="form-horizontal" method="post" action=<?php echo $_SERVER['PHP_SELF'];   ?> >
          
           <div class="control-group">
    <label class="control-label" for="inputName">Name</label>
    <div class="controls">
    <input type="text" id="inputName" placeholder="Name" name="name" required>
    </div>
    </div>
          
           <div class="control-group">
    <label class="control-label" for="inputSurname">Surname</label>
    <div class="controls">
    <input type="text" id="inputSurname" placeholder="Surname" name="surname" required />
    </div>
    </div>
          
           <div class="control-group">
    <label class="control-label" for="inputemail">Email Address</label>
    <div class="controls">
    <input type="email" id="inputemail" placeholder="example@example.com" name="emailAddress" required>
    </div>
    </div>
          
    <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
    <input type="password" id="inputPassword" placeholder="Password" name="password" required>
    </div>
    </div>
    
    <div class="control-group">
    <label class="control-label" for="inputconPassword">Confirm Password</label>
    <div class="controls">
    <input type="password" id="inputConPassword" placeholder="Confirm Password" name="confirmPassword" required/>
    </div>
    </div>
    
    
    
    <div class="control-group">
    <div class="controls">
    
    <button type="submit" name="register" class="btn btn-primary btn-large">Register</button>
    </div>
    </div>
    
    </form>
      
      </div>
   
    <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>



</body>
</html>