<?php 

include_once('Class/area.class.php');
include_once('Class/player.class.php');
include_once('Class/unit.class.php');
include_once('Class/map.class.php');

session_start();

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
	<form id="form" method="post" action="conquest.php" name="general">
		<label for="number">Rentrez le nombre d'unités que vous souhaitez déplacer : </label>
		<input type="text" id="numberOfUnit" name="numberOfUnit">
	</form>
	<div class="area" id ="area1" value="6">
		<img src="images/montagne.png">
	</div>
	<div class="area" id="area2" value="0">
		<img src="images/foret.png">
	</div>
</body>

<?php

var_dump($_POST['numberOfUnit']);

?>
