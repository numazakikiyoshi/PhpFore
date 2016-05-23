<form action="HomeOutput.php" method="POST">

<head>
<meta charset="UTF-8">
<title>入力確認</title>

<link rel="stylesheet" href="HomeDesign.css">
</head>

<h1>
    入力確認
</h1>

<?php $count =0; ?>
<?php foreach ($_POST as  $value){
    if(empty($value)){
        $count ++;
    }
} ?>
<?php  if ($count > 0):?>
<?= '未入力の項目があるので、さっさともう一度入力しやがってください' ?>
<p><a href="http://localhost/php/20160519/HomeInput.php" >入力画面に戻る</a><p>
<?php else: ?>
    <table class="type05">
      <tr><td>姓</td><td><?php  echo $_POST['name1']." ".$_POST['name2'] ?></td></tr>
      <tr><td>性別</td><td><?php  echo $_POST['sex'] ?></td></tr>
      <tr><td>住所</td><td><?php  echo $_POST['address'] ?></td></tr>
      <tr><td>電話番号</td><td><?php  echo $_POST['tel']."-".$_POST['tel2']."-".$_POST['tel3'] ?></td></tr>
      <tr><td>メールアドレス</td><td><?php  echo $_POST['mail1']."@".$_POST['mail2'] ?></td></tr>
      <tr><td>どこで知ったか（複数回答可）</td><td><?php  if(isset( $_POST['where'] )){
                                                        foreach ( $_POST['where'] as $value) {
                                                        echo "「".$value."」";
                                                    }
      } ?></td></tr>
      <tr><td>質問カテゴリー</td><td><?php
      if(isset( $_POST['category'] )){
          foreach ( $_POST['category'] as $value) {
              echo "「".$value."」<br />";
          }
      }
      ?></select></p></td></tr>
      <tr><td>質問内容</td><td><?php  echo $_POST['comment'] ?></td></tr>
    </table>
<?php endif; ?>
</form>
