<?php

class FilePlayerDataStore implements IReadWritePlayers {
    private $filename;

    /**
     * @param $filename string name of file to load
     */
    public function __construct($filename) {
        $this->filename = $filename;
    }

    /**
     * @return Player[]
     */
    function readPlayers() {
        $playersArray = [];
        $objectsArray = json_decode(file_get_contents($this->filename), true);

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
        $playersArray = $this->readPlayers();

        if ($playersArray == null) {
            $playersArray = [];
        }

        $playersArray[] = $player;
        file_put_contents($this->filename, json_encode($playersArray));
    }
}
?>