<?php
 include('classes/databaseinteraction.class.php');
 include( 'classes/cart.class.php');

if(!isset($_SESSION['comGuestCart']))
{
	$_SESSION['comGuestCart']= array();
}
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WSU :: Shopping Cart</title>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/custom.css"/>

</head>

<body>
		 
<?php require_once('includes/mainNavigation.php');?>
    	   
<div class="hero-unit img-polaroid custom-unit">
                <h1> Shopping Cart</h1>
                
</div>
    <ul class="breadcrumb navbar navbar-static-top">
    <li><a href="index.php">Home</a> <span class="divider">></span></li>
    <li><a href="products.php">Products</a> <span class="divider">></span></li>
   <li class="active">Shopping Cart</li>
    </ul>
    
    
    
      <div class="container">
            
          <?php
          $items;
          $db=new DatabaseInteraction();
          if(isset($_SESSION['comUserCart']))
          {
               $items = $_SESSION['comUserCart'];
          }
          
          else{$items = $_SESSION['comGuestCart'];}
          echo '<table class="table img-polaroid">';
          echo '<tr class="error">';
                echo '<td class="span3"><strong>Product Name</strong></td>';
                  echo '<td class="span3"><strong>Product Description</strong></td>';
                    echo '<td class="span3"><strong>Quantity</strong></td>';
                  echo '<td class="span3"><strong>Product Price</strong></td>';
                 
                 
                
                
                echo '</tr>';
                
 for($i = 0;$i< count($items);$i++){
     
      
            @  $itemData = $db->getProductById($items[$i]->getId());
                
                echo '<tr class="success">';
                echo '<td class="span3">'.$itemData->getName().'</td>';
                echo '<td class="span2">'.$itemData->getDescription().'</td>';
                echo '<td class="span2">'.$items[$i]->getQuantity().'</td>';
                echo '<td class="span2">R '.$itemData->getPrice().'</td>';
                 /* echo "<td colspan='2'><a href='removeitem.php?id=$i'><button class='btn btn-block btn-danger btn-large type='button'>Remove Item</button></a></td>";
                */
                echo '</tr>';
		
                $total = 0;
               for($y = 0;$y< count($items);$y++)
               {
                   $total+=$itemData->getPrice();
               }
                
               
               
       /*      echo '<tr class="warning">';
                $id = $products[$i]->getId();
                echo "<td colspan='2'><a href='addToCart.php?prod_id=$id'><button class='btn btn-block btn-success btn-large type='button'>Add To Cart</button></a></td>";
        
               
                echo '</tr>';
                
                echo '<tr class="warning">';
                
                echo "<td colspan='2'><a href='reviews.php?prod_id=$id'><button class='btn btn-block btn-warning btn-large type='button'>View Product Review</button></a></td>";
        
               
                echo '</tr>';*/
         
        }
        echo '</table>';
        
         $total = 0;
               for($y = 0;$y< count($items);$y++)
               {
                 @  $total+=$itemData->getPrice();
               }
               
               echo '<h3 class="muted"> Total Amount :</h3> <h3 class="text-success">R '. $total,'</h3>';
               if($total>0)
               { echo "<br /><a href='iveri.php'><button class='btn  btn-warning btn-large type='button'>Check out</button></a>";}
               else{echo "<br /><a href='iveri.php'><button class='btn disabled btn-warning btn-large type='button' disabled='disabled'>Check out</button></a>";}
 
               ?>
          
    </div>
  

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>

</html>