<form action="HomeOutput.php" method="POST">

<head>
<meta charset="UTF-8">
<title>入力確認</title>

<link rel="stylesheet" href="HomeDesign.css">
</head>

<h1>
    入力確認
</h1>


    <?php foreach ($_POST as  $value){
        $count=0;
        if(empty($value)){
                $count ++;
            }
    }
    ?>
</body>




<script>
  var color = '青';
  if (color == '青') {
    console.log('進む');
  } else {
    console.log('止まる');
  }
</script>




<table border="1">
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
  <tr><td>質問内容</td><td><?php  echo $_POST['question'] ?></td></tr>
</table>


</form>
