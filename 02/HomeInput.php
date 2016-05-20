<form action="HomeOutput.php" method="post">

<head>
<meta charset="UTF-8">
<title>入力ホーム</title>

<link rel="stylesheet" href="HomeDesign.css">
</head>

<h1>
    入力フォーム
</h1>

<table>
  <tr><td>姓</td><td><input type="textbox" name="name1"></td></tr>
  <tr><td>名</td><td><input type="textbox" name="name2"></td></tr>
  <tr><td>性別</td><td><input type="radio" name="sex" value="男性"> 男性<input type="radio" name="sex" value="女性"> 女性<input type="radio" name="sex" value="どちらでもない" checked> どちらでもない
                    </td></tr>
  <tr><td>住所</td><td><input type="textbox" name="address"></p></td></tr>
  <tr><td>電話番号</td><td><input type="textbox" size="4" name="tel">-<input type="textbox" size="4" name="tel2">-<input type="textbox" size="4" name="tel3"></td></tr>
  <tr><td>メールアドレス</td><td><input type="textbox" name="mail1">@<input type="textbox" name="mail2"></td></tr>
  <tr><td>どこで知ったか（複数回答可）</td><td><input type="checkbox" name="where[]" value="公式Twitter">公式Twitter
  <input type="checkbox" name="where[]" value="公式LINE">公式LINE<br>
  <input type="checkbox" name="where[]" value="織り込みチラシ">織り込みチラシ
  <input type="checkbox" name="where[]" value="店頭">店頭<br>
  <input type="checkbox" name="where[]" value="その他">その他<br></td></tr>
  <tr><td>質問カテゴリー</td><td><select name="category[]" size ="5" multiple="multiple">
      <option value="購入した商品について"　selected>購入した商品について</option>
      <option value="店舗について">店舗について</option>
      <option value="採用について">採用について</option>
      <option value="その他">その他</option>
      <option value="それ以外">それ以外</option>
  </select></p>
</td></tr>
  <tr><td>質問内容</td><td><input type="textbox" name="question"></td></tr>
</table>

<input type="submit">

</form>
