<?php session_start(); ?>
<?php
    include('connect/connection.php');

    if(isset($_POST["submit"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $check_query = mysqli_query($connect, "SELECT * FROM login where email ='$email'");
        $rowCount = mysqli_num_rows($check_query);

        if(!empty($email) && !empty($password)){
            if($rowCount > 0){
                ?>
                <script>
                    alert("User with email already exist!");
                </script>
                <?php
            }else{
$fullname = ($_POST['fullname']);
$username =($_POST['username']);
$email = ($_POST['email']);
$contact =($_POST['contact']);
$address =($_POST['address']);
$password = ($_POST['password']);

$query = "INSERT into CUSTOMER(fullname,username,email,contact,address,password) VALUES('" . $fullname . "','" . $username . "','" . $email . "','" . $contact . "','" . $address ."','" . $password ."')";
$success = $connect->query($query);
                $password_hash = password_hash($password, PASSWORD_BCRYPT);

                $result = mysqli_query($connect, "INSERT INTO login (email, password, status) VALUES ('$email', '$password_hash', 0)");
    
                if($result){
                    $otp = rand(100000,999999);
                    $_SESSION['otp'] = $otp;
                    $_SESSION['mail'] = $email;
                    require "Mail/phpmailer/PHPMailerAutoload.php";
                    $mail = new PHPMailer;
    
                    $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';
    
                    $mail->Username='prudhviraj1690@gmail.com';
                    $mail->Password='zcdqkqxxalmplcju';
    
                    $mail->setFrom('prudhviraj1690@gmail.com', 'OTP Verification');
                    $mail->addAddress($_POST["email"]);
    
                    $mail->isHTML(true);
                    $mail->Subject="Your verify code";
                    $mail->Body="<p>Dear user, </p> <h3>Your verify OTP code is $otp <br></h3>
                    <br><br>
                    <p>With regrads,</p>
                    <b>Programming with Lam</b>
                    <h3>https://www.youtube.com/channel/UCKRZp3mkvL1CBYKFIlxjDdg</h3>";
    
                            if(!$mail->send()){
                                ?>
                                    <script>
                                        alert("<?php echo "Register Failed, Invalid Email "?>");
                                    </script>
                                <?php
                            }else{
                                ?>
                                <script>
                                    alert("<?php echo "Register Successfully, OTP sent to " . $email ?>");
                                    window.location.replace('verification.php');
                                </script>
                                <?php
                            }
                }
            }
        }
    }

?>
<?php
if(isset($_POST["send"])){
    $mailto="prudhviraj1690@gmail.com";
    $name1="Save Neonate";
      $form=$_POST['email'];
      $name=$_POST['name'];
      $mbl=$_POST['mobile'];
      $pin=$_POST['pincode'];
      $prb=$_POST['subject'];
      $subject="Helping Hand";
      $subject2="Emergency";
    $message = $_POST['message'];
    $message2="Dear ". $name.",\n\nDon't get panic we will arrange your needs our team will contact you immediately";
      $message ="Pateint Name: ". $name."\n\n Patient Mail: ". $form. "\n\n Patient MobileNO: ". $mbl."\n\n Patient Pincode: ". $pin."\n\n Patient problem: ". $prb. "\n\n Wrote the folllowing message". "\n\n" . $_POST['message'];
      $headers = "From: ".$name;
      $headers2 ="From: " .$name1;
      mail($mailto, $subject2, $message,$headers2);
      mail($form, $subject, $message2,$headers2);
    

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
