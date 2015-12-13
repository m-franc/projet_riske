(function($) {
	$(document).ready(function() {

		// ALl OF FUNCTION FOR THE SCRIPT


		// Fonction qui gère un tour d'un joueur dans sa globalité, avec les différentes fonction prévues

		function turn() {
			if (selectUnit) {
				putUnit;
			}
		}
		turn();


		// fonction pour vérifier si une valeur est bien un int

		function is_int(value){
		  	if((parseFloat(value) == parseInt(value)) && !isNaN(value)) {
		      return true;
		 	 } else {
	     		 return false;
		  	 }
		}


		// Fonction pour séléctionner une unité dans un territoire en ajax, et l'envoyer dans du php pour le gérer ensuite avec les classes correspondates

		function selectUnit() {
			$(".area").click(function() { 
				numberInput = prompt("Rentrez le nombre d'unités que vous voulez déplacez");
				if (is_int(numberInput) && numberInput != '') {
					$.ajax({
						url: "http://localhost/projet_riske/conquest.php",
						type: "POST",
        				data: {number: numberInput},
						success: function(data) {
							console.log(data);
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


		// Fonction qui permet de déposer les unités séléctionnés dans un nouveau territoire

		function putUnit() {
			$(".area").click(function()) {
				$(".area").attribute = number;
			}
		}
		
	});
})(jQuery);
