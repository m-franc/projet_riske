(function($) {
	$(document).ready(function() {

		function is_int(value){
		  	if((parseFloat(value) == parseInt(value)) && !isNaN(value)) {
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


		$(function() { 
			$("#form").submit(function() {
			var number = $("#number").val();
				$.ajax({
					type: "POST",
					data: number,
					dataType: "html",
					url: "conquest.php",
					success: function(data) {
						alert('yo');
						console.log(number)
					},
					error: function() {
						alert('une erreur est survene')
					}
				});
			});
		});
			showForm();
	});
})(jQuery);
