(function($) {
	$(document).ready(function() {

		var form = $("#form");

		function turn() {
			selectUnit();
		}
		turn();


		// ALl OF FUNCTION FOR THE SCRIPT

		function is_int(value){
		  	if((parseFloat(value) == parseInt(value)) && !isNaN(value)) {
		      return true;
		 	 } else {
	     		 return false;
		  	 }
		}

		function showForm() {
			$(".area").click(function() {
				window.prompt(form[0].innerText);
			});
		}

		function selectUnit() {
			showForm();
			$(form).submit(function() {
				var inputNumber = $("#numberOfUnit").val();
				if (is_int(inputNumber)) {
					$.ajax({
						type: "POST",
						data: inputNumber,
						dataType: "html",
						url: "conquest.php",
						success: function(data) {
							alert(inputNumber);
							console.log(inputNumber);
						},
						error: function() {
							alert('une erreur est survene')
						}
					});
				} else {
					alert('Rentrez un nombre...');
				}
			});
		}
	});
})(jQuery);
