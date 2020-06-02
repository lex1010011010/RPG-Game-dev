<?php


class PlayerException extends Exception
{
	public $name;
	function __construct()
	{
		$this->name = 'PlayerException';
	}
}