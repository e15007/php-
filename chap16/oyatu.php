<?php 
$da = 15;
var_dump($da);
//date("G");
switch($da){
    case 10:
    print "10時のおやつです";
    break;
    case 15:
    print "3時のおやつです";
    break;
    default:
    print "おやつではありません";
}