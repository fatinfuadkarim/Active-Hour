<?php

if(isset($_POST['submit'])){
    
    include_once 'connect.php';
        $first_name=$_POST['fisrt_name'];
        $last_name=$_POST['last_name'];
        $email=$_POST['email'];
        $pwd=$_POST['pwd'];
        $passport_number=$_POST['passport_number'];
        $expiration_date=$_POST['expiration_date'];
        $country_id=$_POST['country_id'];

                
                    //INSERT the user in DB
                    $sql="INSERT INTO users (first_name,last_name,email,pwd,passport_number,expiration_date,country_id) VALUES('$first_name','$last_name','$email','$pwd','$passport_number','$expiartion_date','$country_id');";
                    $result=mysql_query($conn,$sql);
                    header("location: ../home.php?signup=success");
                    exit();
                }
        
    
    

   

}
else{
    header("Location: ../home.php");
        exit();
}