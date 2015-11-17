<meta charset="utf-8">

<?php 
$s = mysql_connect("localhost","e15007","1234") or die('失敗です');
print '成功しました<br>';
mysql_select_db('db1');

$q = <<<eot
select bang,avg(uria)
from tb
where uria >= 50
group by bang
having avg(uria) >= 120
order by avg(uria) desc;
eot;
//var_dump($q);
$re = mysql_query($q);
while($kekka = mysql_fetch_array($re)){
    print '社員番号:';
    print $kekka[0];
    print '売上平均';
    print $kekka[1];
    print '<br>';
    
}
mysql_close($s);




// mysql_query("insert into tb1 values('K780',エスキュー花子,25)");
// $re = mysql_query("select * from tb1");
// while($kekka = mysql_fetch_array($re)){
//     print $kekka[0];
//     print ':';
//     print $kekka[1];
//     print ':';
//     print $kekka[2];
//     print '<br>';
//     }