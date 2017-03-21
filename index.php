<?php require "init.php" ?>
<!DOCTYPE html>
<html>
<?php require 'header.php' ?>
<body>
	<?php require "navbar.php"; ?>
	<div class="area-under-nav">
		<div class="container">
			<div class="col-xs-12">
				<legend><div class="aerodrome">
					<img class="logo" src="images/AEN.png">Aerodrome Evreux Normandie
				</div></legend>
			</div>
		</div>
	</div>

	<div class="col-xs-12 part">
		<center><div class="caroussel">
			<div><img class="img-caroussel" src="images/plane1.jpg"></div>
			   <div><img class="img-caroussel" src="images/planes.jpg"></div>
			   <div><img class="img-caroussel" src="images/plane2.jpg"></div>
		</div></center>
	</div>
	<div class="col-xs-12 part-one">
		<div class="col-lg-6 part-one-txt">
			<?php
				$bdd = connectBdd();

				   $weather = $bdd->prepare('SELECT temperature, day, weather_name, wind_speed, weather_name, humidity FROM weather');
				   $weather->execute();
				while($data = $weather->fetch()){
					$timezone  = +1;
					$today = gmdate("Y-m-j H:i:s", time() + 3600*($timezone+date("I")));
					if($data['day'] > $today){
				?>
						<div class="row">
							<div class="col-xs-1"></div>
							<div class="col-xs-10 weather">
								<div class="row">
									<div class="col-xs-12 weather-top">
										<center class="weather-tittle"><b>Quel temps fait-il à Evreux ?</b></center>
									</div>
								</div>
								<div class="row col-xs-12">
									<div class="col-sm-6 weather-img">
										<center><?php
											if($data['weather_name'] == 'Clouds'){  echo "<img class='weather-images' src='images/nuage150.png'>"; } 
											elseif($data['weather_name'] == 'Clear'){ echo "<img class='weather-images' src='images/soleil.png'>"; }
											elseif($data['weather_name'] == 'Rain'){ echo "<img class='weather-images' src='images/pluie.png'>"; } 
											elseif($data['weather_name'] == 'Snow'){ echo "<img class='weather-images' src='images/snow.png'>"; }
										?></center>
									</div>
									<div class="col-sm-6 weather-data">
										<?php echo "<b class='color'>Date:</b> " . $data['day'] . "<br>"; ?>
										<?php echo "<b class='color'>Temps:</b> " . $data['weather_name'] . "<br>"; ?>
										<?php echo "<b class='color'>Température:</b> " . (substr($data['temperature'], 0, 4) - 273) . "°<br>"; ?>
										<?php echo "<b class='color'>Vitesse du vent:</b> " . $data['wind_speed'] . " m/s<br>"; ?>
										<?php echo "<b class='color'>humidité:</b> " . $data['humidity'] . "%<br>"; ?>
									</div>
								</div>
							</div>
							<div class="col-xs-1"></div>
						</div>
				<?php
						break;
					}
				}
				?>
		</div>
		<div class="col-lg-6 part-one-txt">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2622.8455488259074!2d1.2387190154992636!3d48.89928060578095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e14fbbf62fb997%3A0x125a3c9c0027d738!2sRue+de+Damville%2C+27220+Les+Authieux!5e0!3m2!1sfr!2sfr!4v1489332703763" width="80%" height="237" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
	<?php require "footer.php" ?>	
	<?php require "js.php" ?>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  	<script type="text/javascript" src="slick/slick.min.js"></script>
  	<script type="text/javascript">
  		$('.caroussel').slick({
  			dots: true,
  			slidesToShow: 1,
  			SlidesToScroll: 1,
  			autoplay: true,
  			autoplaySpeed: 2000,
  			speed: 1000,
  			arrow: true,
  			mobileFirst: true,
  			adaptiveHeight: true,
  			accessibility: true
  		});
  	</script>
</body>
</html>