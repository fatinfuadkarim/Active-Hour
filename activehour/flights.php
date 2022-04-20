<!doctype html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">

    <title>Interests</title>
    
  </head>

<body style="background-color: #b2b2b2;">

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-blue">
      <a class="navbar-brand" href="home.php" style="color:white;">Interests</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="flights.php">Interests <span class="sr-only">(current)</span></a>
          </li>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        
      </div>
    </nav>
    
    <form action="book_inc.php" method="post" 
    style="margin-top: 5%;
    background-color: white;
    margin-left: 1%;
    margin-right: 1%;
    padding: 1% 1% 1% 1%;
    width: 50%;">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Interests</label>
          <input type="text" name="f_id" class="form-control"  placeholder="Interest Name">
        </div>
        
        
   
      
      <button type="submit" name="submit" class="btn btn-primary">Confirm</button>
    </form>


    
      
    </table>



    <footer>
      <div class="wrapper">
        <div>
          <h5 style="margin-left: 40px; text-decoration: underline; font-size: 20px">Corporate Headquarters</h5>
          <p style="margin-left: 40px; color: #b2b2b2;">
            North South University<br>
            Block-B, Bashundhara<br>
            Dhaka, Bangladesh.
          </p>
        </div>
        <div class="footer-bottom">
          <ul>
            <li><a style="color: skyblue;">© Copyright ActiveHour 2019-2020. All Rights Reserved.</a></li>
            <li><a href="#" id="mycontact" style="margin-right: 40px;">Contact us</a></li>
            <li><a href="partners.php" id="mycontact" style="margin-right: 40px;">Our Partenrs</a></li>
          </ul>
        </div>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>