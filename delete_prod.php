<?php
 include('classes/databaseinteraction.class.php');
 include( 'classes/cart.class.php');
 session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ZodwakieBerry :: Delete product</title>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/custom.css"/>

</head>
<?php
echo $today = date("F j Y g:i a");
?>
<body>
	
    	   
        <div class="hero-unit img-polaroid custom-unit">
                <h1> Delete Product</h1>
                
    </div>
    
    <ul class="breadcrumb navbar navbar-static-top">
    <li><a href="index.php">Home</a> <span class="divider">></span></li>
   
   <li><a href="admin_view.php" title="">   View products   </a><span class="divider">></span></li>
   <li><a href="insert_prod.php" >Insert products</a> <span class="divider">></span></li>
   <li class="active"> Delete products<span class="divider">></span></li>
<li><a href="delete_user.php" title="">   Delete User    </a><span class="divider">></span></li>
<li><a href="handleLogout.php" title="">logout</a><span class="divider">></span></li>
    </ul>
    
    
    
      <div class="container">
            
          <?php
    $db = new DatabaseInteraction();
    $products = $db->getProducts();
    if(!isset($products))
    {
        echo 'There are currently no products. We apologize for this.';
        exit();
    }
        for($i = 0;$i< count($products);$i++){
        echo '<table class="table img-polaroid">';
              
                echo '<tr class="error">';
                echo '<td class="span3"><strong>Product Name</strong></td>';
                  echo '<td class="span3"><strong>Product Description</strong></td>';
                  echo '<td class="span3"><strong>Product Price</strong></td>';
                  
            
                
                
                echo '</tr>';
                echo '<tr class="success">';
                
                echo '<td class="span3">'.$products[$i]->getName().'</td>';
        
                 echo '<td class="span2">'.$products[$i]->getDescription().'</td>';
                 echo '<td class="span2"> R'.$products[$i]->getPrice().'</td>';
                  $id = $products[$i]->getId();
                echo "<td colspan='2'><a href='handleProdDelete.php?prod_id=$id'><button class='btn btn-block btn-danger btn-large type='button'>Delete</button></a></td>";
                
                echo '</tr>';
				
                
               
             
         echo '</table>';
        }
        ?>
          
    </div>
  

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>

</html>