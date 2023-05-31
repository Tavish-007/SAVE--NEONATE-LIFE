<?php
session_start();
?>

<html>

  <head>
    <title>Save Neonate Life</title>
    </head>


    <link rel="stylesheet" type = "text/css" href ="css/index.css">
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
          <a class="navbar-brand" href="index.php">Save Neonate Life</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active" ><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Emergency</a></li>
            <li><a href="kid.php">kid hospitals</a></li>
          </ul>
          <?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
                 <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="details.php"><span class="glyphicon glyphicon-cutlery"></span>Pateint Details </a></li>
            
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
          
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>

            </ul>
            </li>
          </ul>

<?php
}
?>
       </div>

      </div>
    </nav>

    <div class="wide">
      	<div class="col-xs-5 line"><hr></div>
        <div class="tagline">Save Neonate Life </div>
        <div class="col-xs-5 line"><hr></div>
        
    </div>
    <br>
    
    <div class="col-xs-12 line"><hr></div>

<div class="paragraph1">
<h1>Welcome to Save Neonate Life</h1>
    <p><br> 
      <h4>Giving birth to another life is God's gift to women. The last months of pregnancy are 
very crucial for women and she should be very careful during those days. According to 
survey 9th month miscarriage is around 10%.
    </p>
    <p>
   </h4>
    </p>
    </div>
    <div class="paragraph1">

        <p><b><h3>Contact Details of Team Save Neonate Life are given below.</h3></b></p>
        <p class="edit2">
        
        <strong>Email      :</strong>  <a href="mailto:tavish.v007@gmail.com target="_blank">tavish.v007@gmail.com</a>
        |
        <strong>Telephone  :</strong>  8123044768
        
        </p>
        <p class="edit2"><strong>Get in touch with us on Social Media.</strong></p>
        <pre><a href="https://www.facebook.com/FoodExploria/" target="_blank"><img src="images/facebook.jpg" width="50px" height="50px"></a>  <a href="https://twitter.com/login" target="_blank"><img src="images/googleplus.png" width="50px" height="50px"></a>  <a href="https://www.instagram.com/accounts/login/" target="_blank"><img src="images/twitter.jpg" width="50px" height="50px"></a>  <a href="https://www.facebook.com/FoodExploria/" target="_blank"><img src="images/insta.jpg" width="50px" height="50px"></a></pre>
        <!--p class="edit2">We even provide you a platform to share your food experiences and reviews by mailing it to us at -->
          <a href="mailto:tavish.v007@gmail.com target="_blank">tavish.v007@gmail.com</a> 
      
</div>

  


</body>

<footer class="container-fluid bg-4 text-center">
<br>
<p> <h3 align="center">Save Neonate Life</h3> </p>
<br>
</footer>
</html>
    
