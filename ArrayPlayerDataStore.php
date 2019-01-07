<?php

class ArrayPlayerDataStore implements IReadWritePlayers {
    private $playersData;

    /**
     * @return Player[]
     */
    function readPlayers() {
        if ($this->playersData != null) {
            return $this->playersData;
        }

        $players = [];
        $jonas = new Player();
        $jonas->name = 'Jonas Valenciunas';
        $jonas->age = 26;
        $jonas->job = 'Center';
        $jonas->salary = '4.66m';
        $players[] = $jonas;

        $kyle = new Player();
        $kyle->name = 'Kyle Lowry';
        $kyle->age = 32;
        $kyle->job = 'Point Guard';
        $kyle->salary = '28.7m';
        $players[] = $kyle;

        $demar = new Player();
        $demar->name = 'Demar DeRozan';
        $demar->age = 28;
        $demar->job = 'Shooting Guard';
        $demar->salary = '26.54m';
        $players[] = $demar;

        $jakob = new Player();
        $jakob->name = 'Jakob Poeltl';
        $jakob->age = 22;
        $jakob->job = 'Center';
        $jakob->salary = '2.704m';
        $players[] = $jakob;

        $this->playersData = $players;

        return $players;
    }

    /**
     * @param $player Player
     */
    function writePlayer(Player $player) {
        if ($this->playersData == null) {
            $this->readPlayers();
        }

        $this->playersData[] = $player;
    }
}

?>