<?php
$base=$_SESSION['BASE'];
include_once $base.'controller/homeController.php';
include_once $base.'controller/carController.php';

class Application
{
    protected $controller='';
    protected $action='';
    protected $params=[];

    public function __construct()
    {
        // var_dump($_SERVER['REQUEST_URI']);
       $this->prepareURL();
    //    print_r($this->action);
       if(file_exists($_SESSION['BASE'].'/controller/'.$this->controller.'.php')) {
            $this->controller = new $this->controller;
            // $this->controller->index();
            if(method_exists($this->controller,$this->action)) {
                // echo "herer";
                call_user_func_array([$this->controller,$this->action],$this->params);
            }
       }else{
        echo "not found";
       }
    }

    protected function prepareURL()
    {
        $request = trim($_SERVER['REQUEST_URI'],'/');
        if (!empty($request)) {
            $url = explode('/',$request);
            $this->controller = isset($url[0]) ? $url[0].'Controller' : 'homeController';
            $this->action = isset($url[1]) ? $url[1] : 'index';
            unset($url[0],$url[1]);
            $this->params = !empty($url) ? array_values($url) :[];
        }
    }
}
?>