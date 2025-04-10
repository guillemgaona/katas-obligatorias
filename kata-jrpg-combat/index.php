<?php
require_once('Team.php');

$characters = [
    new Character("Warrior", 100, 100, ["attack", "defend", "heal", "run"]),
    new Character("Mage", 80, 60, ["attack", "defend", "heal", "run"]),
    new Character("Rogue", 90, 30, ["attack", "defend", "heal", "run"]),
];

$team1 = new Team($characters);

echo $team1->getCharacter(0)->makeCommand("attack") . "<br>";
echo $team1->getCharacter(1)->makeCommand("defend") . "<br>";

echo "The lower HP character is: " . $team1->getLowerHpCharacter();
