<?php

class JSONPlayerDataStore implements IReadWritePlayers {
    private $playersJsonData = null;
    
    /**
     * @return array of stdClass Class implementation of the player with name, age, job, salary.
     */
    function readPlayers() {
        if ($this->playersJsonData == null) {
            $this->playersJsonData = '[{"name":"Jonas Valenciunas","age":26,"job":"Center","salary":"4.66m"},{"name":"Kyle Lowry","age":32,"job":"Point Guard","salary":"28.7m"},{"name":"Demar DeRozan","age":28,"job":"Shooting Guard","salary":"26.54m"},{"name":"Jakob Poeltl","age":22,"job":"Center","salary":"2.704m"}]';
        }
        
        return json_decode($this->playersJsonData);
    }

    /**
     * @param $player stdClass Class implementation of the player with name, age, job, salary.
     */
    function writePlayer($player) {
        $players = [];
        if ($this->playersJsonData == null) {
            $players = json_decode($this->playersJsonData);
        }

        $players[] = $player;
        $this->playersJsonData = json_encode($players);
    }
}

?>