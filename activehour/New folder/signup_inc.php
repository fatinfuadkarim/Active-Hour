<?php

if(isset($_POST['submit'])){
    
    include_once 'connect.php'
        $first_name=mysqli_real_escape_string($conn,$_POST['first_name']);
        $last_name=mysqli_real_escape_string($conn,$_POST['last_name']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $pwd=mysqli_real_escape_string($conn,$_POST['pwd'];
        $passport_number=mysqli_real_escape_string($conn,$_POST['passport_number']);
        $expiration_date=mysqli_real_escape_string($conn,$_POST['expiation_date']);
        $country_id=mysqli_real_escape_string($conn,$_POST['country_id']);

        //error handelers
        //check for empty fiels
        if(empty($first_name) || empty($last_name) || empty($email) || empty($pwd) || empty($passport_number) || empty($expiration_date) || empty($country_id)){
            header("location: ../home.php?signup=empty");
                exit();
        }
}

else{
    
    //check for invalid charecters
    if(!preg_match("/^[a-zA-Z]*$/"), $first_name) || !preg_match("/^[a-zA-Z]*$/"), $last_name))
        header("location: ../home.php?signup=invalid");
        exit();
}
    else{
        //check if email is valid
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         header("location: ../home.php?signup=email");
             exit();
        }
        else{
            $sql="select * FROM users WHERE passport_number='$passport_number'";
            result = mysqli_query($conn,$sql);
            $resultCheck=mysqli_num_rows($result);
            
            if($resultCheck>0){
                header("Location: ..//home.php?signup=usertaker");
                $hashedpwd = password_hash($pwd,PASSWORD_DEFAULT);
                //INSERT the user in DB
                $sql="INSERT INTO users (first_name,last_name,email,pwd,passport_number,expiration_date,country_id) VALUES('$first_name','$last_name','$email','$hashedpwd','$passport_number','$expiartion_date','$country_id');";
                $result=mysql_query($conn,$sql);
                header("location: ../home.php?signup=success");
            }
        }
        
    }
}
   
else{
    header("Location: ../home.php")
        exit();
}