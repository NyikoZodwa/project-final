<?php
 include('classes/databaseinteraction.class.php');
 include( 'classes/cart.class.php');
if(!isset($_SESSION['comGuestCart']))
{
	$_SESSION['comGuestCart']= array();
}
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        unset($_SESSION['comGuestCart'][$_REQUEST['id']]);
        header('Location: viewcart.php');
        ?>
    </body>
</html>
