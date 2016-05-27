<form action="result.php" method="post">

<head>
<meta charset="UTF-8">
<title>入力ホーム</title>
<link rel="stylesheet" href="HomeDesign.css">
</head>

<h1>
    入力フォーム
</h1>

<table class="type05">
  <tr><th>姓</th><td><input type="textbox" name="name1"size="10" required placeholder="苗字"></td></tr>
  <tr><th>名</th><td><input type="textbox" name="name2"size="10" required placeholder="名前"></td></tr>
  <tr><th>性別</th><td><label><input type="radio" name="sex" value="0"> 男性</label>
                    　　<label><input type="radio" name="sex" value="1"> 女性</label>
                    　　<label><input type="radio" name="sex" value="2" checked> どちらでもない</label></td></tr>
  <tr><th>住所</th><td><input type="textbox" name="address"required placeholder="どこか"></td></tr>
  <tr><th>電話番号</th><td><input type="textbox" pattern="^[0-9]{2,4}" name="tel" size="4"　required placeholder="123">-
                          <input type="textbox" pattern="^[0-9]{2,4}" name="tel2" size="4"　required placeholder="456">-
                          <input type="textbox" pattern="^[0-9]{2,4}" name="tel3" size="4"　required placeholder="789"></td></tr>
  <tr><th>メールアドレス</th><td><input type="textbox" name="mail1" size="20" required placeholder="mail">@
                              <input type="textbox" onKeyup="this.value=this.value.replace(/[^0-9a-z]+\.[a-z]{2,3}$/,'')" pattern="[A-Za-z0-9.-]+\.[a-z]{2,3}$" name="mail2" size="20" required placeholder="address"></td></tr>
  <tr><th>どこで知ったか<br>（複数回答可）</td><td><label><input type="checkbox" name="where[]" value="00">あの辺</label>
                                             <label><input type="checkbox" name="where[]" value="01">その辺</label><br>
                                             <label><input type="checkbox" name="where[]" value="02">この辺</label>
                                             <label><input type="checkbox" name="where[]" value="03">その他<br></td></tr>
  <tr><th>質問カテゴリー</th><td><select name="category[]" size ="1" required>
                               <option value="100"　selected>さっさと選びやがってください。</option>
                               <option value="0"　>購入した商品について</option>
                               <option value="1">店舗について</option>
                               <option value="2">採用について</option>
                               <option value="3">その他</option>
                               <option value="4">それ以外</option></select></td></tr>
  <tr><th>質問内容</th><td><textarea name="comment" cols="50" rows="5" required placeholder="??"></textarea></td></tr>
</table>
<input type="submit"　value="送信"><br>
<input type="reset" value="リセット">

</form>
<!--
th 見出しに使われる
td 内容に使われる
type　入力項目のタイプ
pattern 入力の文字指定
[0-9]　数字だけ
{2,4}　2桁以上4桁以下
name　入力項目の名前
size 入力項目の枠のサイズ
required 必須項目
placeholder　薄い時の入力例
value　送信される値
checked　すでにチェックされている
selected　すでに選択されている
textarea 複数行入力可能な入力フォームを表示します。
cols="100" rows="5" 横縦のサイズ
select セレクトボックス
multiple　複数選択可能
option　セレクトタグで定義されたメニューに倒して項目を作成
-->
