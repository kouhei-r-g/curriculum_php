<?php
    //ユーザー定義関数
    function Rectangular($height, $width, $tall){
        // volume=体積
        $volume = ($height * $width) * $tall;
        //前述で求めた体積を出力
        echo "直方体の体積は".$volume."cm3";
        echo ""."<br>";
    }
    Rectangular(8,10,5);
?>
<?php
    echo ""."<br>";
    
    echo "■ハッシュ化"."<br>";
    echo "ハッシュ化とは、データを不規則な文字列に変換する手法のこと。返還後はもとに戻せない。（不可逆性）"."<br>";

    echo "■総合テスト"."<br>";
    echo "要件定義で作成した要件の内容に沿っているかを確認するテストのこと。すべての機能が揃った状態でテストされる"."<br>";

    echo "■デバッグ"."<br>";
    echo "不具合の原因を探して直すこと。バグの原因を探して取り除く作業"."<br>";
    
    
?>