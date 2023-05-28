<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームからユーザー名とパスワードを取得
    if (isset($_POST["name"]) && isset($_POST["password"])) {
        $username = $_POST["name"];
        $password = $_POST["password"];

        // パスワードをハッシュ化
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // データベースに新規ユーザーを登録する処理を行う
        $servername = "localhost";
        $usernameDB = "root";
        $passwordDB = "root";
        $database = "yigroupblog";

        // データベースに接続
        $conn = new mysqli($servername, $usernameDB, $passwordDB, $database);

        // 接続エラーハンドリング
        if ($conn->connect_error) {
            die("データベース接続エラー: " . $conn->connect_error);
        }

        // ユーザーをデータベースに登録するクエリ
        $sql = "INSERT INTO users (name, password) VALUES ('$username', '$hashedPassword')";

        if ($conn->query($sql) === true) {
            // 登録成功時の処理
            echo "新規ユーザーが登録されました。";
        } else {
            // 登録エラーハンドリング
            echo "エラー: " . $sql . "<br>" . $conn->error;
        }

        // データベース接続を閉じる
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>ユーザー登録画面</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .button {
            background-color: blue;
            color: white;
            padding: 0.6vw 3vw;
            border: none;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 1vw;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        h1 {
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
    <script>
        function clearPlaceholder(element) {
            element.placeholder = '';
        }
    </script>
</head>
<body>

<div class="form-container">
    <h1>ユーザー登録画面</h1>
    <form method="POST" action="">
        <input type="text" name="name" id="name" placeholder="ユーザー名" onfocus="clearPlaceholder(this)"><br>
        <input type="password" name="password" id="password" placeholder="パスワード" onfocus="clearPlaceholder(this)"><br>
        <input type="submit" value="新規登録" id="signUp" name="signUp" class="button">
    </form>
    <p>既にアカウントをお持ちですか？ <a href="login.php">ログイン</a></p>
</div>

</body>
</html>
