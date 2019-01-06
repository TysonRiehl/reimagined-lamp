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
     * @return array of stdClass Class implementation of the player with name, age, job, salary.
     */
    function readPlayers() {
        return json_decode(file_get_contents($this->filename));
    }

    /**
     * @param $player stdClass Class implementation of the player with name, age, job, salary.
     */
    function writePlayer($player) {
        $players = $this->readPlayers();
        if (!$players) {
            $players = [];
        }

        $players[] = $player;
        file_put_contents($this->filename, json_encode($players));
    }
}
?>