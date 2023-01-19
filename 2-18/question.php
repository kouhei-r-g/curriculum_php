<?php
    //POST送信で送られてきた名前を受け取って変数を作成
    $my_name = $_POST["my_name"];
    //①画像を参考に問題文の選択肢の配列を作成してください。
    $numbers = [80,22,20,21];
    $language = ["PHP","Python","JAVA","HTML"];
    $comand = ["join","select","insert","update"];
    //② ①で作成した、配列から正解の選択肢の変数を作成してください
    $answer1 = $numbers[0];
    $answer2 = $language[3];
    $answer3 = $comand[1];
?>


<p class="name">お疲れ様です<?php echo $my_name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method ="post">
    <h2>ネットワークのポート番号は何番？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
        foreach( $numbers as $value ){?>
            <input type="radio" name="number" value="<?php echo $value; ?>">
            <?php echo $value;
    }?>
 
    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php 
        foreach( $language as $value ){?>
            <input type="radio" name="language" value="<?php echo $value; ?>">
            <?php echo $value;
    }?>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php 
        foreach( $comand as $value ){?>
            <input type="radio" name="comand" value="<?php echo $value; ?>" >
            <?php echo $value;
    }?>

    <br>

    <input type="submit" value="回答する" >
    <!--問題の正解の変数と名前の変数を[answer.php]に送る--> 
        <input type="hidden" name="answer1" value="<?php echo $answer1; ?>">
        <input type="hidden" name="answer2" value="<?php echo $answer2; ?>">
        <input type="hidden" name="answer3" value="<?php echo $answer3; ?>">
        <input type="hidden" name="my_name" value="<?php echo $my_name; ?>">
</form>


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
    
</body>
</html>