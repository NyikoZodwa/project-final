<?php
session_start();
 include( 'classes/cart.class.php');
if(!isset($_SESSION['comGuestCart']))
{
	$_SESSION['comGuestCart']= array();
        
}    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin view:: Login</title>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/custom.css"/>
</head>

<body>

	
    <?php require_once('includes/loginpagenav.php');?>
	 <div class="hero-unit custom-unit">
   				<h1> Sign-in</h1>
   				             
   
    </div>

      <div class="container ">
         <?php
		include_once 'classes/databaseinteraction.class.php';
        if(isset($_REQUEST['login']))
        {
            $emailAddress=$_REQUEST['emailAddress'];
            $password = md5($_REQUEST['password']);
            try{
            
                $db = new DatabaseInteraction();
                $user = $db->authenticateUser($emailAddress,$password);
                
                if(!isset($user))
                {
                    echo'<div class="alert alert-error">';
                       echo'<button data-dismiss="alert" class="close" type="button">×</button>';
                     echo' Please provide correct login details';
                     echo $password;
                     echo'</div>';
                   exit();
                }
              
                if($user->getLevel() =='u')
                {
                    $_SESSION['comUser']=$user;
                    header('Location: admin_view.php');
                    exit();
                }
                
                if($user->getLevel() =='a')
                {
                    $_SESSION['admin']=$user;
                    header('Location: admin_view.php');
                    exit();
                }
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
          <form class="form-horizontal " method="post" action=<?php echo $_SERVER['PHP_SELF'];   ?>>
    <div class="control-group">
    <label class="control-label" for="inputEmail">Email Address</label>
    <div class="controls">
    <input type="email" id="inputEmail" placeholder="Email Address" name="emailAddress" required >
    </div>
    </div>
    
    <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
    <input type="password" id="inputPassword" placeholder="Password" name="password" required>
    </div>
    </div>
    
    <div class="control-group">
    <div class="controls">
    
    <button type="submit" name ="login" class="btn btn-primary btn-large">Sign in</button>
    
    </div>
    </div>
    
    
    <div class="control-group">
    <label class="control-label" for="inputPassword"></label>
    <div class="controls">
    </div>
    </div>
    
    </form>
      
      </div>
    
  <script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

</body>
</html>