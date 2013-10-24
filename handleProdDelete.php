<?php
include('classes/databaseinteraction.class.php');
if(isset($_REQUEST['prod_id']))
{
    $db = new DatabaseInteraction();
    $db ->deleteProduct($_REQUEST['prod_id']);
    header('Location: delete_Prod.php');
}


?>
