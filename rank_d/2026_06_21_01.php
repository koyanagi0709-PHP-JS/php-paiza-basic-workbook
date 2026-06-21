<?php

# 問題文URL
# https://paiza.jp/works/mondai/stdout_primer/stdout_primer__variable_array_step1

/**
 * ルール
 * 偶数Nが与えられる
 * N/2以下を１行目に表示する
 * N/2より大きくNまでを２行目に表示する
 * 数値と数値の間は半角スペース
 * 各行の末尾は改行
*/

/* 変数定義 */
$input_line = trim(fgets(STDIN));
$n = intval($input_line);

/* 処理 */
for($i=1;$i<=$n;$i++) {
    echo $i;
    if($n/2 === $i || $n === $i) {
        echo PHP_EOL;
    } else {
        echo ' ';
    }
}