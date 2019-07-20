<?php
class View
{
    protected $view_file;
    protected $view_data;

    public function __construct($view_file,$view_data)
    {
        $this->view_file=$view_file;
        $this->view_data=$view_data;
    }
    
    public function render()
    {
       
    //    echo $this->view_file; 
        if(file_exists($_SESSION['BASE'].'/view/'.$this->view_file.'.html')) {
            include($_SESSION['BASE'].'/view/'.$this->view_file.'.html');
        }
    }   
}
?>