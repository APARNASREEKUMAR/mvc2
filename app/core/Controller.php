<?php
$base=$_SESSION['BASE'];
include_once $base.'/core/View.php';

class Controller
{
    protected $view;
    protected $model;

    public function __construct()
    {
        
    }
    public function view($viewName,$data=[])
    {
        $this->view = new View($viewName,$data);
        return $this->view;
    }
    
    public function model($modelName)
    {
        // echo "from model<br>";
        // echo $modelName;
        if(file_exists($_SESSION['BASE'].'/model/'.$modelName.'.php')) {
            include($_SESSION['BASE'].'/model/'.$modelName.'.php');
            $this->model = new $modelName;
        }
    }
}
?>