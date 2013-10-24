<?php
	session_start();
		/*if(!$_SESSION['admin']==1)
	{
		header("Location: index.php");
		}
		else
		{
			$msg = "Welcome Username ".$_SESSION['email'];
		}*/

	
	$username=$_POST['emailAddress'];
	$password=$_POST['password'];
	
	
	if($username&&$password)
	{
		$connect=mysql_connect("Localhost","root","") or die ("Couldn't Connect to data base");
		mysql_select_db("zodwaberry") or die("couldn't find the database");
		
		$query = mysql_query("SELECT * FROM admin WHERE aemail='$username'");
		
		$rows = mysql_num_rows($query);
		
		if($rows!=0)
		{
			while($row = mysql_fetch_assoc($query))
			{
				$dbusername= $row['aemail'];
				$dbpassword= $row['apassword'];
				}
				
				 if($username==$dbusername && $password==$dbpassword)
				 {
					$_SESSION['admin']=1;
					$_SESSION['aemail']=$username;
					header("Location: admin_view.php");
					 }
					 else
					 {
						 $msg= "Incorrect password !";
						 }
			}
			else
			{
				$msg="User does not exist!";
				
				}	
		}
		
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin view:: Login</title>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/custom.css"/>
<body >
<h1 align="center">&nbsp;</h1>
<form name="form1" method="post" action="">
  <h1>ADMIN_ LOGIN  </h1>
  <table width="573" border="0" align="center">
    <tr>
      <td width="163">email : </td>
      <td width="293"><p>
       <input type="email" id="inputEmail" placeholder="Email Address" name="emailAddress" required >
      </p>
      <p>&nbsp;        </p></td>
    </tr>
    <tr>
      <td>password : </td>
      <td><p>
       
		<input type="password" id="inputPassword" placeholder="Password" name="password" required>
      </p>
      <p>&nbsp;        </p></td>
    </tr>
    <tr>
      <td height="75">&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit"></td>
    </tr>
    <tr>
      <td height="75" colspan="2"><?php  echo $msg; ?>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
