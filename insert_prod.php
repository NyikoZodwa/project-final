<?php
include('classes/databaseinteraction.class.php');
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Prom Night Css Template</title>

<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/custom.css"/>
</head>

<body>
    
<?php
echo $today = date("F j Y g:i a");
?>


</p>
</div>
</div>


<div class="hero-unit img-polaroid custom-unit">
                <h1> Insert Product</h1>
                
</div>
    <ul class="breadcrumb navbar navbar-static-top">
    
<li><a href="admin_view.php" title="">   View products   </a><span class="divider">></span></li>
<li class ="active"> Insert products <span class="divider">></span></li>
<li><a href="delete_prod.php" title=""> Delete products   </a><span class="divider">></span></li>
<li><a href="delete_user.php" title="">   Delete User    </a><span class="divider">></span></li>
<li><a href="handleLogout.php" title="">logout</a><span class="divider">></span></li>

    </ul>
<div id="center_content">
    <form method="post" action="insert_prod.php" enctype="multipart/form-data">
        <table border="0" align="Center">
            <tr>
                <td colspan="2" align="Center"><h4>Insert Product</h4></td>
            </tr>
             <tr>
                <td colspan="2">*****************************************************</td>
            </tr>
            <tr>
                <td>Name    :</td>
                <td><input type="text" name="txtArtist" required/></td>
            </tr>
            <tr>
                <td>Description  :</td>
                <td><input type="text" name="txtAlbum" required/></td>
            </tr>
            <tr>
                <td>Price :</td>
                <td><input type="text" name="txtProducer" required/></td>
            </tr>
             <tr>
                <td>Category   :</td>
                <td><input type="text" name="txtPrice" required/></td>
            </tr>
			<tr>
                <td>Image   :</td>
                <td><label>
                           <input type="hidden" name="MAX_FILE_SIZE" value="900000000000000000000000000000000000000000000000" />
                           <input name="image" type="file" value="<?php echo $_POST['image'];?>"/>
                </label>
                         </td>
            </tr>
			
            <tr>
                <td colspan="2">*****************************************************</td>
            </tr>
            <tr>
                             
                <td colspan="2" align="Center"  ><input type="submit" class="btn btn-primary btn-large" name="btnAddRecord" value="Add record"></td>
                
            </tr>
            
        </table>
    </form>
    <?php
        if(isset ($_POST["btnAddRecord"]))
        {
            $prod_name = $_POST["txtArtist"];
            $prod_description= $_POST["txtAlbum"];
            $prod_price = $_POST["txtProducer"];
            $category= $_POST["txtPrice"];
            
            $obj = new DatabaseInteraction();
           

            if($prod_name&&$prod_description&&$prod_price&&$category)
            {
                 $obj->addProd($prod_name, $prod_description, $prod_price, $category);
                 echo "Record is Entered";
                    
                }
                else
                {
                    echo "Please fill in all the fields";
                }
                
            }
           
          
              

           
    ?>
</body><script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script></html>