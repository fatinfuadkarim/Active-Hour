<?php

if(isset($_POST['submit'])){
    
    include_once 'connect.php';
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $email=$_POST['email'];
        $pwd=$_POST['pwd'];
		$uId=$_POST['uID'];
                $sql="INSERT INTO users (first_name,last_name,email,pwd,uID) VALUES('$first_name','$last_name','$email','$pwd','$uID');";
				$result=mysqli_query($conn,$sql);
				$_SESSION['email']=$email;
				header("location: flights.php");
				exit();
                }
        
    
    

   


else{
    header("Location:home.php");
        exit();
}