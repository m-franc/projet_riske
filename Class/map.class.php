<?php
	class Map{
		protected $areas;
		protected $type;

		public function __construct(){
			$this->areas = array();
		}

		public function addArea(Area $area){
			$this->areas[] = $area;
		}

		public function listArea(){
			foreach ($this->areas as $area) {
				echo $area->getTypeOfArea().'<br/>';
			}
		}

		public function getArea($id){
			return $this->areas[$id];
		}
	}
?>