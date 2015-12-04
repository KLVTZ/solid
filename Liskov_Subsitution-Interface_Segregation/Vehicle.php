<?php

class Vehicle
{
	function startEngine()
	{
		// Default engine start functionality
	}

	function accelerate()
	{
		// Default acceleration functionality
	}
}

class Car extends Vehicle {
	function startEngine()
	{
		$this->engageIngition();
		parent::startEngine();
	}

	private function engageIgnition()
	{
		// ignition engaged
	}
}

class ElectricBus extends Vehicle {
	function accelerate()
	{
		$this->increaseVoltage();
		$this->connectIndividualEngines();
	}

	private function increaseVoltage()
	{
		// electric logic
	}

	private function connectIndividualEngines()
	{
		// connection logic
	}
}

class Driver {
	function go(Vehicle $v)
	{
		$v->startEngine();
		$v->accelerate();
	}
}
