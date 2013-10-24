<?php  
      session_start();
	
            if(!isset($_SESSION['comGuestCart']))
            {
                $_SESSION['comGuestCart'] = array();
            }
            include_once 'classes/cart.class.php';
			array_push($_SESSION['comGuestCart'],new Cart($_GET['prod_id']));
           // echo 'added';
            header('Location: products.php');
?>

