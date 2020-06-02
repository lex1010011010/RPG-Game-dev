<?php
require_once 'player.php';

try {

$orc1 = new Player('orc-warrior','orc','m','warior'); $orc1->GetInfoPlayer();
$orc2 = new Player('orc-archer','orc','m','archer'); $orc2->GetInfoPlayer();
$orc3 = new Player('orc-magick','orc','m','magick'); $orc3->GetInfoPlayer();

$human1 = new Player('human-warrion','human','m','warrior'); $human1->GetInfoPlayer();
$human2 = new Player('human-archer','human','m','archer'); $human2->GetInfoPlayer();
$human3 = new Player('human-magick','human','m','magick'); $human3->GetInfoPlayer();

$gnome1 = new Player('gnome-warrior','gnome','m','warior'); $gnome1->GetInfoPlayer();
$gnome2 = new Player('gnome-archer','gnome','m','archer'); $gnome2->GetInfoPlayer();
$gnome3 = new Player('gnome-magick','gnome','m','magick'); $gnome3->GetInfoPlayer();

$elf1 = new Player('elf-warrior','elf','m','warior'); $elf1->GetInfoPlayer();
$elf2 = new Player('elf-archer','elf','m','archer'); $elf2->GetInfoPlayer();
$elf3 = new Player('elf-magick','elf','m','magick'); $elf3->GetInfoPlayer();

}catch ( PlayerException $error) {
	print $error->name;
}