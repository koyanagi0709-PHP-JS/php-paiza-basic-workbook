<?php
# 問題文URL
# https://paiza.jp/works/mondai/stdout_primer/stdout_primer__specific_split_step6

/**
 * ルール
 * 取得した文字列を数値に変換して３桁区切りにし表示する
 * 先頭を３桁ごとに,（カンマ）で区切る
 * number_format関数は使えない
*/

/* 定数定義 */
define('PARTITION',',');
define('PARTITION_NUM',3);

/* 変数定義 */
$input_line = trim(fgets(STDIN));
$num = strval($input_line);
$count = 0;
$length = strlen($num);
$result = '';

/* 処理 */
for($i=0;$i<$length;$i++) {
    $count++;
    $str = substr($num,$i,1);
    // echo $str.PHP_EOL;
    if ($count === PARTITION_NUM && $i+1 !== $length) {
        $result .= $str;
        $result .= PARTITION;
        $count = 0;
    } else {
        $result .= $str;
    }
}

print $result;