<?php
session_start();
     include('classes/databaseinteraction.class.php');
     
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Ndzalama and Tanza Creations</title>

<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/custom.css"/>
</head>

<body>
<?php
echo $today = date("F j Y g:i a");
?>   

    <div class="hero-unit img-polaroid custom-unit">
                <h1> Delete User</h1>
                
    </div>
<div id="menu">
    <ul class="breadcrumb navbar navbar-static-top">
    
<li><a href="admin_view.php" title="">   View products   </a><span class="divider">></span></li>
<li ><a href="insert_prod.php" title=""> Insert products <a/><span class="divider">></span></li>
<li><a href="delete_prod.php" title=""> Delete products   </a><span class="divider">></span></li>
<li class ="active">   Delete User <span class="divider">></span></li>
<li><a href="handleLogout.php" title="">logout</a><span class="divider">></span></li>

    </ul>
</div>
<div id="center_content">
<?php
      $db = new DatabaseInteraction();
       if(isset($_REQUEST['del_user_id']))
       {
           try
           {
               $db->deleteUser($_REQUEST['del_user_id']);
               echo'<div class="alert alert-success">';
                       echo'<button data-dismiss="alert" class="close" type="button">×</button>';
                     echo' User Deleted!';
                     
                     echo'</div>';
                   
           }
           catch(Exception $err)
           {
               echo'<div class="alert alert-error">';
                       echo'<button data-dismiss="alert" class="close" type="button">×</button>';
                     echo' User Could Not Be Deleted!';
                     
                     echo'</div>';
           }
       }
        
         
       
    $users = $db->getUsers();
    if(!isset($users))
    {
        echo 'There are currently no users. We apologize for this.';
        exit();
    }
        for($i = 0;$i< count($users);$i++){
        echo '<table class="table img-polaroid">';
              
                echo '<tr class="error">';
                echo '<td class="span3"><strong>Name</strong></td>';
                  echo '<td class="span3"><strong>Surname</strong></td>';
                  echo '<td class="span3"><strong>Email Address</strong></td>';
                  
            
                
                
                echo '</tr>';
                echo '<tr class="success">';
                
                echo '<td class="span3">'.$users[$i]->getName().'</td>';
        
                 echo '<td class="span2">'.$users[$i]->getSurname().'</td>';
                 echo '<td class="span2">'.$users[$i]->getEmail().'</td>';
                  $id = $users[$i]->getUserId();
                 
                 echo "<td colspan='2'><a href='delete_user.php?del_user_id=$id'><button class='btn btn-block btn-danger btn-large type='button'>Delete User</button></a></td>";
                
                echo '</tr>';
				
        }
               
            
         echo '</table>';
           
            
    ?>
</div>
    <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

</body>
</html>