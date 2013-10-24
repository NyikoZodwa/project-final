<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
    
    <a class="brand" href="index.php"></a>
   
    <ul class="nav  pull-left">
    <?php if(!isset($_SESSION['cafeUser'])){?>
    <li><a href="index.php">Home</a></li>
  
    </ul>
    <?php }else{?>
    
    	<li><a href="#">Home</a></li>
   
     
    </ul>
    
     <?php }?>
    
    <ul class="nav  pull-right">
    <?php if(!isset($_SESSION['comUserCart'])){?>
    <li><a href="viewcart.php">Shopping Cart ( <?php echo count($_SESSION['comGuestCart'] );?> )</a></li>
    </ul>
    <?php }?>
    
    <ul class="nav pull-right">
    <?php if(!isset($_SESSION['cafeUser'])){?>
   
    <li ><a href="login.php">Sign-In</a></li>
    </ul>
      <?php }?>
      
      
     
     
    </div>
    </div>
	