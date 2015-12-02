<?php

// データベース情報等の読み込み
require_once('data/db_info.php');

//データベースへの接続,データベース選択
$s = mysql_connect($SERV,$USER,$PASS) or die('失敗しました');
mysql_select_db($DBNM);
//スレッドグループ番号(gu)を取得し$gu_dに代入
$gu_d=isset($_GET["gu"])?htmlspecialchars($_GET["gu"]):null;;
//$gu_dに数字以外が含まれていたら処理を中止
if (preg_match("/[^0-9]/",$gu_d)) {
    print<<<eot1
    不正な値が入力されています<br>
    <a href="keizi_top.php" >ここをクリックしてスレッド一覧に戻ってください</a>
eot1;

    //名前とメッセージを取得してタグを削除
}elseif(preg_match("/[0-9]/",$gu_d)){
    $na_d=isset($_GET["na"])?htmlspecialchars($_GET["na"]):null;
    $me_d=isset($_GET["me"])?htmlspecialchars($_GET["me"]):null;

print 'OK!';
    //IPアドレス取得
    $ip=getenv("REMOTE_ADDR");
    //スレッドグループ番号(gu)に一致するレコードを表示
    $re=mysql_query("SELECT sure FROM tbj0 WHERE guru=$gu_d");
    $kekka=mysql_fetch_array($re);

    //スレッドグループ番号(gu)に一致するレコードを表示
    $re=mysql_query("SELECT sure FROM tbj0 WHERE guru=$gu_d");
    $kekka=mysql_fetch_array($re);

    //スレッド内容の表示文字列$sure_comを作成
    $sure_com="｢".$gu_d." ".$kekka[0]."｣";

    //スレッド表示のタイトル等書き出し
    print <<<eot2
    <!DOCTYPE html>
    <html lang="ja">
    <head>
    <meta charset="utf-8">
<title>SQLカフェ $sure_com スレッド</title>
    </head>
    <body BGCOLOR='darkgray'>
        <font size='7'>$sure_com スレッド!</font>
        <br><br>
        <font size=5>$sure_com のメッセージ</font>
        <br>
eot2;
print 'OK!';
    
    //名前($na_d)が入力されていればtbj1にレコード挿入

    if ($na_d<>"") {
        mysql_query("INSERT INTO tbj1 VALUES
            (0,'$na_d','$me_d',now(),$gu_d,'$ip')");
    }

    //水平線表示
    print "<hr>";

    //日時の順にレスデータを表示
    $re=mysql_query("SELECT * FROM tbj1 WHERE guru=$gu_d ORDER BY niti");

    $i=1;
    while ($kekka=mysql_fetch_array($re)) {
        print "$i($kekka[0]):<U>$kekka[1]</U>:$kekka[3] <br>";
        print nl2br($kekka[2]);
        print"<br><br>";
        $i++;
    }

    //データベース切断
    mysql_close($s);

    print<<<eot3
<hr>
<font size="5">
    $sure_com  にメッセージを書くときはここにどうぞ
    </font>
<form action="keizi.php" method="get">
名前 <input type="text" name="na" ><br>
メッセージ<br>
<textarea name="me" ROWS="10" COLS="70"></textarea>
    <br>
    <input type="hidden" name="gu" value="$gu_d">
    <input type="submit" name="" value=" 送信">
</form>
<hr>
<a href="keizi_top.php" title="">スレッド一覧に戻る</a>

    </body>
    </html>
eot3;

//$gu_dに数字以外も,数字も含まれていないときの処理

}else{
    print "スレッドを選択してください。<br>";
    print "<a href='keizei_top.php'>ここをクリックしてスレッド一覧に戻って下さい</a>";
}
?>
