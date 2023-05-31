<?php
if(isset($_POST["send"])){
    $mailto="prudhviraj1690@gmail.com";
    $name1="save neonate life";
      $form=$_POST['email'];
      $name=$_POST['name'];
      $number=$_POST['mobile'];
      $subject=$_POST['subject'];
    $city = $_POST['pincode'];
    $subject2="Your Message Submitted Successfully | Facile Food";
    $message ="Patient Name: ". $name."\n\n Patient Mail: ". $form. "\n\n Patient mobileno: :".  $number. "\n\n Patient city pincode:" . $city . "\n\n Wrote the folllowing message". "\n\n" . $_POST['message'];
      $message2 ="Dear " .$name. "\n\n Don't get panic! we will arragane your needs our team will contact you immediately";
      $headers = "From: ".$name;
      $headers2 ="From: " .$name1;
      mail($mailto, "Emergency", $message,$headers);
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
        <h1>please donot get panic! we will arrange your needs our team will contact you immediately</h1>
        <p class="back">Go back to the <a href="index.php">homepage</a>.</p>
        
    </div>
</body>
</html>



';
}

?>
