

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SQLカフェにようこそ!</title>
</head>
<body bgcolor="green">
<?php
$mozi =<<<eot
    ＳＱＬカフェにようこそ!
    <hr>
    2行目に表示させたい
    3行目に表示させたい
    <u> アンダーライン</u>
    <b>太字</b>
    <i>イタリック</i>
    <a href='http://softbank.co.jp' >ソフトバンク株式会社</a>
<img src="oya.gif" alt="">
eot;
print nl2br($mozi);
//print $mozi;
?>
</body>
</html>

