<?php
//formの値取得
$name = $_POST['name'];
$email = $_POST['email'];
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
//$time = date("Y-m-d H:i:s");
$str = $q1 .',' .$q2 .',' .$q3;

//fopen ファイルまたは URL をオープンする a:書き出し用のみでオープン
$file = fopen('./data/data.txt','a');
//fwrite バイナリセーフなファイル書き込み処理
fwrite($file,$str . "\n");
//fclose オープンされたファイルポインタをクローズする
fclose($file);

header("Location: read.php");
?>