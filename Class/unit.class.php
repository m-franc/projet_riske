<?php 

Class Unit 
{
	public $strength;
	public $area;
	public $type;
	public $price;

	const MAN_TYPE = 1;
	const ELF_TYPE = 2;
	const ORC_TYPE = 3;

	const MAN_PRICE = 15;
	const ELF_PRICE = 20;
	const ORC_PRICE = 25;

	public function __construct($typeUnit, Area $area) {
		$this->type = $typeUnit;	
		if ($typeUnit == Unit::MAN_TYPE || $typeUnit == Unit::ELF_TYPE || $typeUnit == Unit::ORC_TYPE) {	 // Ajax pour un menu déroulant avec les trois valeurs.	
			if ($this->type == self::MAN_TYPE) {	
				$this->setStrength(40);
				$this->setPrice(self::MAN_PRICE);
			} else if ($this->type == self::ELF_TYPE) {
				$this->setStrength(55);
				$this->setPrice(self::ELF_PRICE);
			} else if ($this->type == self::ORC_TYPE) {
				$this->setStrength(70);
				$this->setPrice(self::ORC_PRICE);
			}
		} else {
			return false;  	// Si il va dans la console, et rentre un 4, on recharge la page en relancant la fonction lauchGame 
		}
		$this->setArea($area);
	}

	public function getStrength() {
		return $this->strength;
	}

	public function getArea() {
		return $this->area;
	}

	public function getType() {
		return $this->type;
	}

	public function getPrice() {
		return $this->price;
	}

	// End of get function

	public function setStrength($strength) {
		if (is_int($strength)) {
			$this->strength = $strength;
		} else {
			return false;
		}
	}

	public function setArea(Area $area) {
		$this->area = $area;
	}

	public function setType($typeUnit) {
		if (in_array($typeUnit, [self::MAN_TYPE, self::ELF_TYPE, self::ORC_TYPE])) {
			$this->type = $typeUnit;
		} else {
			return false;
		}
	}

	private function setPrice($price) {       			
		if (in_array($price, [self::MAN_PRICE, self::ELF_PRICE, self::ORC_PRICE])) {
			$this->price = $price;
		} else {
			return false;
		}
	}
}

