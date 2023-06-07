<?php
require_once('pdo.php');
session_start();

$errorMessage = "";

if (!empty($_POST)) {
    if (empty($_POST["title"])) {
        $errorMessage .= "タイトルを入力してください<br>";
    }
    if (empty($_POST["date"])) {
        $errorMessage .= "発売日を入力してください<br>";
    }
    if (empty($_POST["stock"])) {
        $errorMessage .= "在庫数を選択してください";
    }

    if (empty($errorMessage)) {
        try {
            $stmt = $dbh->prepare("INSERT INTO books (title, date, stock) VALUES (?, ?, ?)");
            $stmt->execute([$_POST["title"], $_POST["date"], $_POST["stock"]]);

            if ($stmt->rowCount() > 0) {
                echo "本が登録されました。";
            } else {
                echo "本の登録に失敗しました。";
            }
        } catch (PDOException $e) {
            echo "データベースエラー: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>本登録画面</title>
    <style>
        body {
            text-align: center;
        }
        
        h2 {
            margin-top: 30px;
            text-align: left;
        }
        
        .form-container {
            margin: 30px auto;
            width: 80%;
            max-width: 600px;
            text-align: left;
        }
        
        .form-container input[type="text"],
        .form-container select {
            width: 16vw;
            padding: 10px;
            margin-bottom: 20px;
        }
        
        .form-container button {
            background-color: blue;
            color: white;
            padding: 0.6vw 3vw;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }
        
        .form-container button:hover {
            background-color: darkblue;
        }
        
        .error-message {
            color: red;
            margin-bottom: 10px;
        }

        p{
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>本 登録画面</h2>
        
        <?php
            if (!empty($errorMessage)) {
                echo '<p style="color: red;">' . $errorMessage . '</p>';
            }
        ?>

        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <input type="text" id="title" name="title" placeholder="タイトルを入力してください">
            <br>
            <input type="text" id="date" name="date" placeholder="発売日を入力してください">
            <br>
            <p>在庫数</p>
            <select id="stock" name="stock">
                <option value="">選択してください</option>
                <?php
                for ($i = 1; $i <= 100; $i++) {
                    echo "<option value=\"$i\">$i</option>";
                }
                ?>
            </select>
            <br>
            <button type="submit">登録</button>
        </form>
    </div>
    
    <a href="main.php">メインページへ戻る</a>
</body>
</html>
