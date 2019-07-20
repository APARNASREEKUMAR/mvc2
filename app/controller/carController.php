<?php
$base=$_SESSION['BASE'];
include_once $base.'/core/Controller.php';

class carController extends Controller
{

    public function __construct()
    {
        // echo "I am in _CLASS_";
        $_SESSION["msgType"] = "";
        $_SESSION["msgContent"] = "";
        $this->model('Car');
    }
    public function index($id='',$name='')
    {
       
        $cars=$this->model->getCars();
        // print_r($cars);
        $this->view('car/index',$cars);
        $this->view->render();
    }
    public function edit($id='',$name='')
    {
        $car=$this->model->getCarDetail($id);
        // print_r($car);
        $this->view('car/edit',$car);
        $this->view->render();
    }
    public function update($id='',$name='')
    {
         $new_carname = $_POST['carname'];           
         $car=$this->model->updateCarDetail($id,$new_carname);
         if($car == true) {
            $_SESSION["msgType"] = "success";
            $_SESSION["msgContent"] = "Car Successfully Updated !";
        } else {
            $_SESSION["msgType"] = "error";
            $_SESSION["msgContent"] = "Car could not be Updated !";
        }
        $this->index();
    }
    public function delete($id='',$name='')
    {
        $car=$this->model->deleteCar($id);
        $cars=$this->model->getCars();
        if($car == true) {
            $_SESSION["msgType"] = "success";
            $_SESSION["msgContent"] = "Car Successfully Deleted !";
        } else {
            $_SESSION["msgType"] = "error";
            $_SESSION["msgContent"] = "Car could not be Deleted !";
        }
        $this->view('car/index',$cars);
        $this->view->render();
    }
    
}
?>