<?php

$персонажи = json_decode(file_get_contents('персонажи.json'), true);

var_dump($персонажи);

function разбить_на_пары($персонажи){
    
    shuffle($персонажи);
    
}

function получить_выжевших($персонажи){
    $живые = [];
    
    foreach($персонажи as $персонаж){
        if($персонаж['alive']){
            $живые[] = $персонаж;
        }
    }
    return $живые;
}

function бой($персонаж1, $персонаж2){

    $результат = ['winner'=>'','loser'=>''];    
//
return $результат;

}
    // function (){}
