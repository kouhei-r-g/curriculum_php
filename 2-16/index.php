<?php

        $testFile = "test.txt";
    $contents = "こんにちは！";
    
    if (is_writable($testFile)) {
        // 書き込み可能なときの処理
        // 対象のファイルを開く
        $fp = fopen($testFile, "w");
        // 対象のファイルに書き込む
        fwrite($fp, $contents);
        // ファイルを閉じる
        fclose($fp);
        // 書き込みした旨の表示
        echo "finish writing!!";
    } else {
        // 書き込み不可のときの処理
        echo "not writable!";
        exit;
    }
    echo "<br>";

    $test_file = "test2.txt";
    
    if (is_readable($test_file)) {
        // 読み込み可能なときの処理
        // 対象のファイルを開く
        $fp = fopen($test_file, "r");
        // 開いたファイルから1行ずつ読み込む
        while ($line = fgets($fp)) {
            // 改行コード込みで1行ずつ出力
            echo $line.'<br>';
        }
        // ファイルを閉じる
        fclose($fp);
    } else {
        // 読み込み不可のときの処理
        echo "not readable!";
        exit;
    }
?>

<p>■CakePHPの2系・3系の違い</p><br>
<p>モデル周りの構成や、DBからデータを取得する際のコードも比較的簡単になった。CakePHP2のQuelyBuilderでは多次元配列をつかい複雑だったものが、CakePHP3では簡単に使えるように変更されています。</p><br>

<p>■LAMP</p><br>
<p>オープンソースソフトウェアの組み合わせを指す言葉（略称）です。
具体的にはOSのLinux、WebサーバーのApache、データベースのMySQL、プログラミングのPerl、PHP、Pythonを指します。</p><br>

<p>■AWS</p><br>
<p>Amazon Web Servicesの略で、Amazonが提供している100以上のクラウドコンピューティングサービスの総称</p><br>