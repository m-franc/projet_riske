<?php 

Class Unit 
{
	public $strength;
	public $type;
	public $price;

	const MAN_TYPE = 1;
	const ELF_TYPE = 2;
	const ORC_TYPE = 3;

	const MAN_PRICE = 15;
	const ELF_PRICE = 20;
	const ORC_PRICE = 25;

	public function __construct($typeUnit) {
		$this->type = $typeUnit;						// The attribut type, enter by the user in paramater.
		if ($this->type == self::MAN_TYPE) {			// Define the strengh by the type
			$this->strength = 40;
		} else if ($this->type == self::ELF_TYPE) {
			$this->strength = 55;
		} else if ($this->type == self::ORC_TYPE) {
			$this->strength = 70;
		}

		if ($this->type == self::MAN_TYPE) {			// Define the price by the type
			$this->price = self::MAN_PRICE;
		} else if ($this->type == self::ELF_TYPE) {
			$this->price = self::ELF_PRICE;
		} else if ($this->type == self::ORC_TYPE) {
			$this->price = self::ORC_PRICE;
		}
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

	// End of get function

	/*public function setStrength($strength, Area $area) {
		if $this on specific area (See w Yvan, how area is specific) {
			if (is_int($strength)) {
				$this->price = $strength * coeff;
			} else {
				return false;
			}
		}
	}*/

	public function setType($typeUnit) {
		if (in_array($typeUnit, [self::MAN_TYPE, self::ELF_TYPE, self::ORC_TYPE])) {
			$this->type = $typeUnit;
		} else {
			return false;
		}
	}

	/*public function setPrice($cost, Area $area) {
		if $this on specific area (See w Yvan, how area is specific) {
			if (is_int($cost)) {
				$this->price = $cost * coeff;
			} else {
				return false;
			}
		}		
	}*/
}