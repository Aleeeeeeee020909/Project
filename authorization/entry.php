<?php
include_once 'C:\xampp\htdocs\oop_practice\config\database2.php';

class Entry extends MyDatabase
{
    public function entry()
    {
        $email_for_entry=$_POST["email_for_entry"];
        $password_for_entry=$_POST["password_for_entry"];
        $this->connect();
        $check=$this->execute("SELECT * FROM users WHERE password='$password_for_entry' and email='$email_for_entry'");
        if(mysqli_num_rows($check)==1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
$do=new Entry();
$is_registered=$do->entry();
if($is_registered==true)
{
    print('You are in');


}
else
{
    print('You should register');
    echo "<a href='entry_page.html'>back to entry page";
    echo "</a>";
}