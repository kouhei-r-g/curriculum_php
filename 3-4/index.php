<?php

include "pdo.php";

// DB接続
$pdoConfig = new PDOConfig();
$pdoConfig->connect();
$db = $pdoConfig->pdo;

// ユーザデータの取得
$stmt = $db->prepare("SELECT * FROM users");
$stmt->execute();
$users = $stmt->fetchAll();

// 記事データの取得
$stmt = $db->prepare("SELECT * FROM posts");
$stmt->execute();
$posts = $stmt->fetchAll();
?>





<body>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
  <body>
    <header>
        <div class="header-left">
            <img src="1599315827_logo.png">
        </div>
        <div class="header-right">
            <div class="top">
                <div class ="style1">
                    ようこそ <?php echo $users[0]["last_name"] . $users[0]["first_name"] ; ?> さん
                </div>
            </div>
            <div class="bottom">
                <div class="style2">
                    最終ログイン日：<?php echo $users[0]["last_login"]; ?>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="DBtable">
            <?php
                $conn = mysqli_connect("localhost","root","root","checktest4");
                $result = mysqli_query($conn,"SELECT id,title,category_no,comment,created FROM posts ORDER BY id DESC");

                echo "<table>
                <tr>
                <th>記事ID</th>
                <th>タイトル</th>
                <th>カテゴリ</th>
                <th>本文</th>
                <th>投稿日</th>
                </tr>";

                while($row = mysqli_fetch_array($result))
                {
                    $category = "その他";
                    if ($row['category_no'] == 1) {
                        $category = "食事";
                    } elseif ($row['category_no'] == 2) {
                        $category = "旅行";
                    }
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['title'] . "</td>";
                    echo "<td>" . $category . "</td>";
                    echo "<td>" . $row['comment'] . "</td>";
                    echo "<td>" . $row['created'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";

                mysqli_close($conn);
            ?>
        </div>    
    </main>
    <footer>
        <div class ="YI">
            Y&I group.inc
        </div>
    </footer>
  </body>
</html>
