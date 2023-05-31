<?php session_start(); ?>
<?php
    include('connect/connection.php');

    if(isset($_POST["submit"])){
$username = ($_POST['userid']);
$fname =($_POST['firstname']);
$hname =($_POST['hname']);
$hloc = ($_POST['hloc']);
$dname =($_POST['dname']);
$hconc =($_POST['hconc']);
$wop =($_POST['customFile']);
$wp=($_POST['wop']);
$query = "INSERT INTO pdetails(userid,firstname,hospital_name,h_location,Doctor_name,hos_con,Files,weeks) VALUES('$username',' $fname','$hname','$hloc','$dname','$hconc','$wop','$wp')";
$success = $connect->query($query);
echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="index.php">homepage</a>.</p>
        
    </div>
</body>
</html>



';
            }

?>
