<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "insert";
//$s =$_POST['submit'];
//echo $s; die;
$conn = mysqli_connect($server, $username, $password, $dbname);
if (isset($_POST['submit'])) {
   if(!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['email'])  && !empty($_POST['age']) && !empty($_POST['address']))
   {

      $id = $_POST['id'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $age = $_POST['age'];
      $address = $_POST['address'];
      //$s =$_POST['submit'];
      //echo $email; die;

      $query ="insert into form(id,name,email,age,address) 
               values('$id','$name','$email','$age','$address')";
      $run = mysqli_query($conn,$query) or die(mysqli_error());
      if($run){
  	    echo "Form Submitted Successfully";
      }

      else{
  	   echo "Form Not Submitted";
       }

     }
     else{
	echo "all fields required";
    }

}

?>