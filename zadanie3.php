<?php

class RankingTable{

    private $playerList = array();

    function __construct($playerName){
        foreach($playerName as $name){
            $this->playerList[$name] = array(
                'score' => 0,
                'gamesPlayed' => 0
            );
        }
        
    }

    public function recordResult($name,$score){
        $this->playerList[$name]['score']+=$score;
        $this->playerList[$name]['gamesPlayed']++;
    }
    private function sortPlayers(){
        uasort($this->playerList, function ($a, $b){
            if($a['score'] == $b['score']){
                if($a['gamesPlayed'] == $b['gamesPlayed']){
                    return 0;
                }
                return ($a['gamesPlayed']>$b['gamesPlayed']) ? 1 : -1;
            }
            return ($a['score']>$b['score']) ? -1 : 1;
        });
    }
    
    public function playerRank($number){
        $this->sortPlayers();
        $sortedPlayers = array_keys($this->playerList);
        return $sortedPlayers[$number - 1];
    } 
  
}



## TEST ##
$table = new RankingTable(array('Jan', 'Maks', 'Monika'));
$table->recordResult('Jan', 2);
$table->recordResult('Maks', 3);
$table->recordResult('Maks', 2);
$table->recordResult('Monika', 5);

echo $table->playerRank(1), "</br>";
echo $table->playerRank(2), "</br>";
echo $table->playerRank(3), "</br>";