<?php
    $limit = 40;
    $total = 0;
    for ($i = 1; $i <= $limit; $i++) {
        $n = mt_rand(1, 6);
        $total += $n;
        echo "{$i}回目={$n}";
        echo "<br>";
        if ($total >= $limit) {
            echo "合計{$i}回でゴールしました";
            break;
        }
    }
?><br>


<?php


$time = date('H');

if (6 <= $time && $time <= 12 ){
    echo "今{$time}時台です";
    echo "<br>";
    echo "おはようございます";
} else if (13 <= $time && $time <= 18){
    echo "今{$time}時台です";
    echo "<br>";
    echo "こんにちは";
} else if (19 <= $time && $time <= 24){
    echo "今{$time}時台です";
    echo "<br>";
    echo "こんばんは";
}

?>
