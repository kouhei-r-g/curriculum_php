<?php
// セッション開始
session_start();
// セッションにuser_nameの値がなければlogin.phpにリダイレクト
if (empty($_SESSION["user_name"])) {
    header("Location: login.php");
    exit;
}

// POSTデータから削除する記事のIDを取得
$bookId = $_POST['book_id'];

// データベース接続の設定
$dsn = 'mysql:host=localhost;dbname=yigroupblog;charset=utf8';
$username = 'root';
$password = 'root';

try {
    // データベースに接続
    $pdo = new PDO($dsn, $username, $password);
    // エラーモードを設定
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // 削除する記事のSQLを実行
    $stmt = $pdo->prepare("DELETE FROM books WHERE id = :id");
    $stmt->bindValue(':id', $bookId, PDO::PARAM_INT);
    $stmt->execute();

    // 削除完了後、main.phpにリダイレクト
    header("Location: main.php");
    exit;
} catch (PDOException $e) {
    echo 'データベースの接続に失敗しました: ' . $e->getMessage();
    exit;
}
?>
