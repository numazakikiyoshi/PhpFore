<?php

/*<head>
<meta charset="UTF-8">
<title>入力ホーム</title>

<link rel="stylesheet" href="HomeDesign.css">
</head>*/

echo $_GET['name1']." ".$_GET['name2']."さん　こんにちは"."<br />";

echo "性別 ".$_GET['sex']."<br />";

echo "住所 ".$_GET['address']."在住　"."<br />";

echo "電話番号 ".$_GET['tel']."-".$_GET['tel2']."-".$_GET['tel3']."<br />";

echo "メアド ".$_GET['mail1']."@".$_GET['mail2']."宛てに多数のDMを送信いたします"."<br />";

echo "アナタハ";
if(isset( $_GET['where'] )){
    foreach ( $_GET['where'] as $value) {
        echo "「".$value."」";
    }
}
echo "デ知リマシタネ<br />";

echo "質問カテゴリー ";
if(isset( $_GET['category'] )){
    foreach ( $_GET['category'] as $value) {
        echo "「".$value."」<br />";
    }
}

echo "質問内容 ".$_GET['question']."<br />";


?>
