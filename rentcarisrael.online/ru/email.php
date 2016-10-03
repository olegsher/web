<?php 
if(isset($_POST['submit'])){
    $to = "test@sher.biz"; // this is your Email address
    $reqemail = "admin@sher.biz";
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
    $headers = "From: " . strip_tags($from) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($reqemail) . "\r\n";
    $headers .= "CC: oleg@sher.biz\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    
    
    $subject = $_POST['First_name'] . " " . $_POST['Last_name'] . " " . $_POST['car-select'] . " " . "rentcarisrael.online";    
//    $message =
            $message = '<html><body>';

$message .= '<img src="//css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['First_name']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['First_name']) . "</td></tr>";
$message .= "<tr><td><strong>Type of Change:</strong> </td><td>" . strip_tags($_POST['First_name']) . "</td></tr>";
$message .= "<tr><td><strong>Urgency:</strong> </td><td>" . strip_tags($_POST['First_name']) . "</td></tr>";

            $_POST['First_name'] . " " . $_POST['Last_name'] . "Religious price - " . $_POST['Religious'] . "\n\n" 
            . "Phone " . $_POST['phone'] . "Email " . $_POST['email'] . "\n\n" 
            . "Age " . $_POST['age'] . "Driver Experience " . $_POST['DriverExperience'] . "\n\n" 
            . "Car Category " . $_POST['car-select'] . "\n\n" 
            . "Pickup branch " . $_POST['pickup-location'] . "Pickup date " . $_POST['pickup-date'] . "Pickup tine " . $_POST['pickup-time'] . "\n\n" 
            . "Dropoff branch " . $_POST['dropoff-location'] . "Dropoff date " . $_POST['dropoff-date'] . "Dropoff time " . $_POST['dropoff-time'] . "\n\n" 
            . "SuperCDW - " . $_POST['SuperCDW'] . "SuperTP - " . $_POST['SuperTP'] . "\n\n" 
            . "Children seats - " . $_POST['childseat'] . " " . $_POST['GPS'] . "GPS - " . $_POST['addDriver'] . "RoadSafe - " . $_POST['RoadSafe'] . "\n\n"           
            . "Message: " . $_POST['message'];
$message .= "</table>";
$message .= "</body></html>";
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

<div class="container">
	<div class="col-md-5 bann-info1 wow fadeInLeft animated" data-wow-delay=".5s">
<!--		<i class="fa fa-columns"></i>-->
<i> <img src="images/Thrifty-Israel.jpg" alt="машина прокат, машина прокат Израиле, аренда машины Израиль" class="img-responsive" /></i>
		<h3>МЕЖДУНАРОДНАЯ КОМПАНИЯ ПРОКАТА АВТОМОБИЛЕЙ</h3>
	</div>
	<div class="col-md-7 bann-info wow fadeInRight animated" data-wow-delay=".5s">
		<h1>Форма аренды проката автомобиля в Израиле</h1>
                <form id="contactform" action="" method="post">
		<div class="ban-top">
			<div class="bnr-left">
				<label class="inputLabel">Выбирайте класс автомобиля</label>
<!--				<input class="city" type="text" value="Enter a city" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter a city';}" required=>-->
                                <!-- Car select start -->
                        
						 <select type="text" value="Выбирайте машину" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Выбирайте машину';}" name="car-select" id="car-select" required = "required" autofocus>							
							<option value="Category Q" >Smart Fortwo или похожая в категории Q - от 9$ в сутки</option>
							<option value="Category B" >Suzuki Alto или похожая в категории B - от 9$ в сутки</option>
							<option value="Category C" >Toyota Aygo или похожая в категории C - от 10$ в сутки</option>
							<option value="Category D" >Hyundai i20 или похожая в категории D - от 11$ в сутки</option>
							<option value="Category E" >Ford Fiesta или похожая в категории E - от 12$ в сутки</option>
							<option value="Category F" >Kia Forte или похожая в категории F - от 14$ в сутки</option>							
							<option value="Category I" >Mazda 3 или похожая в категории I - от 16$ в сутки</option>
							<option value="Category H" >Honda Civic или похожая в категории H - от 22$ в сутки</option>
							<option value="Category M" >Mazda 6 или похожая в категории M - от 28$ в сутки</option>
<!--                                                    <option value="Category FH" >Honda Insight Hybrid или похожая в категории - от 17$ в сутки</option>-->
							<option value="Category MH" >Honda Accord Hybrid или похожая в категории MH - от 38$ в сутки</option>
							<option value="Category T" >Fiat Doblo(ручник, 5 мест) или похожая в категории T - от 35$ в сутки</option>
							<option value="Category J" >Nissan Qashqai(автомат, 5 мест) или похожая в категории J - от 38$ в сутки</option>
							<option value="Category U" >Mazda 5(автомат, 7 мест) или похожая в категории U - от 35$ в сутки</option>
                                                        <option value="Category V" >Ford Galaxy V(автомат, 7 мест) или похожая в категории V - от 52$ в сутки</option>
                                                        <option value="Category S" >Hyundai i800(ручник, 8 мест) или похожая в категории S - от 59$ в сутки</option>
                                                        <option value="Category V8" >Toyota Sienna(автомат, 8 мест) или похожая в категории V8 - от 75$ в сутки</option>
                                                        <option value="Category Y" >Citroen Jumpy(ручник, 9 мест)или похожая в категории Y - от 49$ в сутки </option>
							<option value="Category Z" >Hyundai i800(автомат, 9 мест) или похожая в категории Z - от 95$ в сутки</option>
                                                        <option value="Category R" >Chevrolet Malibu или похожая в категории R - от 52$ в сутки</option>
                                                        <option value="Category P" >Buick LaCrosse или похожая в категории P - от 71$ в сутки</option>
							<option value="Category K" >BMW 318i или похожая в категории K - от 72$ в сутки</option>
							<option value="Category W" >BMW i535 или похожая в категории W - от 110$ в сутки</option>
							<option value="Category O" >Toyota Highlander(автомат) или похожая в категории O - от 149$ в сутки</option>
						</select>
                             <br />
                      </div>
			<!-- Car select end -->
                     <div class="clearfix"></div>
                      <hr />  
                    
                        <div class="bnr-left">
				<label class="inputLabel">Аренда</label>
<!--				<input class="city" type="text" value="Отделение" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter a city';}" required=>-->
                                <select class="city" type="text" value="Отделение" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Отделение';}"  name="pickup-location" id="pickup-location" required=>
                                        <option value="">Отделение</option>
                                        <option value="Аэропорт Бен Гурион">Аэропорт Бен Гурион</option>
                                        <option value="Тель Авив, ул. ха-Яркон, 80">Тель Авив, ул. ха-Яркон, 80</option>
                                        <option value="Тель Авив, ул. ха-Масгер, 9">Тель Авив, ул. ха-Масгер, 9</option>
                                        <option value="Иерусалим, ул. Кинг Давид, 19">Иерусалим, ул. Кинг Давид, 19</option>
                                        <option value="Хайфа, шдерот ха-Гистадрут, 88">Хайфа, шдерот ха-Гистадрут, 88</option>
                                        <option value="Нетания, ул. Усишкин, 1">Нетания, ул. Усишкин, 1</option>
                                        <option value="Тверия, ул. ха-Ярден, 71">Тверия, ул. ха-Ярден, 71</option>
                                        <option value="Эйлат, ул. Шешет ха-Ямим, 3">Эйлат, ул. Шешет ха-Ямим, 3</option>								
                                        <option value="Афула, ул. Менахем Бегин, 70">Афула, ул. Менахем Бегин, 70</option>
                                        <option value="Ашдод, ул. ха-Оргим, 7">Ашдод, ул. ха-Оргим, 7</option>
                                        <option value="Беэр Шева, дерех Хеврон, 129">Беэр Шева, дерех Хеврон, 129</option>
                                        <option value="Бейт Шемеш, ул. Нахалат Зоар, 10">Бейт Шемеш, ул. Нахалат Зоар, 10</option>
                                        <option value="Бней Брак, ул. Каханман, 106">Бней Брак, ул. Каханман, 106</option>
                                        <option value="Бней Брак, ул. Мивца Кадош, 64">Бней Брак, ул. Мивца Кадош, 64</option>
                                        <option value="Герцелия, ул. Аба Евен, 8">Герцелия, ул. Аба Евен, 8</option>
                                        <option value="Холон, ул. ха-Меркава, 73">Холон, ул. ха-Меркава, 73</option>
                                        <option value="Кфар Саба, ул. ха-Таяс, 17">Кфар Саба, ул. ха-Таяс, 17</option>								
                                        <option value="Кирьят Шмона, ул. ха-Ярден, 1">Кирьят Шмона, ул. ха-Ярден, 1</option>
                                        <option value="Нес Циона, ул. ха-Патиш, 10">Нес Циона, ул. ха-Патиш, 10</option>
                                        <option value="Петах Тиква, ул. Жаботински, 82">Петах Тиква, ул. Жаботински, 82</option>
                                        <option value="Реховот, ул. Герцль, 96">Реховот, ул. Герцль, 96</option>
                                        <option value="Ришон ле-Цион, ул. Сахаров, 14">Ришон ле-Цион, ул. Сахаров, 14</option>
                                </select>
                                <input class="date" name="pickup-date" id="datepicker" type="text" value="dd-mm-yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd-mm-yyyy';}" required=>
                                <input type="time" name="pickup-time" id="pickup-time" placeholder="Время" required = "required" value="hh:mm" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'hh:mm';}">
			
			</div>
				
                    
                        <div class="bnr-right">
				<label class="inputLabel">Возврат</label>				
<!--				<input class="city" type="text" value="Отделение" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter a city';}" required=>-->
                                <select class="city" onfocus="this.value = '';"   name="dropoff-location" id="dropoff-location" required=>
                                        <option value="">Отделение</option>
                                        <option value="Аэропорт Бен Гурион">Аэропорт Бен Гурион</option>
                                        <option value="Тель Авив, ул. ха-Яркон, 80">Тель Авив, ул. ха-Яркон, 80</option>
                                        <option value="Тель Авив, ул. ха-Масгер, 9">Тель Авив, ул. ха-Масгер, 9</option>
                                        <option value="Иерусалим, ул. Кинг Давид, 19">Иерусалим, ул. Кинг Давид, 19</option>
                                        <option value="Хайфа, шдерот ха-Гистадрут, 88">Хайфа, шдерот ха-Гистадрут, 88</option>
                                        <option value="Нетания, ул. Усишкин, 1">Нетания, ул. Усишкин, 1</option>
                                        <option value="Тверия, ул. ха-Ярден, 71">Тверия, ул. ха-Ярден, 71</option>
                                        <option value="Эйлат, ул. Шешет ха-Ямим, 3">Эйлат, ул. Шешет ха-Ямим, 3</option>								
                                        <option value="Афула, ул. Менахем Бегин, 70">Афула, ул. Менахем Бегин, 70</option>
                                        <option value="Ашдод, ул. ха-Оргим, 7">Ашдод, ул. ха-Оргим, 7</option>
                                        <option value="Беэр Шева, дерех Хеврон, 129">Беэр Шева, дерех Хеврон, 129</option>
                                        <option value="Бейт Шемеш, ул. Нахалат Зоар, 10">Бейт Шемеш, ул. Нахалат Зоар, 10</option>
                                        <option value="Бней Брак, ул. Каханман, 106">Бней Брак, ул. Каханман, 106</option>
                                        <option value="Бней Брак, ул. Мивца Кадош, 64">Бней Брак, ул. Мивца Кадош, 64</option>
                                        <option value="Герцелия, ул. Аба Евен, 8">Герцелия, ул. Аба Евен, 8</option>
                                        <option value="Холон, ул. ха-Меркава, 73">Холон, ул. ха-Меркава, 73</option>
                                        <option value="Кфар Саба, ул. ха-Таяс, 17">Кфар Саба, ул. ха-Таяс, 17</option>								
                                        <option value="Кирьят Шмона, ул. ха-Ярден, 1">Кирьят Шмона, ул. ха-Ярден, 1</option>
                                        <option value="Нес Циона, ул. ха-Патиш, 10">Нес Циона, ул. ха-Патиш, 10</option>
                                        <option value="Петах Тиква, ул. Жаботински, 82">Петах Тиква, ул. Жаботински, 82</option>
                                        <option value="Реховот, ул. Герцль, 96">Реховот, ул. Герцль, 96</option>
                                        <option value="Ришон ле-Цион, ул. Сахаров, 14">Ришон ле-Цион, ул. Сахаров, 14</option>
                                </select>
                                <input class="date" name="dropoff-date" id="datepicker1" type="text" value="dd-mm-yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd-mm-yyyy';}" required=>
                                <input type="time" name="dropoff-time" id="dropoff-time" placeholder="Время" value="hh:mm" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'hh:mm';}" required=>
                        
			</div>
<!--				<div class="clearfix"></div>-->
		</div>
		<div class="ban-bottom">
                    
				<div class="clearfix"></div>
				<!---start-date-piker---->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
					<script>
						$(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
						});
					</script>
			<!---/End-date-piker---->
                       <section> 
                           <hr />
                        Ваше имя <input type="text" name="First_name" placeholder="на английском" required=>
                        Фамилия <input type="text" name="Last_name" placeholder="на английском" required=> <br />
                        Почта <input type="email" name="email" placeholder="на нее придет ваучер" required=>
                        Телефон <input type="text" name="phone" placeholder="включая код страны" required=> <br />
                        Возраст водителя <input type="number" name="age" min="21" max="70" placeholder="от 21" required=> 
                        Стаж вождения <input type="number" name="DriverExperience" min="1" max="70" placeholder="" required=> 
                        </section>
		</div>
<!--		<div class="sear">-->
<!--			<form action="//formspree.io/rentcar@vastama.com" method="POST">
				<button class="seabtn">Search Buses</button>-->
			
                        <section>
                            <hr />
                        <input type="checkbox" name="SuperCDW" value="V"> Добавить отмену личного участия при повреждении машины<br>
                        <input type="checkbox" name="SuperTP" value="V"> Добавить отмену личного участия при угоне машины<br>
                        <input type="checkbox" name="childseat" value="V"> Детское сидение 5$ в день<br>
                        <input type="checkbox" name="GPS" value="V"> Навигатор 10$ в день<br>
<!--                        <input type="checkbox" name="youngDriver" value="youngDriver"> Молодой водитель, менее года<br>-->
                        <input type="checkbox" name="addDriver" value="V"> Дополнительный водитель 2$ в день (Бесплатно при заказе 7+ дней)<br>
                        <input type="checkbox" name="RoadSafe" value="V"> Быстрая помощь на дороге 4$ в день<br>
                        <input type="checkbox" name="Religious" value="V"> Я соблюдаю шабат. Расчет по прейскуранту для верующих <br>
<!--                        <input type="checkbox" name="vehicle1" value="Bike"> I have a bike<br>
                        <input type="checkbox" name="vehicle1" value="Bike"> I have a bike<br>-->
                        <textarea name="message" placeholder="Дополнительная информация, вопрос..."></textarea> <br />
                        </section>
                        
                        <input type="submit" name="submit" value="ЗАКАЗАТЬ">
                        
  </form>
                
 

<!--		</div>-->
	</div>
    <hr />
    * Указанные цены соответствуют прейскуранту дилера компании ТРИФТИ и значительно отличаются от расценок на сайте\отделении поставщика <br />
    * Указанные цены не включают страховки <br />
    * Указанные цены не включают НДС(только для лиц с Израильским гражданством) <br />
    Часы работы отделений - аэропорт Бен Гурион 24\7, остальные отделения 8-18, пятница 8-13  <br /> 
    Минимальный возраст водителя 21 год <br />
    Водитель 21-23 года - дополнительная оплата "молодой водитель" - 10$ в день <br />
    Модели автомобилей представлены исключительно для примера и при выдаче компания имеет право предоставить автомобиль того же класса, но другой марки.
	<div class="clearfix"></div>
        
    
    
    
    
    
    
    
<?php include("__footer.html"); ?>
</body>
