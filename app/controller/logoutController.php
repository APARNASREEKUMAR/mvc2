<?php
$base=$_SESSION['BASE'];
include_once $base.'/core/Controller.php';

class logoutController extends Controller
{

    public function __construct()
    {
       
    }

   public function index()
   {
       // echo "herer";
    $s= 'http://localhost:8000/';
        unset($_SESSION["msgType"]);
        unset($_SESSION["msgContent"]);
        unset($_SESSION["username"]);
        unset($_SESSION["user_id"]);
        // header('URL = login/index');
        $path ="{$s}login/index";
                header("Location: {$path}"); 
//
    }
   
   
    
}
?>