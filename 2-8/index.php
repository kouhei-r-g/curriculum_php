<?php
    // 変数の定義。フルーツの中に配列を入れる
    $fruits = ["appleといったら" =>"りんご", "orangeといったら" => "みかん", "peachといったら" => "もも"];
    // 繰り返し処理。フルーツ配列の中のkeyと値を呼び出す。
    foreach($fruits as $key => $value){
        echo $key;
        echo $value;
        echo "<br>";
    }
?>
<?php
    echo "<br>";
    // トランザクションについて
    echo "■トランザクションについて"."<br>";
    echo "分割不可な一連の処理。ここからここまではワンセットということ"."<br>";

    // 排他ロックについて
    echo "■排他ロックについて"."<br>";
    echo "ダブルブッキングしないように、自分以外はみることも変更することもできないようにすること"."<br>";

    // チューニングについて
    echo "■チューニングについて"."<br>";
    echo "調整する事。通信の状態が良くなるように電波状況を調整したり、たくさんのデータを処理するためにプログラムのつくりを見直したりすること"."<br>";
?>