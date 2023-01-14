<p>■配列</p><br>
<?php
    $numbers = [3, 4, 56, 1, 45];
    sort($numbers);
    echo "要素を小さい順に並び替え";
    echo "<br>";
    var_dump($numbers);
    echo "<br>";
    echo "要素の数は";
    echo count($numbers);
    echo "<br>";
    echo "配列の中に5はあるか";
    echo "<br>";
    if (in_array(5,$numbers)) {
        echo "5は入ってます。";
    }else {
        echo "5は入っていません。";
    }
    echo "<br>";
    echo "配列の前にnumberを追加";
    echo "<br>";
    $atstr = implode("number", $numbers);
    var_dump($atstr);
    echo "<br>";
    echo "文字列をもとの配列に戻す";
    echo "<br>";
    $re_numbers = explode("number", $atstr);
    var_dump($re_numbers);
    echo "<br>";
?>

<p>■要件定義(要求仕様書)</p><br>
<p>システム開発などのプロジェクトを始める前の段階で、必要な機能や要求をわかりやすくまとめていく作業のこと</p><br>

<p>■単体テスト・結合テスト</p><br>
<p>単体テストでは常に単一ユニット (関数呼び出しなど) からの結果を受け取るのに対し、結合テストでは複数のモジュールやデータソースからの結果を集約するケースもある</p><br>

<p>■テスト仕様書(どのようなもの、項目)</p><br>
<p>テスト仕様書とは、システムやソフトウェアが、クライアントのヒアリングをもとに作り上げた要件定義書の通りに機能するかどうか、テストするポイントをまとめたドキュメント</p><br>
