<?php 
session_start();
if(isset($_POST['submit'])){
    include 'connect.php';
    
    $passport_number=$_POST['passport_number'];
    $pwd=$_POST['pwd'];
    
    if(empty($passport_number)||empty($pwd))
    {
        header("Location:home.php?login=error");
        exit();
    }
    else
    {
        $sql="SELECT *FROM users where passport_number ='$passport_number';";
        $result=mysqli_query($conn,$sql);
        $resultCheck=mysqli_num_rows($result);
        
        if($resultCheck < 1){
            header("Location:home.php?login=error");
            error();
        }else{
            if($row=mysqli_fetch_assoc($result))
            { 
                $pwd_check=password_verify($pwd,$row['pwd']);
                if($pwd_check==false)
                {
                    header("Location:home.php?login=error");
                    exit();
                }elseif($pwd_check=true)
                {
                    $_SESSION['u_fname'] = $row['first_name'];
                    $_SESSION['u_lname'] = $row['last_name'];
                    $_SESSION['u_email'] = $row['email'];
                    $_SESSION['u_pass_no'] = $row['passport_number'];
                    $_SESSION['u_ex_date'] = $row['expiration date'];
                    $_SESSION['u_country_id'] = $row['country_id'];
                    header("Location:flights.php");
                    exit();
                }
            } 
        }
        
    }
}

else{
    header("Location:home.php?login=error");
    exit();
}
