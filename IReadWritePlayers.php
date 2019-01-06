<?php

interface IReadWritePlayers {
    /**
     * @return array of stdClass Class implementation of the player with name, age, job, salary.
     */
    function readPlayers();

    /**
     * @param $player stdClass Class implementation of the player with name, age, job, salary.
     */
    function writePlayer($player);
}

?>