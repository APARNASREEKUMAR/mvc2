<?php
$base=$_SESSION['BASE'];
include_once $base.'traits/dbconnect.php';
class User
{
    use dbconnect;

    protected $dbconnection;

    public function __construct()
    {
        // echo " Car class in initialised<br>";
        $this->dbconnection = $this->connection();
         $_SESSION['username'] = "";
         $_SESSION['user_id'] = "";
    }
   
    public function validateLogin() 
    {
        // print_r($_POST);
        $submittedUsername = $_POST['username'];
        $submittedPassword = $_POST['user_password'];

        $sql="SELECT * FROM users where name='".$submittedUsername."' and password='".$submittedPassword."'";
        // echo $sql;
        if ($result=mysqli_query($this->dbconnection,$sql))
        {
          
            while ($row=mysqli_fetch_assoc($result))
            {
               $_SESSION['username'] = $submittedUsername;
               $_SESSION['user_id'] = $row['id'];
               return true;
             }  
        // 
        }else {
            return false;
        }    

    }
}
?>