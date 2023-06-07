<?php
require_once('pdo.php');
session_start();

// セッションにuser_nameの値がなければlogin.phpにリダイレクト
if (empty($_SESSION["user_name"])) {
    header("Location: login.php");
    exit;
}

// POSTデータから削除する記事のIDを取得
$bookId = $_POST['book_id'];

try {
    // 削除する記事のSQLを実行
    $stmt = $dbh->prepare("DELETE FROM books WHERE id = :id");
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
