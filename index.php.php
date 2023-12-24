<?php 
$fullname=$_REQUEST['FULL NAME'];
$phonenumber=$_REQUEST['PHONE NUMBER'];
$Email=$_REQUEST['Email'];
$PASSWORD=$_REQUEST['PASSWORD'];


if(isset($_POST['btntest']))
{
  $host = "localhost";
  $user ="root";
  $PASSWORD ="";
  $db ="ss_program";
  ssas
    @$conn = mysqli_connect($host,$user,$PASSWORD,$db);

    $insert= "insert into studentsinfo(fullname,phonenumber,email,password) values ('$fullname','$phonenumber','$email','$password')";
    
    mysqli_query($conn,$insert);

    if($conn){
        echo("<h1 style='color:green;'> Your Registration Is Done! </h1>");
        
    }
    else{
        echo("<h1 style='color:red; '> Your Registration Is Failed! </h1>");


    }
    







}







?>