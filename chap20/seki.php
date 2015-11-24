<?php 
$keitai="080-2345-67o89";
$yuubin="107-0052";
//$m="107-0052";
//if(preg_match("/^[0-9]{3}-[0-9]{4}$/",$m)){
if(preg_match("/^(090|080|070|050)-\d{4}-\d{4}$/",$keitai)){
    print "とりあえずOKです";
}else{
    print "誤りがあります";
}