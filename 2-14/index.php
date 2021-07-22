<?php
//count（要素の数を数える）
$members = ["久保田", "福田", "金子", "金井", "島津","古山"];
echo count($members);

//sort（要素の並べ替え）
$members = ["kubota", "fukuda", "kaneko", "kanai", "simazu","fukuyama"];
sort($members);
var_dump($members);

//in_array（配列に中にある要素が存在しているか）
$members = ["kubota", "fukuda", "kaneko", "kanai", "simazu","fukuyama"];
if(in_array("fukuda", $members)){
   echo"福田はいるよ！！";
}else{
  echo"福田はいないよ。。。";
}

//implode（配列を結合して文字列に変換）
$members = ["kubota", "fukuda", "kaneko", "kanai", "simazu","fukuyama"];
$atstr = implode("と", $members);
var_dump($atstr);

$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = explode("@", $members);
var_dump($atstr);


?>