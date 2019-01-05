<?php 

interface IPlayerDataStore {
    function readPlayers();
    function writePlayer($player);
}

?>