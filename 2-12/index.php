<form action="result.php" method="post">
    <!-- お名前 -->
    お名前：<input type="text" name="name"><br>
    ご希望商品：
    <input type="radio" name="prize" value="A賞">A賞
    <input type="radio" name="prize" value="B賞">B賞
    <input type="radio" name="prize" value="C賞">C賞<br>
    個数：<select name="number">
      <?php for ($i=1;$i<=10;$i++){ ?>
        <option value="<?php echo $i; ?>">
          <?php echo $i; ?>
        </option>
      <?php } ?>
    </select><br>
    <input type="submit" value="申込"/>
</form>

<br>

<p>----IT用語----</p><br>

<p>■モジュール</p><br>
<p>部品の事。何かとマージさせて動かす。</p><br>

<p>■バージョン管理システム</p><br>
<p>ファイルに対して「誰が」「いつ」「何を変更したか」というような情報を記録することで、過去のある時点の状態へ復元をおこなったり、変更内容の差分を表示できるようにするシステムのこと</p><br>

<p>■サブクエリ</p><br>
<p>SQL文の中にSQL文を書くこと。</p><br>