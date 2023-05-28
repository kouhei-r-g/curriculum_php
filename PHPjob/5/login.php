<?php
require_once('pdo.php');
// セッション開始
session_start();

// $_POSTが空ではない場合
$errorMessage = ""; // エラーメッセージを格納する変数を初期化

if (!empty($_POST)) {
    if (empty($_POST["name"])) {
        $errorMessage .= "名前が未入力です。<br>";
    }
    if (empty($_POST["pass"])) {
        $errorMessage .= "パスワードが未入力です。<br>";
    }


    // 両方共入力されている場合
    if (!empty($_POST["name"]) && !empty($_POST["pass"])) {
        //ログイン名とパスワードのエスケープ処理
        $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
        $pass = htmlspecialchars($_POST['pass'], ENT_QUOTES);
        // ログイン処理開始
        $pdoConfig = new PDOConfig();
        $pdoConfig->connect();
        $pdo = $pdoConfig->pdo;

        try {
            //データベースアクセスの処理文章。ログイン名があるか判定
            $sql = "SELECT * FROM users WHERE name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }

        // 結果が1行取得できたら
        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // ハッシュ化されたパスワードを判定する定形関数のpassword_verify
            if (password_verify($pass, $row['password'])) {
                // セッションに値を保存
                $_SESSION["user_id"] = $row['id'];
                $_SESSION["user_name"] = $row['name'];
                // main.phpにリダイレクト
                header("Location: main.php");
                exit;
            } else {
                // パスワードが違ってた時の処理
                $errorMessage .= "パスワードに誤りがあります。<br>";
            }
        } else {
            //ログイン名がなかった時の処理
            $errorMessage .= "ユーザー名かパスワードに誤りがあります。<br>";
        }
    }
}
?>

<!doctype html>
<html lang="ja">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>ログインページ</title>
    <style>
        /* ボディ全体をフルスクリーンに設定 */
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        
        .container {
            text-align: center;
            position: relative;
        }
        
        .button {
            background-color: blue;
            color: white;
            padding: 10px 60px;
            border: none;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 5px;
            display: flex;
        }

        .button1 {
            background-color: #008080;
            color: white;
            padding: 0.5vw 1vw;
            border: none;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 0.6vw;
            cursor: pointer;
            border-radius: 5px;
            position: absolute;
            top: 1vw;
            left: 12vw;
        }
        
        h2{
            text-align: left;
        }

        input[type="text"],
        input[type="password"] {
            font-size: 1vw;
            width: 20vw;
            padding: 0.5vw;
            margin-bottom: 1vw;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>ログイン画面</h2>

        <!-- エラーメッセージの表示 -->
        <?php
            if (!empty($errorMessage)) {
                echo '<p style="color: red;">' . $errorMessage . '</p>';
            }
        ?>

        <form method="post" action="">
            <input type="text" name="name" size="15" placeholder="ユーザー名"><br>
            <input type="password" name="pass" size="15" placeholder="パスワード"><br>
            <input type="submit" value="ログイン" class="button">
        </form>
        <a href="signUp.php" class="button1">新規ユーザー登録</a>
    </div>
</body>
</html>
