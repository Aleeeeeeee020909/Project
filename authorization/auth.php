<?php
include_once 'C:\xampp\htdocs\oop_practice\config\database2.php';



class Registration extends MyDatabase
{

    private function id_generator()
    {
        $length=10;
        $characters = '01234567890';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function registration()
    {
        $id=$this->id_generator();
        $first_name=$_POST["first_name"];
        $last_name=$_POST["last_name"];
        $nickname=$_POST["nickname"];
        $password=$_POST["password"];
        $age=$_POST["age"];
        $location=$_POST["location"];
        $status='user';
        $email=$_POST["email"];
        $this->connect();
        $query=$this->execute("INSERT INTO users(id, first_name, last_name, nickname, password, location, status, age, email) VALUES ('$id','$first_name','$last_name','$nickname','$password','$location','$status','$age','$email')");
        if($query){
            return true;
        }
        else{
            return false;
        }
    }

}
$do=new Registration();
$sign_in=$do->registration();
if($sign_in){
    print('You are signed in successfully');
}
else{
    print('something went wrong');
}



