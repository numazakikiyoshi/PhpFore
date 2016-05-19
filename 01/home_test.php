<form action="home_test2.php" method="get">

姓 <input type="textbox" name="name1"></p>
名 <input type="textbox" name="name2"></p>

性別
<input type="radio" name="sex" value="man"> 男性
<input type="radio" name="sex" value="woman"> 女性
<input type="radio" name="sex" value="unknown"> どちらでもない
</p>

住所<input type="textbox" name="address"></p>

電話番号<input type="textbox" size="4"　name="tel1">-<input type="textbox" size="4" name="tel2">-<input type="textbox" size="4" name="tel3"></p>

メールアドレス<input type="textbox" name="mail1">@<input type="textbox" name="mail2"></p>

どこで知ったか（複数回答可）<br>
        <input type="checkbox" name="where[]" value="Twitter">公式Twitter<br>
        <input type="checkbox" name="where[]" value="LINE">公式LINE<br>
        <input type="checkbox" name="Where[]" value="flyer">織り込みチラシ<br>
        <input type="checkbox" name="Where[]" value="stor">店頭<br>
        <input type="checkbox" name="Where[]" value="other">その他</p>

<input type="submit">

</form>
