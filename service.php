<?php require "init.php" ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="contenu" content="contenu">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aerodrome Evreux Normandie</title>
</head>
<body>	
<?php require "navbar.php"; ?>
	<div class="row">
		<div class="area-under-nav">
			<div class="container">
				<div class="col-xs-12">
					<div class="aerodrome">
						<img class="logo" src="images/AEN.png">Aerodrome Evreux Normandie
					</div>
				</div>
			</div>
		</div>
	</div>



<div class="row container-fluid background">
			<div class="col-md-2 text-center aside">
			<h3 style="text-align:center; border:2px  solid black; color: white;">Météo</h1>
				<div class="meteo">
					<img src="images/cloud.png" id="test" object-fit: contain>
				</div>
			</div>

			<div class="col-md-8">
			<div class="col-md-12 row">
			<h1 style="text-align:center; border:2px solid black; color: white;">Ravitailement</h1>

			<div class="col-md-6">
				
				<div class="row">
					
					<table style="width:90%" class="table table-hover table-responsive">
						<thead>
							<tr>
								<td class="text-center">Test</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									
								</td>
							</tr>
						</tbody>
					</table>
				
				</div>
				<div class="col-md-6">
					<div class="row">
						<h4>Test</h4>
						<div class="progress">
						</div>
					</div>
					<div class="row">

						<form class="form-inline" role="form" method="GET" action="fileManagement.php">
							<div class="form-group">
								<label for="percent">Test : </label>
							    <select name="percent" class="form-control" id="percent">
							    </select>
							</div><br>
							
						</form>
						
					</div>
					<div class="row">
			
					</div>
					
					</div>
				</div>
				<div class="col-md-6">
					<div class="row" id="files">
						
						</div>

						<div class="row"><br>
							<h4>Test : </h4>
						</div>
						<div class="row">
							<form method="GET" action="fileManagement.php" role="form" class="form-inline">
								<div class="form-group">
									<label for="name">Test : </label>
			    					<input name="name" type="text" class="form-control" id="name">
			    				</div>
			    				<div class="form-group">
									<label for="type">Test : </label>
								    <select name="type" class="form-control" id="type">
								    	<option>test</option>
								    </select>
								</div>
								<input type="hidden" name="id" value="sauce">
								<input type="hidden" name="choice" value="2">
								<button type="submit" class="btn btn-success">Test</button>
							</form>
						</div>


						<div class="row"><br>
							<h4>Test : </h4>
						</div>
						<div class="row">
							<form method="GET" action="fileManagement.php" role="form" class="form">
								<div class="form-group">
									<label for="oldname"Test : </label>
			    					<input name="oldname" type="text" class="form-control" id="oldname">
			    				</div>
								<div class="form-group">
									<label for="newname">Test : </label>
			    					<input name="newname" type="text" class="form-control" id="newname">
			    				</div>
			    				<div class="form-group">
									<label for="type">Test : </label>
								    <select name="type" class="form-control" id="type">
								    	<option>test</option>
								    </select>
								</div>
								<input type="hidden" name="id" value="sauce">
								<input type="hidden" name="choice" value="1">
								<button type="submit" class="btn btn-warning" style="float:right;">Test</button>
							</form>
						</div>

						<div class="row"><br>
							<h4>Test : </h4>
						</div>
						<div class="row">
							<form method="GET" action="fileManagement.php" role="form" class="form-inline">
								<div class="form-group">
								<label for="name">Test : </label>
		    					<input name="name" type="text" class="form-control" id="name">
		    				</div>
		    				<input type="hidden" name="id" value="sauce">
		    				<input type="hidden" name="choice" value="0">
		    				<button type="submit" class="btn btn-danger">Test</button>
							</form>
						</div>

					</div>
				</div>

			</div>

			<div class="col-md-2 aside">
			
				<form method="GET" action="index.php">
				<h3 style="text-align:center; border:2px solid black; color: white">Services</h1>
					<label fpr="select">Choisir un service : </label>
					<select name="id" id="select" class="form-control" onchange="selectValue(this.value);">

					</select>
					<br><center>
						<input type='submit' class='btn btn-success' value='Choisir ce service'>
					</center>
				</form><br>

				<div class="row">
					
					<table style="width:90%" class="table table-hover table-responsive">
						<thead>
							<tr>
								<td class="text-center">Récapitulatif</td>
							</tr>
						</thead>
							<tr>
								<td>
									Commande 1 :
								</td><br>
								<td>
									Commande 2 :
								</td>
							</tr>
					</table>
				
				</div>

			</div>
		</div>
		<br><br><br>

	<?php require "footer.php" ?>	
	<?php require "js.php" ?>
</body>
</html>