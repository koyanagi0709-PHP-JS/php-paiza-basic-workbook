<?php

# 問題文URL
# https://paiza.jp/works/mondai/stdout_primer/stdout_primer__2dim_array_step2

/**
 * ルール
 * 9個の数値が半角スペース区切りで入力される
 * この数値を 3 行 3 列の形式で出力
 * 3個目の数値の後は半角スペースを改行に変更する
*/

/* 変数定義 */
$input_line = trim(fgets(STDIN));
$input_len = strlen($input_line);
// print $input_len;
$count=0;
$result = '';

/* 処理 */
for($i=0; $i<$input_len; $i++) {
    $str = substr($input_line,$i,1);
    if($str === ' ') {
        $count++;
        if($count === 3) {
            $result .= PHP_EOL;
            $count = 0;
        } else {
            $result .= $str; 
        }
    } else {
        $result .= $str;
    }
}

echo $result;