<?php
Class Player 
{
	private $_money;
	private $_barrack;
	private $_typeOfeUnit;

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
		return $this->_typeOfeUnit;
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
			$this->_typeOfeUnit = $typeOfUnit;
		} else {
			return false;
		}
	}


	// End of set function

	public function conquest(Aera $area, Unit $unit, Unit $unitDefender, Player $defender) {

	}

	// end of set function 

	// public function listUnit(Area $area) {
	// 	   Return number of unit present on each area of this player 
	// }

	// public function listBarrack(Area $area) {
	// 	   Return number of barrack present on each area of this player
	// }

}