<?php
    class User
    {
        private $user_id,$name,$surname,$email,$level,$complete_status;
        
        function  __construct($user_id,$name,$surname,$email,$level,$complete_status)
        {
            $this->user_id =$user_id;
            $this->name =$name;
            $this->surname =$surname;
            $this->email =$email;
            #$this->password =$password;
            $this->level =$level;
            $this->complete_status =$complete_status;
        }
        
        public function setName($name)
        {
            $this->name =$name;
        }
         public function setSurname($surname)
        {
            $this->surname =$surname;
        }
        
        public function setEmail($email)
        {
            $this->email=$email;
        }
         public function setCompleteStatus($staus)
        {
            $this->complete_status=$staus;
        }
        public function getUserId()
        {
            return $this->user_id;
        }
        
        public function getName()
        {
            return $this->name;
        }
        public function getSurname()
        {
            return $this->surname;
        }
        
        public function getEmail()
        {
            return $this->email;
        }
        
        public function getLevel()
        {
            return $this->level;
        }
        
        public function getCompleteStatus()
        {
            return $this->complete_status;
        }
    }
?>
