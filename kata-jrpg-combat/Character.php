<?php

class Character {
    private string $name;
    private int $mana;
    private int $actualHealth;
    private $command = ["atack", "defend", "heal", "run"];

    public function __construct(string $name, int $mana, int $actualHealth, array $command) {
        $this->name = $name;
        $this->mana = $mana;
        $this->actualHealth = $actualHealth;
        $this->command = $command;
    }
    
    public function getName(): string {
        return $this->name;
    }
    public function getMana(): int {
        return $this->mana;
    }
    public function getActualHealth(): int {
        return $this->actualHealth;
    }
    public function getCommand(): array {
        return $this->command;
    }

    public function makeCommand(string $command): string {
        if (in_array($command, $this->command)) {
            return $this->name . " has chosen the command: " . $command;
        } else {
            return $this->name . " Can not do this command";
        }
    }

    public function __toString()
    {
        return "Character: " . $this->name . ", Mana: " . $this->mana . ", Actual Health: " . $this->actualHealth . ", Command: " . implode(", ", $this->command);
    }

}