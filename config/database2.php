<?php
class MyDatabase
{
    protected string $servername = 'localhost';
    protected string $username = 'root';
    protected string $password = '';
    protected string $database_name = 'Authorization';

    public function connect()
    {

         $con=new mysqli($this->servername,$this->username,$this->password,$this->database_name);
         if($con){
             return true;

         }
         else{
             return false;
         }
    }
    public function execute($query):bool|mysqli_result
    {
        $con=new mysqli($this->servername,$this->username,$this->password,$this->database_name);
        $execution=mysqli_query($con,$query);
        if($this->connect()==true){
            return $execution;
        }
        else{
            return false;
        }
    }

}