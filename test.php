<?php require "init.php" ?>
<!DOCTYPE html>
<html>
<?php require 'header.php' ?>
<body>
	<?php require "navbar.php"; ?>
	<br><br><br><br><br><br>
	<?php
	    $bdd = connectBdd();

	    $weather = $bdd->prepare('SELECT temperature, day, weather_name, pressure, wind_speed, weather_name, humidity FROM weather');
	    $weather->execute();

	    $query = $bdd->query('SELECT * FROM oil_products');
	    echo '<br><br><br>';
		echo '<table border = 2>';
		$i = 0;
	    while( $result = $query->fetch() ){
	    	$array = array_unique( $result );
	    		if($i == 0){
	    			echo '<tr>';
	    			foreach ($array as $key => $value) {
			    		echo '<td>' . $key . '</td>';	
			    	}
			    	echo '</tr>';
			    	$i++;
	    		}
		    	echo '<tr>';
		    		foreach ($array as $key => $value) {
		    			echo '<td>' . $value . '</td>';	
		    		}
		    		echo '<td><a href="#">Modifier</a></td>';
		    	echo '</tr>';
	    }

	    echo '</table>';


	    


	    /*
	    $query = $bdd->query('SELECT * FROM mono_turbine_price');
	    $result = $query->fetch();
	    echo '<pre>';
	    	print_r($result);
	    echo '</pre>';

	    echo '<br><br><br>';

	    $query = $bdd->query('SELECT * FROM reacteur_price');
	    $result = $query->fetch();
	    echo '<pre>';
	    	print_r($result);
	    echo '</pre>';

	    echo '<br><br><br>';

	    $query = $bdd->query('SELECT * FROM acoustic');
	    while($result = $query->fetch()){
	    	echo '<pre>';
		    	print_r($result);
		    echo '</pre>';

		    echo '<br><br><br>';
	    }

	    $query = $bdd->query('SELECT * FROM file_fees');
	    $result = $query->fetch();
	    echo '<pre>';
	    	print_r($result);
	    echo '</pre>';

	    echo '<br><br><br>';

	    $query = $bdd->query('SELECT * FROM marking');
	    $result = $query->fetch();
	    echo '<pre>';
	    	print_r($result);
	    echo '</pre>';

	    echo '<br><br><br>';

	    $query = $bdd->query('SELECT * FROM out_parking_fees');
	    $result = $query->fetch();
	    echo '<pre>';
	    	print_r($result);
	    echo '</pre>';

	    echo '<br><br><br>';

	    $query = $bdd->query('SELECT * FROM categories');
	    while($result = $query->fetch()){
	    	echo '<pre>';
		    	print_r($result);
		    echo '</pre>';

		    echo '<br><br><br>';
	    }*/
	?>

	<br><br><br><br><br><br>

	<?php
	while($data = $weather->fetch()){
		$timezone  = +1;
		$today = gmdate("Y-m-j H:i:s", time() + 3600*($timezone+date("I")));
		if($data['day'] > $today){
	?>
			<div class="row">
				<div class="col-xs-4"></div>
				<div class="col-xs-4 weather">
					<div class="row">
						<div class="col-xs-12 weather-top">
							<center class="weather-tittle"><b>Météo</b></center>
						</div>
					</div>
					<div class="row col-xs-12">
						<div class="col-sm-6 weather-img">
							<center><?php
								if($data['weather_name'] == 'Clouds'){  echo "<img style='width: 100%;';' src='images/nuage150.png'>"; } 
								elseif($data['weather_name'] == 'Clear'){ echo "<img style='width: 100%;';' src='images/soleil.png'>"; }
								elseif($data['weather_name'] == 'Rain'){ echo "<img style='width: 100%;';' src='images/pluie.png'>"; } 
								elseif($data['weather_name'] == 'Snow'){ echo "<img style='width: 100%;';' src='images/snow.png'>"; }
							?></center>
						</div>
						<div class="col-sm-6 weather-data">
							<center><?php echo "Date: " . $data['day'] . ""; ?></center>
							<center><?php echo "Temps: " . $data['weather_name'] . ""; ?></center>
							<center><?php echo "Température: " . (substr($data['temperature'], 0, 4) - 273) . "°"; ?></center>
							<center><?php echo "Pression: " . $data['pressure'] . " hPa"; ?></center>
							<center><?php echo "Vitesse du vent: " . $data['wind_speed'] . " m/s"; ?></center>
							<center><?php echo "humidité: " . $data['humidity'] . "%"; ?></center>
						</div>
					</div>
				</div>
				<div class="col-xs-4"></div>
			</div>
	<?php
		}
	}
	?>
</body>
</html>