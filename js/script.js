(function($) {
	$(document).ready(function() {

		function is_int(value){
		  	if((parseFloat(value) == parseInt(value)) && !isNaN(value)){
		      return true;
		 	 } else {
	     		 return false;
		  	 }
		}


		function showForm() {
			$(".area").click(function() {
				$('#form').show();
			});
		}


		var number = $("#area1");

		number.value;

		function selectNumberOfUnit(number) {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					if (is_int(number) && number < 6) {
            			document.ajax.dyn.value="Received:" + req.responseText;	
					} 
				}
				xmlhttp.open("GET", "conqest.php", true);
				xmlhttp.send(number);
			}
		}
		selectNumberOfUnit(number.value);
		showForm();
	});
})(jQuery);
