<?php
$base=$_SESSION['BASE'];
include_once $base.'/core/Controller.php';

class registerController extends Controller
{

    public function __construct()
    {
        // echo "I am in _CLASS_";
        $_SESSION["msgType"] = "";
        $_SESSION["msgContent"] = "";
        $this->model('User');
    }

    public function index()
    {
        $this->view('auth/register');
        $this->view->render();
    }

    public function validate()
    {
       $user = $this->model->registerUser();
       if ( $user == true ) {
        // echo "correct";
       // header("Location: http://localhost:8000/car/index"); 
        header('URL = car/index');

       }else {
        // echo "wrong credentials";
        $_SESSION["msgType"] = "error";
        $_SESSION["msgContent"] = "Invalid Credentials";
        // header("Location: http://localhost:8000/login/index"); 
       header('URL = login.php');
       }
    }
   
    
}
?>