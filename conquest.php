<?php 

include_once('Class/area.class.php');
include_once('Class/player.class.php');
include_once('Class/unit.class.php');
include_once('Class/map.class.php');

session_start();

$response = $_POST['data']; // On récupére le nombre d'unités d'un territoire ici, pour ensuite le déplacer dans l'autre territoire

?>


<style>

.area {
	width: 200px;
	height: 200px;
}

.area img {
	size: 120%;
}


#form {
	display: none;
	text-align: center;
	font-weight: bold;
	font-style: arial;
}

</style>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
<body>
	<form method="conquest.php" id="form">
		<label for="Rentrez le nombre d'unités que vous voulez déplacer">
		<input type="text" id="number" name="number">
		<input type="submit" id="submit">
	</form>
	<!-- Tant qu'il à des territoires... -->
	<div class="area" id ="area1" value="6">
		<img src="images/montagne.png">
	</div>
	<div class="area" id="area2" value=<?php print $response; ?> onclick="putUnit()"> 
		<img src="images/foret.png">
	</div>
</body>

