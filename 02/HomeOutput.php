<from>

<head>
<meta charset="UTF-8">
<title>入力確認</title>

<link rel="stylesheet" href="HomeDesign.css">
</head>

<h1>
    入力確認
</h1>


<?php
$count = 0;
foreach ($_POST as  $value){
    if(empty($value)){
        $count ++;
    }
}
    if( $count == 0){
        echo "性別 ".$_POST['name1']." ".$_POST['name2']."さん　こんにちは"."<br />";

        echo "性別 ".$_POST['sex']."<br />";

        echo "住所 ".$_POST['address']."在住　"."<br />";

        echo "電話番号 ".$_POST['tel']."-".$_POST['tel2']."-".$_POST['tel3']."<br />";

        echo "メアド ".$_POST['mail1']."@".$_POST['mail2']."宛てに多数のDMを送信いたします"."<br />";

        echo "アナタハ";
        if(isset( $_POST['where'] )){
            foreach ( $_POST['where'] as $value) {
                echo "「".$value."」";
            }
        }
        echo "デ知リマシタネ<br />";

        echo "質問カテゴリー ";
        if(isset( $_POST['category'] )){
            foreach ( $_POST['category'] as $value) {
                echo "「".$value."」<br />";
            }
        }
        echo "質問内容 ".$_POST['comment']."<br />";
    }else {
        echo"未入力の項目があるので、さっさともう一度入力しやがってください";

    }


?>
<p><a href="http://localhost/php/20160519/HomeInput.php" >入力画面に戻る</a><p>
</from>
