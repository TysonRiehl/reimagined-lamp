<?php

class FilePlayerDataStore implements IPlayerDataStore {
    private $filename = "playerdata.json";

    function readPlayers() {
        return json_decode(file_get_contents($this->filename));
    }

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