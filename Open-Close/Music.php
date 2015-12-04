<?php

class Music 
{
	public $length;
	public $sent;

	public $artist;
	public $album;
	public $releaseDate;

	function getAlbumCoverFile()
	{
		return 'Images/Covers/' . $this->artist . '/' . $this->album . 'png';
	}
}
