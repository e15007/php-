<?php
$m=array("眠くないですか","おはようこざいます","こんにちは","こんばんは");
$hour= date("G");
if ($hour>=18) {
    print $m[3];
}elseif($hour>=9){
    print $m[2];
}elseif($hour>=6){
    print $m[1];
}else{
    print $m[0];
}