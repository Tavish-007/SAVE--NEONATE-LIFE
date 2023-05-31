<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
?>
<html>
<head>
    <title> Save Neonate Life </title> 
    <style>
      input{
        width:400px;
      } 
      </style>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/managersignup.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>


    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
     
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"> Save Neonate Life </a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li  ><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Emergency</a></li>
            <li><a href="kid.php">kid hospitals</a></li>
          </ul>
          <?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="details.php"><span class="glyphicon glyphicon-cutlery"></span>Patient Details </a></li>
            
             (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
              </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
              <li> <a href="#"> Admin Sign-up</a></li>
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
              <li> <a href="#"> Admin Login</a></li>
            </ul>
            </li>
          </ul>

<?php
}
?>


        </div>

      </div>
    </nav>

    
    <div class="heading">
     <strong><span> Hello  <?php echo $_SESSION['login_user2']; ?> </span></strong>
     <br>Welcome to Save Neonate Life<br>
     <p>Get started by creating your account</p>
    </div>

    


<div class="xx">
    <div class="container" style="margin-top: 4%; margin-bottom: 2%;bgcolor:black">
      <div class="col-md-5 col-md-offset-4">
      <div class="panel panel-primary">
        <div class="panel-heading"> Create Account </div>
        <div class="panel-body">
          
        <form id="register-form" role="form" action="pdb.php" method="post">
            <input type="hidden" name="id">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                      <label for="userid" class="control-label">userid</label>
                      <input type="text" class="form-control form-control-sm rounded-0" reqiured="" name="userid" id="userid" value=<?php echo $_SESSION['login_user2']; ?>>
                  </div>
                  <div class="form-group">
                      <label for="firstname" class="control-label">Patient First Name</label>
                      <input type="text" class="form-control form-control-sm rounded-0" reqiured="" name="firstname" id="firstname">
                  </div>
                  <div class="form-group">
                      <label for="lastname" class="control-label">Patient Last Name</label>
                      <input type="text" class="form-control form-control-sm rounded-0" name="lastname" id="lastname">
                  </div>
                  <div class="form-group">
                      <label for="hname" class="control-label">Hosiptal Name</label>
                      <input type="text" class="form-control form-control-sm rounded-0" reqiured="" name="hname" id="hname">
                  </div>
                  <div class="form-group">
                      <label for="hloc" class="control-label">Hospital Location</label>
                      <input type="text" class="form-control form-control-sm rounded-0" reqiured="" name="hloc" id="hloc">
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                      <label for="dname" class="control-label">Doctor name</label>
                      <input type="text" class="form-control form-control-sm rounded-0" reqiured="" name="dname" id="dname">
                  </div>
                  <div class="form-group">    
                      <label for="hconc" class="control-label">Hospital Contact</label>
                      <input type="text" class="form-control form-control-sm rounded-0" reqiured="" name="hconc" id="hconc">
                  </div>
                  <div class="form-group">    
                      <label for="wop" class="control-label">Weeks of pregnancy</label>
                      <input type="text" class="form-control form-control-sm rounded-0" reqiured="" name="wop" id="wop">
                  </div>
                  
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                  <label for="" class="control-label">Upload File</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input rounded-0" id="customFile" name="customFile">
                    <label class="custom-file-label rounded-0" for="customFile" >Choose file</label>
                  </div>
          </div>
              </div>
              <div class="row">
          <div class="form-group col-xs-4">
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
          </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group d-flex justify-content-center">
            <img src="<?php echo validate_image('') ?>" alt="" id="cimg" class="img-fluid img-thumbnail">
          </div>
              </div>
          </div>
          <div class="row">
            <div class="col-8">
              <a href="./login.php">Already hava an Account</a>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Upload Patient Checkup details</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        </div>
        
      </div>
      
    </div>
    </div>
    </div>
    </body>
    
  <footer class="container-fluid bg-4 text-center">
  <br>
  <p>Save Neonate Life </p>
  <br>
  </footer>
</html>