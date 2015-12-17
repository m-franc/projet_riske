<?php

	class Map{
		protected $areas;
		protected $player;

		public function __construct(){
			$this->areas = array();
		}

		//get
		public function getPlayer() {
			return $this->player;
		}

		public function getArea(){
			return $this->areas;
		}

		// set
		public function setPlayer($player) {
			return $this->player = $player;
		}

		public function setAreas($areas) {
			return $this->areas = $areas;
		}


		public function addAreas(Area $area){
			$this->areas[] = $area;
		}

		public function listArea(){
			foreach ($this->areas as $area) {
				echo $area->getTypeOfArea().'<br/>';
			}
		}

	
	}
	
?>