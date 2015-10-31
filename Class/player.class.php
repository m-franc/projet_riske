<?php

Class Player 
{
	private $_money;
	private $_typeOfUnit;
	private $_areas = array();

	public function __construct(Unit $unit) {
		$this->_barrack = 1;
		$this->_money = 40;
		$this->setTypeOfUnit($unit->getType());
	}

	public function getMoney() {
		return $this->_money;
	}

	public function getBarrack() {
		return $this->_barrack;
	}

	public function getTypeOfUnit() {
		return $this->_typeOfUnit;
	}

	public function getAreas() {
		return $this->_numberOfArea;
	}


	// end of get function

	public function setMoney($money) {
		if (is_int($money)) {
			$this->_money = $money;
		} else {
			return false;
		}
	}


	public function setBarrack($barrack) {
		if (is_int($barrack)) {
			$this->_barrack = $barrack;
		} else {
			return false;
		}
	}


	public function setTypeOfUnit($typeOfUnit) {
		if (is_int($typeOfUnit)) {
			$this->_typeOfUnit = $typeOfUnit;
		} else {
			return false;
		}
	}


	public function setAreas($areas) {
		if (is_int($areas)) {
			$this->_Areas[] = $areas;
		} else {
			return false;
		}
	}


	// End of set function


	public function listAreas(Area $area) {
		foreach($this->_Areas as $area) {
			return $area->getIdArea().'</br>';
		}
	}


	public function listUnits(Area $area) {
		foreach ($this->_Areas as $area) {			
			return $area->listUnitsOfArea().'</br>';
		}
	} 


	public function listBarracks(Area $area) {
		foreach ($this->_Areas as $area) {			
			return $area->listBarrack().'</br>';
		}
	} 



	public function conquest(Aera $area, Unit $unit, Unit $unitDefender, Player $defender) {
		// Un clique est effectué sur le territoire composant les unités que l'on veut déplacer. 
		// Il est envoyer au php pour savoir combien d'unités sont présentes sur celui-ci
		// On choisit ensuite le nombre d'unités parmis ces unités présentes. 
		// Si il prends toute les unités du territoire, le programme reprend à 0 à la séléction des unités, car il doit au moins laissé une unité sur un territoire.
		// Les unités sont à leur tour sauvegarder dans l'ajax.
		// Un autre click est effectué pour envoyer les unités séléctionnées dans un territoire adjacent au précédent. Si c'est un orc, ce sera plus (voire fonction de l'orc)
		// Il y a donc une autre fonction ajax pour renvoyer les données du territoire cliqué, qui sera ensuite attribué aux unités cliqués.
		// Les unités seront donc situé au territoire cliqué en deuxième.
		// Seulement, si des ennemis sont présents sur le territoire séléctionné, le combat est lancé. 
		// On compare donc dans une condition, le total des forces de chacune des unités de chaque joueur (force * nb d'unités * coeff si sur un territoire spécial)
		// Si c'est don l'attaquant (celui qui executera conquest) qui en à le plus, il gagne le territoire et l'attaquant perd ses unités. 
		// Si l'attaquant n'avait pas assez de force, c'est ses unités qui crèvent, et le défenseur conserve son territoire.
	}

	// end of set function 


	// public function listBarrack(Area $area) {
	// 	   Return number of barrack present on each area of this player
	// }

}