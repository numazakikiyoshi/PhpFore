<form action="HomeOutput.php" method="get">

姓 <input type="textbox" name="name1"></p>
名 <input type="textbox" name="name2"></p>

性別
<input type="radio" name="sex" value="男性"> 男性
<input type="radio" name="sex" value="女性"> 女性
<input type="radio" name="sex" value="どちらでもない" checked> どちらでもない
</p>

住所<input type="textbox" name="address"></p>

電話番号<input type="textbox" size="4" name="tel">-<input type="textbox" size="4" name="tel2">-<input type="textbox" size="4" name="tel3"></p>

メールアドレス<input type="textbox" name="mail1">@<input type="textbox" name="mail2"></p>

どこで知ったか（複数回答可）<br>
    <input type="checkbox" name="where[]" value="公式Twitter">公式Twitter<br>
    <input type="checkbox" name="where[]" value="公式LINE">公式LINE<br>
    <input type="checkbox" name="where[]" value="織り込みチラシ">織り込みチラシ<br>
    <input type="checkbox" name="where[]" value="店頭">店頭<br>
    <input type="checkbox" name="where[]" value="other">その他</p>

質問カテゴリー<br>
    <select name="category[]" size ="5" multiple="multiple">
        <option value="購入した商品について"　selected>購入した商品について</option>
        <option value="店舗について">店舗について</option>
        <option value="採用について">採用について</option>
        <option value="その他">その他</option>
        <option value="それ以外">それ以外</option>
    </select></p>

質問内容 <input type="textbox" name="question"></p>

<input type="submit">

</form>
