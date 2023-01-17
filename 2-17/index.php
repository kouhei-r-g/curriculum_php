<!-- <?php
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
?><br> -->

<!-- while文 -->
<?php
    $limit = 0;
    $i = 1;
    $total = 0;
    while ($limit <= 40) {
        $n = mt_rand(1, 6);
        echo "{$i}回目={$n}";
        echo "<br>";
        $i ++;
        $limit += $n;
        if ($total >= $limit) {
            echo "合計{$i}回でゴールしました";
            break;
        }
    }
?>






<?php

date_default_timezone_set('Asia/Tokyo');
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
