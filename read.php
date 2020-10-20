<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<?php
$filename = './data/data.txt';
$errMessage = "エラーが発生しました。";

//fopen ファイルまたは URL をオープンする r:読み込みのみでオープン
$fp = fopen($filename, 'r');
$q1_1_count = 0;
$q1_2_count = 0;
$q1_3_count = 0;
$q2_1_count = 0;
$q2_2_count = 0;
$q2_3_count = 0;
$q3_1_count = 0;
$q3_2_count = 0;
$q3_3_count = 0;

while($txt = fgets($fp)){  // fgets ファイルポインタから1行取得する
    // echo "here";
    //explode 文字列を文字列により分割する
    $arr = explode(',', trim($txt));
    //print_r 指定した変数に関する情報を解りやすく出力する
    // print_r($arr[0]);

    if ($arr[0] == 'Q1-1') {
        $q1_1_count += 1;
    }
    if ($arr[0] == 'Q1-2') {
        $q1_2_count += 1;
    }
    if ($arr[0] == 'Q1-3') {
        $q1_3_count += 1;
    }
    if ($arr[1] == 'Q2-1') {
        $q2_1_count += 1;
    }
    if ($arr[1] == 'Q2-2') {
        $q2_2_count += 1;
    }
    if ($arr[1] == 'Q2-3') {
        $q2_3_count += 1;
    }
    if ($arr[2] == 'Q3-1') {
        $q3_1_count += 1;
    }
    if ($arr[2] == 'Q3-2') {
        $q3_2_count += 1;
    }
    if ($arr[2] == 'Q3-3') {
        $q3_3_count += 1;
    }
    // echo $q1_2_count; 
    //print_r($arr);   
}
// echo $q1_2_count;
//file_put_contents phpでのファイル書き込み  file_put_contents(ファイル名, 書き込みデータ [, オプションフラグ [, コンテキスト]])
//file_put_contents($fileArr, serialize($arr), LOCK_EX);
fclose($fp);
?>

<!DOCTYPE html>
<html lang="jp">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.0/Chart.min.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

<canvas id="myBarChart"></canvas>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<script>
//idがmyBarChartのcanvasタグを取得
var ctx = document.getElementById("myBarChart");

var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
    labels: ['質問1', '質問2', '質問3'],
    datasets: [
        {
        label: 'はい',
        data: [<?= $q1_1_count ?>, <?= $q2_1_count ?>, <?= $q3_1_count ?>],
        backgroundColor: "rgba(219,39,91,0.5)"
        },
        {
        label: 'いいえ',
        data: [<?= $q1_2_count ?>, <?= $q2_2_count ?>, <?= $q3_2_count ?>],
        backgroundColor: "rgba(130,201,169,0.5)"
        },
        {
        label: 'どちらでもない',
        data:[<?= $q1_3_count ?>, <?= $q2_3_count ?>, <?= $q3_3_count ?>],
        backgroundColor: "rgba(255,183,76,0.5)"
        }
    ]
    },

    options: {
    title: {
        display: true,
        text: 'テレワークの実態調査'
    },
    scales: {
        yAxes: [{
        ticks: {
            suggestedMax: 50,
            suggestedMin: 0,
            stepSize: 10,
            callback: function(value, index, values){
            return  value +  '人'
            }
        }
        }]
    },
    }
});
</script>
</body>
</html>