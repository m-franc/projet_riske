<?php

Class Unit 
{
	public $strength;
	public $type;
	public $price;

	const ELF_TYPE = 1;
	const MAN_TYPE = 2;
	const ORC_TYPE = 3;

	const ELF_COST = 20;
	const MAN_COST = 15;
	const ORC_COST = 25;

	public function __construct($typeUnit) {						// Construct of unit with the type of unit. By that, define set the cost and strength
		$this->setType($typeUnit);
		if ($typeUnit == self::MAN_TYPE) {
			$this->strength = 40;
		} else if ($typeUnit == self::ELF_TYPE) {
			$this->strength = 55;
		} else if ($typeUnit == self::ORC_TYPE) {
			$this->strength = 70;
		}
		$this->type = $typeUnit;
		$this->setPrice($typeUnit);
	}

	public function getStrength() {
		return $this->strength;
	}

	public function getType() {
		return $this->type;
	}

	public function getPrice() {
		return $this->price;
	}

	/*public function setStrength($strength, Area $area) { 			Set the strength unit when this on own area
		if ($this->on specific area) {
			$strength = $this->strength*Coeff;
		} else {
			$strength = $this->strength;
		}
	}*/

	public function setType($type) {								// Set the type between type constant value.
		if (in_array($type, [self::ELF_TYPE, self::MAN_TYPE, self::ORC_TYPE])) {
			$type = $this->type;
		} else {
			return false;
		}
	}

	public function setPrice($typeUnit) {							// Set the unit price by the type of it.
		$typeUnit = $this->type;
		if ($typeUnit == self::MAN_TYPE) {
			$price = $this->price = self::MAN_COST;
		} else if ($typeUnit == self::ELF_TYPE) {
			$price = $this->price = self::ELF_COST;
		} else if ($typeUnit == self::ORC_TYPE) {
			$price = $this->price = self::ORC_COST;
		}
	}
}
