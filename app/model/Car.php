<?php
$base=$_SESSION['BASE'];
include_once $base.'traits/dbconnect.php';
class Car
{
    use dbconnect;

    protected $dbconnection;

    public function __construct()
    {
        // echo " Car class in initialised<br>";
        $this->dbconnection = $this->connection();
    }
    public function getCars()
    {
        $sql="SELECT * from cars";

        if ($result=mysqli_query($this->dbconnection,$sql))
        {
        //  echo "inside";
            // Fetch one and one row
          
          while ($row=mysqli_fetch_assoc($result))
            {
            // printf ("%s (%s)\n",$row[0],$row[1]);
            $car[]=$row;
            // print_r($row);
            }
          // Free result set
          mysqli_free_result($result);
          return $car;
        }else {
     echo "not fetched";
        }
        echo "cars lsiting ";
    }
    public function updateCarDetail($id,$new_carname) : bool
    {
        $sql="UPDATE cars SET carname = '".$new_carname."' where id=$id";
        if ($result = mysqli_query($this->dbconnection,$sql))
        {

        return true;    
        }else {

        return false;
        }
    }
    public function deleteCar($id) :bool
    {
        $sql="DELETE FROM cars where id=$id";

        if ($result=mysqli_query($this->dbconnection,$sql))
        {

        return true;    
        }else {

        return false;
        }
        
    }
    public function getCarDetail($id) 
    {
        $sql="SELECT *  FROM cars where id=$id";

        if ($result=mysqli_query($this->dbconnection,$sql))
        {

            return $car=mysqli_fetch_assoc($result);    
        }
        
    }
}
?>