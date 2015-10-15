<?php

Class Player 
{
	private $_money;
	private $_barrack;
	private $_typeOfUnit;

	// declaration of attribute  

	public function __construct(Unit $unit) {		// Construct which take type of unit choose (see get of it), money and barrack start
		$this->_typeOfUnit = $unit->getType();
		$this->_money = 40;
		$this->_barrack = 1;
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

	// end of get function 

	public function setMoney($money) {
		if (is_int($money)) {
			$money = $this->_money;
		} else {
			return false;
		}
	}

	public function setBarrack($barrack) {
		if (is_int($barrack)) {
			$barrack = $this->_barrack;
		} else {
			return false;
		}
	}

	public function setTypeOfUnit($typeOfUnit, Unit $unit) {	
		$typeOfUnit = $unit->getType();
		if (is_int($typeOfUnit)) {
			$typeOfUnit = $this->_typeOfUnit;
		} else {
			return false;
		}
	}

	// end of set function
}