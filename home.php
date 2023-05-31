<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); // Redirecting To Home Page
}
?>

<html>

  <head>
    <title> About | Save Neonate Life</title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/aboutuss.css">
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
          <a class="navbar-brand" href="home.php">Save Neonate Life</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
          <li class="active"><a href="home.php">Home</a></li>
            <li><a href="patientdetails.php">Patient Details</a></li>
            <li><a href="hsptlreg.php">Hospital Registration</a></li>
            
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
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart 
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
  
  <div class="tagline"><font color="white"><strong>With every new born baby .A little sun rises.</strong></font></div>
</div>

<div class="paragraph1">
<h1><font color="#337ab7">OUR TEAM</font></h1>
<h3><p>Here we introduce the website Save Neonate Life.The main intension of our team is to provide the easiest and fastest way to get the food,why beacause time is valuable and the students do not waste their time .Also they can have more time to relax withoutout queuing for food.</p><p></p></h3>
</div>

<div class="col-xs-12 line"><hr></div>


<div class="col-xs-12 line"><hr></div>

<div class="paragraph1">
<h1><font color="#337ab7"><strong> ABOUT US </font></strong></h1>
<h3>
<p>
  The purpose of <font color="#337ab7"><strong></strong></font> Giving birth to another life is God's gift to women. The last months of pregnancy are
very crucial for women and she should be very careful during those days. According to
survey 9th month miscarriage is around 10%. A new born can die due to lack of timely
treatment or sometimes even after a healthy delivery
</p>
<p>
  <font color="#337ab7"><strong>Save Neonate Life</strong></font>, So, to reduce this we have developed a
website that helps pregnant women to have a safe birth. User has to upload their regular
checkup details on our portal. In our portal we provide an emergency department, the user
can fill the form so that the administrators will respond and contact the hospitals area and try
to provide the service to the patient.
  If the delivery is critical, they want to refer to other
hospitals then patient's database details are sent to that hospital to avoid unwanted checkup
and speed up the treatment .Sometimes, in another case doctors refer to the pediatric hospital
if the normal born baby is observed in critical conditions. But generally those hospitals are
very rare in cities so, we raise a emergency ticket to the those hospitals to avoid queuing
system and provide effective treatment to the baby. We provide an admin page for the
doctor so that they can observe the patient's details before entering the hospital. Our ultimate
goal is to prevent those miscarriages.
</p>
</p>

</h3>  
</div>

<div class="col-xs-12 line"><hr></div>
<div class="paragraph3">
<div class="missionbox">
<div class="missionfont">
<strong>“Still the most magical day of my life was the day I became a mom.”</strong>

</div>

</div>

</div>    

<div class="paragraph1">
<h1><font color="#337ab7"><strong>  Save Neonate Life   </font></strong></h1>


<br>
</footer>
</html>