<?php
$base=$_SESSION['BASE'];
include_once $base.'/core/Controller.php';

class homeController extends Controller
{

    public function __construct()
    {
        // echo "I am in _CLASS_";
    }
    public function index($id='',$name='')
    {
        // echo "Id: $id and name is : $name";
        $this->view('home/index',[
            'id' => $id,
            'name' => $name
        ]);
        $this->view->render();
    }
    public function aboutUs($id='',$name='')
    {
        // echo "Id: $id and namfsdfsde is : $name";
        $this->view('home/aboutUs',[
            'id' => $id,
            'name' => $name
        ]);
        $this->view->render();
    }
}
?>