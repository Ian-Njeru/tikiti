<?php
    session_start();
    
    include_once ('database/dbconnection.php');
    
    class Merchant extends DbConnection{
        public function __constuct(){
            parent::__construct();
        }
    

    public function check_login($email, $password){
        $sql = "SELECT * FROM m_login WHERE email='$email' and password='$password'";
        $query = $this->connection->query($sql);

        if($query->num_rows>0){
            $row = $query->fetch_assoc();
            return $_SESSION['merchant_name'] = $row['merchant_name'];
        }
        else{
            return false;
        }
    }

    public function result($sql){
        $query = $this->connection->query($sql);

        $row = $query->fetch_assoc();

        return $row;
    }

    public function escape_string($value){
        return $this->connection->real_escape_string($value);
    }
}

$merchant = new Merchant();

    if(isset($_POST['signin'])){
        $email = $merchant->escape_string($_POST['email']);
        $password = $merchant->escape_string($_POST['password']) ;

        $auth = $merchant->check_login($email, $password);

        if(!$auth){
            $_SESSION['message'] = 'Wrong email or password';

           header('location:sell.php');
        }
        else{
            $_SESSION['merchant_name']=$auth;
            header('location:home.php');
        }
    }
    else{
        $_SESSION['message'] = 'You need to Sign Up first';
        header('location:sell.php');
    }
?>