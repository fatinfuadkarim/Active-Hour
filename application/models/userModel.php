<?php
class userModel extends database {
public function myData(){

$id=1;


if($this->Query("SELECT * FROM users WHERE id= ?",[$id])){

return $this-> fetchall();

}




}
}



?>
