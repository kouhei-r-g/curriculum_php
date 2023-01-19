

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
        
    }
    echo "合計{$i}回でゴールしました";
?><br>






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
