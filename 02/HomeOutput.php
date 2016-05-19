<?php
echo $_GET['name1']." ".$_GET['name2']."さん　こんにちは"."<br />";

echo "性別 ".$_GET['sex']."<br />";

echo "住所 ".$_GET['address']."さん　"."<br />";

echo "電話番号 ".$_GET['tel']."-".$_GET['tel2']."-".$_GET['tel3']."<br />";

echo "メアド ".$_GET['mail1']."@".$_GET['mail2']."宛てに多数のDMを送信いたします"."<br />";

echo "アナタハ";
if(isset( $_GET['where'] )){
    foreach ( $_GET['where'] as $value) {
        echo "「".$value."」";
    }
}
echo "デ知リマシタネ<br />";

?>
