<?php
//$m=array("眠くないですか","おはようこざいます","こんにちは","こんばんは");
$m= array("yonaka" => "眠くないですか",
"asa" => "お早うございます",
"hiru" =>"こんにちは",
"yoru" =>"こんばんは");
$hour= date("G");
var_dump($hour);
if ($hour>=18) {
    print $m["yoru"];
}elseif($hour>=9){
    print $m["hiru"];
}elseif($hour>=6){
    print $m["asa"];
 }