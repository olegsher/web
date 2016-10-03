<?php 
if(isset($_POST['submit'])){
    $to = "test@sher.biz"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['First_name'];
    $last_name = $_POST['Last_name'];
    $phone = $_POST['phone'];
    
    $car_select = $_POST['car-select'];
    $pickup_location = $_POST['pickup-location'];
    $pickup_date = $_POST['pickup-date'];
    $pickup_time = $_POST['pickup-time'];
    $dropoff_location = $_POST['dropoff-location'];
    $dropoff_date = $_POST['dropoff-date'];    
    $dropoff_time = $_POST['dropoff-time'];
    
    $age = $_POST['age'];
    $DriverExperience = $_POST['DriverExperience'];
    
    $SuperCDW = $_POST['SuperCDW'];
    $SuperTP = $_POST['SuperTP'];
    $childseat = $_POST['childseat'];
    $GPS = $_POST['GPS'];
    $addDriver = $_POST['addDriver'];
    $RoadSafe = $_POST['RoadSafe'];    
    $Religious = $_POST['Religious'];
    
    $message = $_POST['message'];
   
    
    
    
    
    
    
    $headers = "From:" . $from;
    $subject = $first_name . " " . $last_name . "rentcarisrael.online";    
    $message = $first_name . "\n\n" . $last_name . "\n\n" . $_POST['car-select'] . "\n\n" . $_POST['message'];
    mail($to,$subject,$message,$headers);
    
    $subject2 = "Заказ автомобиля на rentcarisrael.online";
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
    $headers2 = "From:" . $to;    
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    
    
    
    
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Недорогая аренда прокат автомобиля в Израиле | RentCarIsrael.online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="машина прокат, машина прокат Израиле, аренда машины Израиль, avto prokat, prokat mashin, auto arenda, прокат аренда машин, где можно взять машину напрокат, заказать машину, аренда иномарок, arenda avto, стоимость аренды машины, израиль прокат автомобилей, съем машины Израиле, аренда авто, прокат машины, сьем автомобиля,автомобиль,  машина Израиле, дешевый прокат автомобиля" />
<meta  name="description"  content="Аренда прокат автомобиля в Израиле. Бюджетные авто, Миниваны, семейные машины, класс люкс и джипы звоните +972-58-7710101" />
<meta property="og:title" content="Аренда прокат автомобилей и минивэнов в Израиле по низким ценам от компании Vastama Ltd тел +972-58-7710101" />
<meta property="og:type" content="website" />

<?php include("__header.html"); ?>
</header>
<body>
<?php include("__counters.html"); ?>
<?php include("__top.html"); ?>
<?php include("_index.html"); ?>
<?php include("__footer.html"); ?>
</body>
