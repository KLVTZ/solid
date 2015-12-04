<?php

require_once 'MeasurableInterface';

class File implements Measurable;
{
	private $length;
	private $sent;

	function setLength($length)
	{
		$this->length = $length;
	}

	function getLength()
	{
		return $this->length;
	}

	function setSent($sent)
	{
		$this->sent= $sent;
	}

	function getSent()
	{
		return $this->sent;
	}

	function getRelativePath()
	{
		return dirname($this->filename);
	}

	function getFullPath()
	{
		return realpath($this->getRelativePath());
	}
}
