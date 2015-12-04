<?php

class Book 
{
	function getTitle()
	{
		return "A Great Book";
	}

	function getAuthor()
	{
		return "John Doe";
	}

	function turnPage() 
	{
		// pointer to the next page
	}

	function printCurrentPage()
	{
		echo "current page content";
	}

}

class BookLocater
{
	function locate(Book $book)
	{
		// returns the position in the library
		// ie. shelf number & room number
		$libraryMap->findBookBy($book->getTitle(), $book->getAuthor());
	}
}

class SimpleFilePersistance 
{
	function save(Book $book)
	{
		$filename = '/documents/' . $this->getTitle() . ' - ' . $this->getAuthor();
		file_put_contents($filename, serialize($this));
	}
}

interface Printer 
{
	function printPage($page);
}

class PlainTextPrinter implements Printer
{

	function printPage($page)
	{
		echo $page;
	}
}

class HTMLPrinter implements Printer
{
	function printPage($page)
	{
		echo "<div style='single-page'>" . $page . "</div>";
	}
}
