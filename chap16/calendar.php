<?php 
for ($i=0; $i <=30 ; $i++) { 
    print date("y/m/d (l) ",strtotime("now+$i day") );
    print "<br>";
}