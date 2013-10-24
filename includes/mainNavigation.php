
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <p><a class="brand" href="index.php">	 ZodwakieBerry</a></p>
      <p>&nbsp;        </p>
      <ul class="nav  pull-left">
    <?php if(!isset($_SESSION['comUser'])){?>
    <li><a href="index.php">Home</a></li>
    <li><a href="products.php">Products</a></li>
    <li>
      <form name="form1" method="post" action="search.php">
        <p>Search 
            <input type="text" name="search">
            <input type="submit" name="Submit" value="Submit">
        </p>
        <p>&nbsp;            </p>
      </form>
    </li>
      </ul>
    <?php }else{?>
    
    	<li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
    <li ><a href="account.php">Account</a></li>
     
     
    </ul>
    
     <?php }?>
     
   	
   
    <ul class="nav  pull-right">
    <?php if(!isset($_SESSION['comUserCart'])){?>
    <li><a href="viewcart.php">Shopping Cart ( <?php echo count($_SESSION['comGuestCart'] );?> )</a> </li>
    </ul>
    <?php }?>
    
    
    <ul class="nav pull-right">
    <?php if(!isset($_SESSION['comUser'])){?>
    <li><a href="login.php">Sign-In</a></li>
    
    <li ><a href="register.php">Register</a></li>
    <li ><a href="adminLogin.php">Admin</a></li>
    </ul>
     <?php }else{?>
     	<li ><a href="handleLogout.php">Sign-out</a></li>
        <?php }?>
      
      
         <!--<form class="form-search pull-right">
    <input type="text" class="input-medium search-query">
    <button type="submit" class="btn">Search</button>
    </form>-->
  </div>
</div>
	
	