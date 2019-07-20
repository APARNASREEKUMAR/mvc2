<?php

trait dbconnect 
{
    function connection(){    
        // $con = mysqli_connect("localhost","root","root","mvc");
         $con = mysqli_connect("localhost","root","","mvc");

        return $con;
        // Check connection
        if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        else{
            echo "Mysql connected <br>";
        }
    }
} 
?>