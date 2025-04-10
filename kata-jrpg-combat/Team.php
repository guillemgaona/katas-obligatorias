<?php
require_once('Character.php');
class Team {
    private array $team ;

    public function __construct(array $team = []) {
        $this->team = $team;
    }

    public function getLowerHpCharacter(): Character {
        $lowerHpCharacter = $this->team[0];
        foreach ($this->team as $character) {
            if ($character->getActualHealth() < $lowerHpCharacter->getActualHealth()) {
                $lowerHpCharacter = $character;
            }
        }
        return $lowerHpCharacter;
    }

    public function getCharacter(int $index): Character {
        return $this->team[$index];
    }
}