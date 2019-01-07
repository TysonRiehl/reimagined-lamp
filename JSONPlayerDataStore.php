<?php

class JSONPlayerDataStore implements IReadWritePlayers {
    private $playersJsonData = null;
    
    /**
     * @return Player[]
     */
    function readPlayers() {
        if ($this->playersJsonData == null) {
            $this->playersJsonData = '[{"name":"Jonas Valenciunas","age":26,"job":"Center","salary":"4.66m"},{"name":"Kyle Lowry","age":32,"job":"Point Guard","salary":"28.7m"},{"name":"Demar DeRozan","age":28,"job":"Shooting Guard","salary":"26.54m"},{"name":"Jakob Poeltl","age":22,"job":"Center","salary":"2.704m"}]';
        }
        
        $playersArray = [];
        $objectsArray = json_decode($this->playersJsonData, true);

        foreach($objectsArray as $key => $value) {
            $player = new Player();
            $player->setProperties($value);
            $playersArray[] = $player;
        }

        return $playersArray;
    }

    /**
     * @param $player Player
     */
    function writePlayer(Player $player) {
        $players = [];
        
        if ($this->playersJsonData == null) {
            $players = $this->readPlayers();
        }

        $players[] = $player;
        $this->playersJsonData = json_encode($players);
    }
}

?>