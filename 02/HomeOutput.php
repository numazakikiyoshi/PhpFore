<form action="HomeOutput.php" method="POST">

<head>
<meta charset="UTF-8">
<title>入力確認</title>

<link rel="stylesheet" href="HomeDesign.css">
</head>

<h1>
    入力確認
</h1>

<table class="type05">
    <tr><th>氏名</th><td><?php  echo $_POST['name1']." ".$_POST['name2'] ?></td></tr>
    <tr><th>性別</th><td><?php
                                if(isset($_POST['sex'])){
                                    foreach ( $_POST['sex'] as $value) {
                                        switch ($value) {
                                            case '0':
                                                echo "男性";
                                                break;
                                            case '1':
                                                echo "女性";
                                                break;
                                            case '2':
                                                echo "どちらでもない";
                                                break;
                                        }
                                    }
                                }
?></td></tr> ?></td></tr>
    <tr><th>住所</th><td><?php  echo $_POST['address'] ?></td></tr>
    <tr><th>電話番号</th><td><?php  echo $_POST['tel']."-".$_POST['tel2']."-".$_POST['tel3'] ?></td></tr>
    <tr><th>メールアドレス</th><td><?php  echo $_POST['mail1']."@".$_POST['mail2'] ?></td></tr>
    <tr><th>どこで知ったか<br>（複数回答可）</th><td><?php
                                                    if(isset($_POST['where'])){
                                                        foreach ( $_POST['where'] as $value) {
                                                            switch ($value) {
                                                                case '0':
                                                                    echo "あっちの方だよ";
                                                                    break;
                                                                case '1':
                                                                    echo "そっちの方だよ";
                                                                    break;
                                                                case '2':
                                                                    echo "この辺だよ";
                                                                    break;
                                                                case '3':
                                                                    echo "その他だよ";
                                                                    break;
                                                            }
                                                        }
                                                    }
    ?></td></tr>
    <tr><th>質問カテゴリー</th><td><?php
    if(isset( $_POST['category'] )){
        foreach ( $_POST['category'] as $value) {
            echo "「".$value."」";
        }
    }
    ?></select></p></td></tr>
    <tr><th>質問内容</th><td><?php  echo $_POST['comment'] ?></td></tr>
</table>

    <p><a href="http://localhost/php/20160519/HomeInput.php" >もう一度入力する</a><p>
</form>
