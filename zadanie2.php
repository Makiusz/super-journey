<?php

class TextInput{
    protected $sum = '';

    public function add($text){
        $this->sum .= $text;
    }
    public function getValue(){
        return $this->sum;
    }
}

class NumericInput extends TextInput {
    public function add($text){
        if(is_numeric($text)){
            $this->sum .= $text;
        }
       
    }
}

## TEST ##

$textInput = new TextInput();
$textInput->add("Hello");
$textInput->add(" World");
echo $textInput->getValue(); 
echo "</br>";

$numericInput = new NumericInput();
$numericInput->add("123");
$numericInput->add("abc");
$numericInput->add("123 asc");
$numericInput->add("456");
echo $numericInput->getValue(); 
