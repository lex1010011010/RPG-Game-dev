<?php
require_once 'exception.php';

class Player // Player class
{
	private $name; // Name of player;
	private $character; // Character class;
	private $kind; // Race of player { Human , Ork, Elf, Gnome };
	private $experience; // Experience;
	private $gender; // Gender of player Man / Woman

	private $atk; // Attack point;
	private $matk; // Magic attack point;
	private $hp; // Health ponint;
	private $mp; // Mana point;
	private $def; // Defense;
	private $mdef; // Magic defense;
	private $flee; // Dodge;
	private $hit; // Hit;
	
	private $vit; // Vitality;
	private $agi; // Agility;
	private $int; // Intellect;
	private $str; // Strenght;
	private $acc; // Accuracy;

	 function __construct( $name, $kind, $gender, $character )
	{
		if ( empty($name) || empty($kind) || empty($gender) || empty($character) )
			throw new PlayerException("Error - base variables are empty");

		$this->name = $name;
		$this->kind = $kind;
		$this->gender = $gender;
		$this->character = $character;

		$this->vit = 1;
		$this->agi = 1;
		$this->int = 1;
		$this->str = 1;
		$this->acc = 1;

// kind buff;
		switch ($this->kind) 
		{
			case 'orc':
				$this->str += 10;
				$this->agi += 1;
				$this->acc += 5;
				$this->vit += 10;
			break;

			case 'human':
				$this->str += 5;
				$this->agi += 3;
				$this->acc += 3;
				$this->vit += 6;
				$this->int += 4;
			break;

			case 'elf':
				$this->str += 2;
				$this->agi += 4;
				$this->acc += 3;
				$this->vit += 2;
				$this->int += 7;
			break;

			case 'gnome':
				$this->str += 7;
				$this->agi += 1;
				$this->acc += 4;
				$this->vit += 14;
			break;
		}


		switch ($this->character) {
			
			case 'warrior':
				$this->str += 3;
				$this->atk += 5;
				$this->vit += 4;
				$this->agi++;
				$this->acc++;	
			break;

			case 'archer':
				$this->str += 1;
				$this->atk += 2;
				$this->vit += 2;
				$this->agi += 4;
				$this->acc += 4;
				$this->int += 2;	
			break;

			case 'magick':
				$this->matk += 5;
				$this->vit++;
				$this->int += 7;	
			break;
		}


		$this->hp = 100 + $this->vit;
		$this->mp = 10 + $this->int;
		$this->atk = 5 + $this->str;
		$this->matk = 1 + $this->matk;
		$this->def = 1 + $this->vit;
		$this->mdef = 1 + $this->int;
		$this->flee = 10 + $this->agi;
		$this->hit = 10 + $this->acc;
			
	}

	public function GetInfoPlayer ()
	{
		print "name:$this->name class:$this->character kind:$this->kind  gender:$this->gender <br>";
		print "hp:$this->hp mp:$this->mp atk:$this->atk matk:$this->matk 
		def:$this->def mdef:$this->mdef hit:$this->hit flee:$this->flee <br>";
		print "vit:$this->vit int:$this->int agi:$this->agi str:$this->str hit:$this->acc <br><br>";
	}
}