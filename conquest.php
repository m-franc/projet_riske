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

#area1 {
	background-color: red;
}

#form {
	display: none;
	text-align: center;
	font-weight: bold;
	font-style: arial;
}

#area2 {
	background-color: blue;
}	

</style>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<body>
	<form id="form" method="post" action="conquest.php" name="general">
		Rentrez le nombre d'unités que vous voulez déplacez<input type="text" id="number">
		<input type="submit" value="ok">
	</form>
	<div class="area" id ="area1" value="6">
	</div>
	<div class="area" id="area2" value="0">
	</div>
</body>

<?php

if ($_POST['number'] != null) {
	$number = $_GET['number'];
} else {
	echo 'NUL';
}

?>
