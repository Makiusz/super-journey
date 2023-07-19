<?php

class RankingTable{

    public array $playerList;

    function __construct($playerList){
        $this->playerList = $playerList;
    }

    public function recordResult($name,$score){
       
    }

    public function playerRank($number){
        return $this->playerList[$number-1];
    }
}



## TEST ##
$table = new RankingTable(array('Jan', 'Maks', 'Monika'));
echo $table->playerRank(1);