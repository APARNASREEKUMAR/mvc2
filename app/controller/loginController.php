<?php
$base=$_SESSION['BASE'];
include_once $base.'/core/Controller.php';

class loginController extends Controller
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
        $this->view('auth/login');
        $this->view->render();
    }

    public function validate()
    {
       $user=$this->model->validateLogin();
       if ( $user == true ) {
        // echo "correct";
       header("Location: http://localhost:8000/car/index"); 
       }else {
        // echo "wrong credentials";
        $_SESSION["msgType"] = "error";
        $_SESSION["msgContent"] = "Invalid Credentials";
        header("Location: http://localhost:8000/login/index"); 

       }
    }
   
    
}
?>