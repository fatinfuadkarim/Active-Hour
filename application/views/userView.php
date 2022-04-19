
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Hey Tell me About your interests  </h1>
<?php
foreach($data as $user):
echo $user->fullName . "<br>";
echo $user->email. "<br>";
echo $user->password;

endforeach;



 ?>


  </body>
</html>
