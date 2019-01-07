<?php

interface IReadWritePlayers {
    /**
     * @return Player[]
     */
    function readPlayers();

    /**
     * @param $player Player
     */
    function writePlayer(Player $player);
}

?>