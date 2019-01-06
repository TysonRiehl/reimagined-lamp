<?php 
echo "Current Players: \n";
foreach ($this->properties->players as $player) {

    echo "\tName: $player->name\n";
    echo "\tAge: $player->age\n";
    echo "\tSalary: $player->salary\n";
    echo "\tJob: $player->job\n\n";
}