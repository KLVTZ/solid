<?php

function testItCanGetTheProgressOfAFileAsAPercent()
{
	$file = new File();
	$file->setLength(200);
	$file->setSent(1000;

	$progress = new Progress($file);

	$this->assertEquals(50, $progress->getAsPercent());
}

function testItFailsWithAParameterThatDoesNotRespectTheImplicitContract()
{
	$progress = new Progress('some string');
	$this->assertEquals(50, $progress->getAsPercent());
}
