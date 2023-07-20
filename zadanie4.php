<?php

class Tezaurus{
    private $database = array();

    public function __construct($database){
        $this->database = $database;
    }

    public function getSynonyms($word){
        if(isset($this->database[$word])){
            $synonyms = $this->database[$word];
        }else{
            $synonyms = array();
        }
        $result = array(
            'word' => $word,
            'synonyms' => $synonyms
        );

        return json_encode($result);
    }
}

## TEST ##

$thesaurusData = array(
    "market" => array("trade"),
    "small" => array("little", "compact")
);

$tezaurus = new Tezaurus($thesaurusData);

echo $tezaurus->getSynonyms("small");
// Powinno wyświetlić: '{"word":"small","synonyms":["little","compact"]}'

echo $tezaurus->getSynonyms("asleast");
// Powinno wyświetlić: '{"word":"asleast","synonyms":[]}'