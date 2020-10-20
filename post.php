<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>第5回課題</title>
    <style>
    h1{
        width:100%;
        text-align:center;
    }
    #anquate{
        width:550px;
        margin:20px auto 0;
    }
    .anquate-set{
        margin:60px 0 0 0;
    }
    .anquate-set p{
        font-weight:bold;
        font-size:20px;
    }
    .anquate-submit{
        margin:60px auto 0;
        text-align:center;
    }
    </style>
</head>
<body>
<form action="write.php" method="post">
<h1>テレワークに関するアンケート</h1>
<section id="personalInfo">
<!-- <ul>
    <li>名前:<input type="text" name="name"></li>
    <li>E-mail:<input type="text" name="email"></li>
</ul> -->
</section>
<section id="anquate">
    <div id="Q1" class="anquate-set">
    <p>質問1：テレワーク勤務になってから体力が落ちましたか？</p>
    <input type="radio" name="q1" value="Q1-1" checked>はい
    <input type="radio" name="q1" value="Q1-2">いいえ
    <input type="radio" name="q1" value="Q1-3">どちらでもない
    </div>
    <div id="Q2" class="anquate-set">
    <p>質問2：テレワーク勤務を引き続き続けていきたいですか</p>
    <input type="radio" name="q2" value="Q2-1" checked>はい
    <input type="radio" name="q2" value="Q2-2">いいえ
    <input type="radio" name="q2" value="Q2-3">どちらでもない
    </div>
    <div id="Q3" class="anquate-set">
    <p>質問3：テレワークによって仕事以外の生活に変化はありましたか？</p>
    <input type="radio" name="q3" value="Q3-1" checked>はい
    <input type="radio" name="q3" value="Q3-2">いいえ
    <input type="radio" name="q3" value="Q3-3">どちらでもない
    </div>
    <div class="anquate-submit">
    <input type="submit" value="送信">
    </div>
</section>
</form>
</body>
</html>