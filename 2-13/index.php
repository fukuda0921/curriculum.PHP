<?php
//ceil(切り上げ)
$x = 2.3234242343;
echo ceil($x);

//floor（切り捨て）
$x = 2.3234242343;
echo floor($x);

//round（四捨五入）
$x = 2.3234242343;
echo round($x);

//pi（円周率）
echo pi();

function CylinderArea($r,$h){
  $cylinder_area = $r * $r * pi() * $h;
  echo round($cylinder_area);
}
CylinderArea(2,4);

//strlen（文字列の長さ）
$str = "hfuehogwgwuehgoweug";
    echo strlen($str);

//strpos（検索）
$str = "FukudaMitsuhiro";
    echo strpos($str, "i");

//substr（文字列の切り取り）
$str = "FukudaMitsuhiro";
echo substr($str, -1, 2);

//str_replace（置換）

    $str = "fukudamituhiro";
    echo str_replace("hiro", "HIRO", $str);

//日本語の置換
    $str = "ふくだみつひろ";
    echo mb_strlen($str);

//printf（フォーマット化した文字列を出力）
$name = "金子さん";
$number = 34;

printf("%sの残り時間はあと%dです", $name, $number);

$limit_hour = 4;
$limit_minute = 54;

printf("%s時間%d分", $limit_hour,$limit_minute );

//sprintf（変数に代入できるprintf）
$limit_hour = 4;
$limit_minute = 54;

$time_up = sprintf("%s時間%d分", $limit_hour,$limit_minute );
echo $time_up;
?>