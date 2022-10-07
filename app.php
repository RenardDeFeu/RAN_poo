<?php
require __DIR__ . '/vendor/autoload.php';

use App\Animals\{Elephant,Zebra,Fish,BubbleFish,CatFish,ClownFish,Whale,Parrot,Dove};

$animals = array(
    new Fish("Jean-Yves"), 
    new Fish("Hervé Dumond"), 
    new Fish("Jean-Claude Convenant"), 
    new Fish("Orelsan"),
    new Fish("Jean Reno"),
    new BubbleFish("Tea"),
    new BubbleFish("Coffee"),
    new BubbleFish("Chartreuse"),
    new CatFish("O'Malley"),
    new CatFish("Duchesse"),
    new ClownFish("Nemo"),
    new Elephant("Hatti"),
    new Elephant("Elmer"),
    new Zebra("Code Barre"),
    new Parrot("Pirate"),
    new Parrot("Sideman"),
    new Parrot("Carrot the parrot"),
    new Parrot("Victor"),
    new Parrot("Salma"),
    new Parrot("Iago"),
    new Parrot("Gérard"),
    new Parrot("Mike Tyson"),
    new Parrot("Elwood"),
    new Parrot("Melmel"),
    new Dove("Savon"),
    new Dove("Pigeon")
);

foreach ($animals as $animal) {
    echo $animal->getName();
}




?>