<?php 
$s = mysql_connect("localhost","e15007","1234") or die('失敗です');
print '成功しました';
mysql_close($s);