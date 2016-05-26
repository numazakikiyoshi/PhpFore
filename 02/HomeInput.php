<form action="HomeOutput.php" method="post">

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
  <tr><th>性別</th><td><input type="radio" name="sex" value="0"> 男性
                    　　<input type="radio" name="sex" value="1"> 女性
                    　　<input type="radio" name="sex" value="2" checked> どちらでもない</td></tr>
  <tr><th>住所</th><td><input type="textbox" name="address"required placeholder="マサラタウン"></td></tr>
  <tr><th>電話番号</th><td><input type="textbox" pattern="^[0-9]{2,4}" name="tel" size="4"　required placeholder="025">-
                          <input type="textbox" pattern="^[0-9]{2,4}" name="tel2" size="4"　required placeholder="100">-
                          <input type="textbox" pattern="^[0-9]{2,4}" name="tel3" size="4"　required placeholder="000"></td></tr>
  <tr><th>メールアドレス</th><td><input type="textbox" name="mail1" size="20" required placeholder="MasterPoke">@
                              <input type="textbox"  name="mail2" size="20" required placeholder="kanto.co"></td></tr>
  <tr><th>どこで知ったか<br>（複数回答可）</td><td><input type="checkbox" name="where[]" value="0">あの辺
                                            　<input type="checkbox" name="where[]" value="1">その辺<br>
                                             <input type="checkbox" name="where[]" value="2">この辺
                                             <input type="checkbox" name="where[]" value="3">その他<br></td></tr>
  <tr><th>質問カテゴリー</th><td><select name="category[]" size ="5" multiple="multiple" required>
                               <option value="0"　selected>購入した商品について</option>
                               <option value="1">店舗について</option>
                               <option value="2">採用について</option>
                               <option value="3">その他</option>
                               <option value="4">それ以外</option></select></td></tr>
  <tr><th>質問内容</th><td><textarea name="comment" cols="50" rows="5" required placeholder="私の上司が敵の攻撃をよけろと無茶振りをしてきます。どうすればよろしいでしょうか??"></textarea></td></tr>
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
