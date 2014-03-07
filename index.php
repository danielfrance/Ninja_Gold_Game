<?php 
session_start();
 ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ninja Gold Game</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<!-- Player Score -->
			<nav id="header" class="navbar navbar-default">
				<div id="counter" class="navbar-header" >
					<h1>Your Gold</h1>
					<div  class=" form-control">
					<?php 
						if (isset($_SESSION['total_gold'])) 
						{
							echo $_SESSION['total_gold'];
						}
					 ?>
					</div>
				</div>
				<div value="total_gold" class="navbar">
					 

				</div>
			</nav>
			<!-- Game Play -->
			<div id="main-content" class="row">
				<h3>Click to Play!</h3>
					<div class="row col-md-offset-1">
						<div class="building col-sm-2 col-md-2">
								<form action="process.php" method="post">
								<h3 class="text-center">Farm</h3>
								<h5 class="text-center">(Earns 10-20 Gold)</h5>
								<input type="hidden" name="action" value="farm"> 
								<input class="center-block btn btn-primary" type="submit" value="Harvest">
							</form>
						</div> 

						 <div class="building col-sm-2 col-md-2 col-md-offset-1">
							<form action="process.php" method="post">
								<h3 class="text-center">Cave</h3>
								<h5 class="text-center">(Earns 5-10 Gold)</h5>
								<input type="hidden" name="action" value="cave">
								<input class="center-block btn btn-primary" type="submit" value="Explore">
							</form>
						</div> 

						<div class="building col-sm-2 col-md-2 col-md-offset-1">
							<form action="process.php" method="post">
								<h3 class="text-center">House</h3>
								<h5 class="text-center">(Earns 2-5 Gold)</h5>
								<input type="hidden" name="action" value="house">
								<input class="center-block btn btn-primary" type="submit" value="Pillage">
							</form>
						</div>

						<div class="building col-sm-2 col-md-2 col-md-offset-1 ">
							<form action="process.php" method="post">
								<h3 class="text-center">Casino</h3>
								<h5 class="text-center">(Earn/lose 0-50 Gold)</h5>
								<input type="hidden" name="action" value="casino">
								<input class="center-block btn btn-primary" type="submit" value="Roll the Dice">
							</form>
						</div>
					</div>
			</div>
			<!-- Activity Log -->
 			<div id="activities_container" class="container">
				<h5>Activities:</h5>
				<div id="activities_log" class="row">
						<?php 
						if (isset($_SESSION['activities'])) 
						{
							foreach ($_SESSION['activities'] as $number => $message) 
							{
								echo '<p>' .  $message;
							}
						}
						else
						{
							echo "<p> you havent' played the game yet. get on it.";
						}
						 ?>
				</div>
			</div> 
			<div>
				<form action="process.php" method="post" class="navbar-form navbar-right">
					 	<div class="form-group">
					 		<input class="form-control" type="hidden" name="action" value="reset">
					 		<input class="btn btn-warning" type="submit" value="Play Again">
					 	</div>
					 	
					 </form>
			</div>
	</div>
</body>
</html>
<?php 

 ?>