<p>■切り上げ</p><br>
<?php
    $i = 5.5 * 11;
    echo ceil($i); 
?><br>

<p>■切り捨て</p><br>
<?php
    $i = 6.1;
    echo floor($i);
?><br>

<p>■四捨五入</p><br>
<?php
    $i = 6.5;
    echo round($i);
?><br>

<p>■円周率</p><br>
<?php
    echo pi();
    
    function circleArea($i) {
        $circle_area = $i * $i * pi();
        echo $circle_area;
    }
    // 半径が5の円の面積の計算
    circleArea(5);
    ?><br>

<p>■乱数</p><br>
<?php
    echo mt_rand(1, 500);
?><br>

<p>■文字列に関する関数</p><br>
<?php
    $str = "Bruno Mars";
    echo "今回の文字列はBruno Mars";
    echo "<br>";
    echo "文字列の長さは";
    echo strlen($str);
    echo "<br>";
    echo "oという文字を検索";
    echo strpos($str,"o");
    echo "<br>";
    echo "Marsだけ切り取り";
    echo substr($str,-4,4);
    echo "<br>";
    echo "Marsをmarsに置換";
    echo str_replace("Mars","mars",$str);
?><br>

<p>■表示に関する関数</p><br>
<?php
    $name = "東さん";
    $weight = 60;
    $high = 177;
    $limit_month = 1;
    $limit_day = 31;

    printf("%sの体重は%dkgで、身長は%dcmです。", $name,$weight,$high);
    echo "<br>";
    printf("%02d月%02d日までに10キロ増やさなければいけません。",$limit_month,$limit_day);
    echo "<br>";
    echo "■sprintfについて";
    echo "<br>";
    $limit = sprintf("締め切りは%02d月%02d日", $limit_month, $limit_day);
    echo $limit;
?>

<p>■PostgreSQL・Oracle SQL</p><br>
<p>PostgreSQLは、データをテーブル形式で管理するリレーショナルデータベース管理システム（RDBMS）の1つ</p><br>
<p>Oracle Databaseのリレーショナルデータベース管理システム（RDBMS）に、情報の登録や検索を行うためのコマンド言語がSQL</p><br>

<p>■TortoiseGit・TortoiseSVN</p><br>
<p>Subversionは、１か所で集中的に構成管理をするのに対して、
Gitは、１つの統括したマスタはあるものの、このマスタから分割して管理する</p><br>

<p>■外部設計・内部設計</p><br>
<p>外部設計は、実際にシステムの仕様を決定する段階です。要件定義で決定したシステムの機能要件や非機能要件、制約条件、外部とのやり取りなどをより具体的な仕様にすることで、実際にプログラム可能な形にします。</p><br>
<p>内部設計では、外部設計の結果を実際にプログラミングできるように、システム内部に特化した詳細な設計を行います。</p><br>


