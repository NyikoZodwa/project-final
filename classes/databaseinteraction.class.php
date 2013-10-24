<?php
    include_once 'classes/user.class.php';
    include_once 'classes/product.class.php';
    class DatabaseInteraction
    {
         private $host = 'localhost',$username='nyiko',$password='123',$db='zodwaberry';
         protected $con;
         
         function DatabaseInteraction()
         {
            $this->con = new mysqli($this->host,$this->username,$this->password,$this->db);
         }
         
         
         
         public function register($name,$surname,$email,$password)
         {
             
            $query = "insert into users(name,surname,email,password,level) values(?,?,?,?,'u')";
          $stmt=$this->con->prepare($query);
           $stmt->bind_param("ssss",$name,$surname,$email,$password);
           $stmt->execute();
           
           return TRUE;
         }
         
         
          public function addProd($prod_name,$prod_description,$prod_price,$category)
         {
             
           $query = "insert into products(prod_name,prod_description,prod_price,category) values(?,?,?,?)";
           $stmt=$this->con->prepare($query);
           $stmt->bind_param("ssss",$prod_name,$prod_description,$prod_price,$category);
		   $id_image=mysqli_insert_id($db);
		   $newname="$id_image.jpg";
		   move_uploaded_file($_FILES["image"]["tmp_name"],"my_image/$newname");
           $stmt->execute();
           
           return TRUE;
         }
         
         public function getUsers()
         {
            
              $query = "select user_id,name,surname,email,level,complete_status from users";
              $stmt=$this->con->prepare($query);
            //  $stmt->bind_param("ss",$emailAddress,$password);
              $stmt->bind_result($user_id,$name,$surname,$email,$level,$complete_status);
              $stmt->execute();
              
              $user = array();
             
                  while($stmt->fetch())
                {
                   array_push($user,new User($user_id,$name,$surname,$email,$level,$complete_status));
                }
             
             
             return $user;
         }
         
         public function authenticateUser($emailAddress,$password)
         {
            
              $query = "select user_id,name,surname,email,level,complete_status from users where email=? AND password=?";
              $stmt=$this->con->prepare($query);
              $stmt->bind_param("ss",$emailAddress,$password);
              $stmt->bind_result($user_id,$name,$surname,$email,$level,$complete_status);
              $stmt->execute();
              
              $user = NULL;
             
                  while($stmt->fetch())
                {
                   $user= new User($user_id,$name,$surname,$email,$level,$complete_status);
                }
             
             
             return $user;
         }
         
        
        
        
         
         public function getProducts()
         {
             $query = "select * from products";
              $stmt=$this->con->prepare($query);
              //$stmt->bind_param("ss",$username,$password);
             $stmt->bind_result($prod_id,$prod_name,$prod_description,$prod_price,$category);
              $stmt->execute();
              
              $prods = array();
             
                  while($stmt->fetch())
                {
                      array_push($prods,new Product($prod_id,$prod_name,$prod_description,$prod_price,$category));
                }
             
             
             return $prods;
         }
         
         public function getProductById($id)
         {
             $query = "select * from products where prod_id = ?";
              $stmt=$this->con->prepare($query);
              $stmt->bind_param("s",$id);
             $stmt->bind_result($prod_id,$prod_name,$prod_description,$prod_price,$category);
              $stmt->execute();
              
              $prods = null;
             
                  while($stmt->fetch())
                {
                     $prods = new Product($prod_id,$prod_name,$prod_description,$prod_price,$category);
                }
             
             
             return $prods;
         }
         
        public function deleteProduct($id)
        {
            $query = "delete from products where prod_id = ?";
              $stmt=$this->con->prepare($query);
              $stmt->bind_param("s",$id);
              $stmt->execute();
              return true;
        }
        
         public function deleteUser($id)
        {
            $query = "delete from users where user_id = ?";
              $stmt=$this->con->prepare($query);
              $stmt->bind_param("s",$id);
              $stmt->execute();
              return true;
        }
    }
?>
