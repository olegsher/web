<?php 
if(isset($_POST['submit'])){
    $to = "admin@sher.biz"; // this is your Email address
    $reqemail = "admin@sher.biz";
    
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['First_name'];
    $last_name = $_POST['Last_name'];
    $phone = $_POST['phone'];
    
    
    $dropoff_location = $_POST['dropoff-location'];
    $pickup_date = $_POST['pickup-date'];
    $pickup_time = $_POST['pickup-time'];     
    
    $message = $_POST['message'];
   
//    $headers = "From:" . $from;
    $headers = "From: " . strip_tags($reqemail) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($reqemail) . "\r\n";
//    $headers = "Return-path: " . strip_tags($reqemail) . "\r\n";
    $headers .= "CC: admin@vastama.com\r\n";
    
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    
    
    $subject = $_POST['First_name'] . " " . $_POST['Last_name'] . " " . $_POST['dropoff-location'] . " " . "rentcarisrael.online";    
            $message = '<html><body>';
            $message = '';
$message .= '<img src="http://www.rentcarisrael.online/images/Thrifty-Israel.jpg" alt="Website Change Request" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>First Name:</strong> </td><td>" . strip_tags($_POST['First_name']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Last Name:</strong> </td><td>" . strip_tags($_POST['Last_name']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr><td><strong>Contact Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Destination:</strong> </td><td>" . strip_tags($_POST['dropoff-location']) . "</td></tr>";

$message .= "<tr style='background: #eee;'><td><strong>Pickup date from Ben Gurion:</strong> </td><td>" . strip_tags($_POST['pickup-date']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Pickup time from Ben Gurion:</strong> </td><td>" . strip_tags($_POST['pickup-time']) . "</td></tr>";


$message .= "<tr><td><strong>message:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";


     mail($to,$subject,$message,$headers);
    
    $subject2 = "Ваш заказ автомобиля на rentcarisrael.online";
    $headers2 = "From: " . strip_tags($reqemail) . "\r\n";
    $headers2 .= "Reply-To: ". strip_tags($reqemail) . "\r\n";
    $headers .= "CC: office@vastama.com\r\n";
//    $headers2 = "Return-path: " . strip_tags($reqemail) . "\r\n";
    $headers2 .= "MIME-Version: 1.0\r\n";
    $headers2 .= "Content-Type: text/html; charset=utf-8\r\n";
    // $message2 = "test";
   mail($from,$subject2,$message,$headers2); // sends a copy of the message to the sender  
header('Location: http://www.rentcarisrael.online/thankyou.php');
    }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Трансферы по Израилю | RentCarIsrael.online</title>
<meta name="keywords" content="Трансферы по Израилю" />
<meta  name="description"  content="Трансферы по Израилю по Израилю звоните +972-58-7710101" />
<?php include("__header.html"); ?>
</head>
<body>
<?php include("__facebook.html"); ?>
<?php include("__google.html"); ?>
<?php include("__mailru.html"); ?>
<?php include("__yandex.html"); ?>
<?php include("__shema.html"); ?>

<?php include("__top.html"); ?>
<?php include("_transfer.html"); ?>
<?php include("__footer.html"); ?>
</body>
</html>


