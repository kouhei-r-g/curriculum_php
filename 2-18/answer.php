<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main>
    <?php 
$my_name = $_POST["my_name"];

//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
$number = $_POST["number"];
$language = $_POST["language"];
$comand = $_POST["comand"];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

function result($correctanswer,$answer){
    if ($correctanswer == $answer) {
        print "正解！";
    }else {
        print "残念・・・";
    }
}
?>


<p class="name"><?php echo "$my_name" ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php 
    result($answer1,$number);
?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php 
 result($answer2,$language);
?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php 
 result($answer3,$comand);
?>
    </main>
</body>
</html>