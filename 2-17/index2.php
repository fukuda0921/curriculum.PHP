<?php

date_default_timezone_set('Asia/Tokyo');
$time = date('G');

if (6 <= $time && $time <= 12 ){
    echo "今{$time}時台です";
    echo '<br>';
    echo 'おはようございます';

} else if (13 <= $time && $time <= 18){
    echo "今{$time}時台です";
    echo '<br>';
    echo 'こんにちは';
} else if (19 <= $time && $time <= 24){
    echo "今{$time}時台です";
    echo '<br>';
    echo 'こんばんわ';
}

?>