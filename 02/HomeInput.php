<form action="HomeOutput2.php" method="post">

<head>
<meta charset="UTF-8">
<title>入力ホーム</title>
<link rel="stylesheet" href="HomeDesign.css">
</head>

<h1>
    入力フォーム
</h1>

<table class="type05">
  <tr><th>姓</th><td><input type="textbox" name="name1"size="10" required placeholder="池"></td></tr>
  <tr><th>名</th><td><input type="textbox" name="name2"size="10" required placeholder="光宇宙"></td></tr>
  <tr><th>性別</th><td><input type="radio" name="sex" value="0"　required > 男性<input type="radio" name="sex" value="1"> 女性<input type="radio" name="sex" value="2" checked> どちらでもない</td></tr>
  <tr><th>住所</th><td><input type="textbox" name="address"required placeholder="マサラタウン"></p></td></tr>
  <tr><th>電話番号</th><td><input type="textbox" pattern="^[0-9]{2,4}" size="4" name="tel" required placeholder="025">-<input type="textbox" pattern="^[0-9]{2,4}" size="4" name="tel2" required placeholder="025">-<input type="textbox" pattern="^[0-9]{2,4}" size="4" name="tel3" required placeholder="025"></td></tr>
  <tr><th>メールアドレス</th><td><input type="textbox" pattern="[a-zA-Z0-9._%+-]" name="mail1" required　placeholder="master-">@<input type="textbox" pattern="[a-z0-9._%+-]" name="mail2" required placeholder="kanto.co"></td></tr>
  <tr><th>どこで知ったか<br>（複数回答可）</td><td><input type="checkbox" name="where[]" value="0">あっちの方
  <input type="checkbox" name="where[]" value="1">そっちの方<br>
  <input type="checkbox" name="where[]" value="2">この辺
  <input type="checkbox" name="where[]" value="3">その他<br></td></tr>
  <tr><th>質問カテゴリー</th><td><select name="category[]" size ="5" multiple="multiple" required>
      <option value="0"　selected>購入した商品について</option>
      <option value="1">店舗について</option>
      <option value="2">採用について</option>
      <option value="3">その他</option>
      <option value="4">それ以外</option>
  </select></p></td></tr>
  <tr><th>質問内容</th><td><textarea name="comment" cols="50" rows="5"required placeholder="敵の攻撃をかわすことが出来ません。どうすればいいでしょうか"></textarea></td></tr>
</table>



<input type="submit">

</form>
