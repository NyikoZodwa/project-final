
<div class="navbar  navbar-fixed-top">
    <div class="navbar-inner">
    <a class="brand" href="index.php"></a>
    <ul class="nav  pull-left">
    <?php if(!isset($_SESSION['cafeAdmin'])){?>
    <li><a href="index.php">Home</a></li>
    
    </ul>
    <?php }else{?>
    
    	
    <li ><a href="managestudents.php">Manage Students</a></li>
      <li ><a href="addmeal.php">Add Meals</a></li>
       <li ><a href="financials.php">Financials</a></li>
     
    </ul>
    
     <?php }?>
     
   	
   
    
    <ul class="nav pull-right">
    <?php if(!isset($_SESSION['cafeAdmin'])){?>
    <li><a href="adminlogin.php">Sign-In</a></li>
    
    </ul>
     <?php }else{?>
     	<li ><a href="handleLogout.php">Sign-out</a></li>
      <?php }?>
      
      
     
    
    </div>
    </div>
	
	