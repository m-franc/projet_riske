<?php
	class Area {
		protected $bonus;
		protected $typeOfArea;
		protected $idArea;
		protected $units;
		protected $state;
		protected $areaX;
		protected $areaY;

		const NEUTRE = 1;
		const FORET = 2;
		const VILLAGE = 3;
		const MONTAGNE = 4;

		/* NB UNITS si 
		si un joueur est assigné à ce territoire -> construit units
		*/
		public function __construct($type, $units){
			$this->createAreas($units);
			$this->setTypeOfArea($type);
		}

		public function getTypeOfArea(){
			return $this->typeOfArea;
		}

		public function getUnits() {
			return $this->units = array();
		}

		public function setTypeOfArea($type){
			$this->typeOfArea = $type;
		}

		public function getIdArea(){
			return $this->idArea;
		}

		public function createAreas($nbPlayer){
			if (!is_int($nbPlayer)){
				return
				$id = 0;
				$areaTab = array();
				$areaX = 0;
				$areaY= 0;
				for($areaX = 0; $areaX < ($nbPlayer); $areaX++){
					echo '<br/>';
					for($areaY = 0; $areaY < ($nbPlayer); $areaY++){
						echo ' {'.$areaX.', '.$areaY.'} ';
						if ($areaY == 9) echo '<br/>';
						//$areaTab[$areaX][$areaY] = new Area('Foret');
					}
				}
			}
			else
				return false;
		}

		public function getNeighbourArea(Area $id){
			// code ....
		}

		public function moveUnits(Area $idDep, Area $idDest, Units $nbUnits){
			/* 
			si territoire non occupé ????
				setAreaToPlayer()
			sinon
				conquer(Player $attaquant, Player $enemy)
					si attaquant gagne 
						setAreaToPlayer()
			*/
		}

		public function listUnitsOfArea($units){
			$units = $this->getUnits();
			foreach($units as $unit) {
				return $unit;
			}
		}

		public function setAreaToPlayer(Area $idArea, Player $player){
			// code ....
		}

		public function conquer(Unit $attack, Unit $enemy){
			// code ....
		}

		public function earnMoney(Area $id){
			// code ....
		}
	}
?>