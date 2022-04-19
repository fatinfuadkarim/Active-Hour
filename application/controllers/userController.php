<?php
class userController extends framework{

public function index(){
  echo "UserController";
}

public function userMethod(){

  $myModel = $this->model('userModel');
   if($myModel->myData()){
   $result = $myModel->myData();
} else {
     echo "Sorry";
  }



  //$myData = [
 //'title' => "our first project",
//'body' =>   'Hope For The Best'

//  ];
 $this->view("userView",$result);
}

}


 ?>
