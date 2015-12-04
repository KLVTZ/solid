<?php

class Progress
{
	private $measurableContent;

	function __construct ( Measurable $measurableContent )
	{
		$this->measurableContent= $measurableContent;
	}

	function getAsPercent()
	{
		return $this->measurableContent->getSent * 100 / $this->measurableContent->getLength
	}
}
