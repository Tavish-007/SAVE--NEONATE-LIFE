<?php
session_start();
?>

<html>

  <head>
    <title> Contact | Save Neonate Life</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/contactus.css">
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
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li class="active"><a href="contactus.php">Emergency</a></li>
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

    <br>

    <div class="heading">
     <strong>Want to contact <span class="edit">Save Neonate Life</span>?</strong>
     <br>
    Emergency!!!..<br>  
    Here are a few ways to get in touch with us.
    </div>

    <div class="col-xs-12 line"><hr></div>

    <div class="container" >
    <div class="col-md-5" style="float: none; margin: 0 auto;">
      <div class="form-area">
        <form method="post" action="sent.php">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Emergency Form</h3>

          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus="">
          </div>

          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>     

          <div class="form-group">
            <input type="Number" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="problem" required>
          </div>
          <div class="container">
	<div><h2>Get City State from Pincode</h2></div>
	<div>&nbsp;</div>
	<form autocomplete="off" method="post" id="frmPinCode" style="text-align:center;">
		<div>
			<input type="text" class="textbox" name="pincode" id="pincode" placeholder="Enter Pincode"  autocomplete="new-password">
			<input type="button" class="btn" value="Get Details" onclick="get_details()" >
		</div>
		<div>&nbsp;</div>
		<div>
			<input type="text" class="textbox" id="city"  disabled placeholder="City"><br/><br/>
			<input type="text" class="textbox" id="state" disabled placeholder="State" name="city">
		</div>
</div><div>&nbsp;</div>

          <div class="form-group">
           <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Current Problem" maxlength="140" rows="7"></textarea>
           <span class="help-block"><p id="characterLeft" class="help-block">Max Character length : 140 </p></span>
          </div> 
          <input type="submit" name="send" type="button" id="send"  class="btn btn-primary pull-right"/>    
        </form>
      
      </div>
    </div>
      
    </div>
    <div class="paragraph1">

<p><h3>We are here to answer any queries you may have about our <font color="#337ab7"><strong>Neonate Life</strong></font> experiences. Reach out to us and we will respond as soon as we can.</h3></p>
   <!-- <p><h3>Even if there is something you always wanted to experience and couldn't find it on <font color="#337ab7"><strong>FoodExploria</strong></font>, please do let us know and we here at <font color="#337ab7"><strong>FoodExploria promise to do our best to find it for you and suggest you the best of best.</strong></font> </h3></p>
    <p><b><h3>Contact Details of Team FoodExploria are given below.</h3></b></p> -->
    <p class="edit2">
    
    <strong>Email      :</strong>  <a href="facilefoodhelp@gmail.com">neonatelife@gmail.com</a>
    |
    <strong>Telephone  :</strong>  8123044768
    
    </p>
    <p class="edit2"><strong>Get in touch with us on Social Media.</strong></p>
    <pre><a href="https://www.facebook.com/FoodExploria/" target="_blank"><img src="images/facebook.jpg" width="50px" height="50px"></a>  <a href="https://twitter.com/login" target="_blank"><img src="images/googleplus.png" width="50px" height="50px"></a>  <a href="https://www.instagram.com/accounts/login/" target="_blank"><img src="images/twitter.jpg" width="50px" height="50px"></a>  <a href="https://www.facebook.com/FoodExploria/" target="_blank"><img src="images/insta.jpg" width="50px" height="50px"></a></pre>
    <p class="edit2"> Giving birth to another life is God's gift to women <a href="facilefoodhelp@gmail.com">neonatelife@gmail.com</a> </p>
  

</div>


<footer class="container-fluid bg-4 text-center">
<br>
<p></p>
<br>
</footer>

    <?php
if (isset($_POST['submit'])){
require 'connection.php';
$conn = Connect();

$Name = $conn->real_escape_string($_POST['name']);
$Email_Id = $conn->real_escape_string($_POST['email']);
$Mobile_No = $conn->real_escape_string($_POST['mobile']);
$Subject = $conn->real_escape_string($_POST['subject']);
$Message = $conn->real_escape_string($_POST['message']);

$query = "INSERT into contact(Name,Email,Mobile,Subject,Message) VALUES('$Name','$Email_Id','$Mobile_No','$Subject','$Message')";
$success = $conn->query($query);

if (!$success){
  die("Couldnt enter data: ".$conn->error);
}

$conn->close();
}
?>
<script>
function get_details(){
	var pincode=jQuery('#pincode').val();
	if(pincode==''){
		jQuery('#city').val('');
		jQuery('#state').val('');
	}else{
		jQuery.ajax({
			url:'get.php',
			type:'post',
			data:'pincode='+pincode,
			success:function(data){
				if(data=='no'){
					alert('Wrong Pincode');
					jQuery('#city').val('');
					jQuery('#state').val('');
				}else{
					var getData=$.parseJSON(data);
					jQuery('#city').val(getData.city);
					jQuery('#state').val(getData.state);
				}
			}
		});
	}
}
</script>

     </body>

  
</html>
