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
<!--<?php foreach ($_POST as  $value){
    if(empty($value)){
        $count ++;
    }
} ?>
<?php  if ($count > 0):?>
<?= '未入力の項目があるので、さっさともう一度入力しやがってください' ?>
<p><a href="http://localhost/php/20160519/HomeInput.php" >入力画面に戻る</a><p>
<?php else: ?> -->
    <table class="type05">
      <tr><th>姓</th><td><?php  echo $_POST['name1']." ".$_POST['name2'] ?></td></tr>
      <tr><th>性別</th><td><?php  echo $_POST['sex'] ?></td></tr>
      <tr><th>住所</th><td><?php  echo $_POST['address'] ?></td></tr>
      <tr><th>電話番号</th><td><?php  echo $_POST['tel']."-".$_POST['tel2']."-".$_POST['tel3'] ?></td></tr>
      <tr><th>メールアドレス</th><td><?php  echo $_POST['mail1']."@".$_POST['mail2'] ?></td></tr>
      <tr><th>どこで知ったか<br>（複数回答可）</th><td><?php  if(isset( $_POST['where'] )){
                                                        foreach ( $_POST['where'] as $value) {
                                                            if ( $_POST['where'] == "0"){
                                                                    echo "「".あっちの方."」";
                                                            /*}if ( $_POST['where'] == "1"){
                                                                    echo "「".そっちの方."」";
                                                            }if ( $_POST['where'] == "2"){
                                                                    echo "「".この辺."」";
                                                            }if ( $_POST['where'] == "3"){
                                                                    echo "「".その他."」";
                                                            */}
                                                    }
      } ?></th></tr>
      <tr><th>質問カテゴリー</th><td><?php
      if(isset( $_POST['category'] )){
          foreach ( $_POST['category'] as $value) {
              echo "「".$value."」<br />";
          }
      }
      ?></select></p></td></tr>
      <tr><th>質問内容</th><td><?php  echo $_POST['comment'] ?></td></tr>
    </table>

    <p><a href="http://localhost/php/20160519/HomeInput.php" >もう一度入力する</a><p>
<?php endif; ?>
</form>
