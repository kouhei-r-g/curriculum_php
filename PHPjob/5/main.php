<?php
// セッション開始
session_start();
// セッションにuser_nameの値がなければlogin.phpにリダイレクト
if (empty($_SESSION["user_name"])) {
    header("Location: login.php");
    exit;
}

// データベース接続の設定
$dsn = 'mysql:host=localhost;dbname=yigroupblog;charset=utf8';
$username = 'root';
$password = 'root';

try {
    // データベースに接続
    $pdo = new PDO($dsn, $username, $password);
    // エラーモードを設定
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // booksテーブルのデータを取得
    $stmt = $pdo->query("SELECT * FROM books");
    $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'データベースの接続に失敗しました: ' . $e->getMessage();
    exit;
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>メイン</title>
    <style>
        body {
            text-align: center;
        }
        
        h2 {
            margin-top: 30px;
            text-align: left;
        }
        
        table {
            margin: 30px auto;
            border-collapse: collapse;
            width: 80%;
            max-width: 800px;
            text-align: center;
        }
        
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        .button {
            display: inline-block;
            padding: 8px 16px;
            background-color: red;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .logout-button {
            background-color: #808080;
            width: 6vw;
        }

        .signUp-button {
            background-color: blue;
            width: 6vw;
            margin-right: 1vw;
        }

        .container{
            margin: 30px auto;
            border-collapse: collapse;
            width: 80%;
            max-width: 800px;
            text-align: center;
        }

        .in_container{
            display: flex;
        }
    </style>
</head>
<body>
    
    <table>
        <div class="container">
            <h2>在庫一覧画面</h2>
            <div class="in_container">
                <form action="bookup.php" method="post">
                    <button class="button signUp-button" type="submit">新規登録</button>
                </form>
                <form action="logout.php" method="post">
                    <button class="button logout-button" type="submit">ログアウト</button>
                </form>
            </div>
            <tr>
                <th>タイトル</th>
                <th>発売日</th>
                <th>在庫数</th>
                <th>操作</th>
            </tr>
            <?php foreach ($books as $book): ?>
                <tr>
                    <td><?php echo $book['title']; ?></td>
                    <td><?php echo $book['date']; ?></td>
                    <td><?php echo $book['stock']; ?></td>
                    <td>
                        <form action="delete_post.php" method="post">
                            <input type="hidden" name="book_id" value="<?php echo $book['id']; ?>">
                            <button class="button" type="submit" onclick="return confirm('本当に削除しますか？')">削除</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </div>
    </table>

</body>
</html>
