<?php

# 問題文URL
# https://paiza.jp/works/mondai/stdout_primer/stdout_primer__variable_array_step3


/**
 * 整数Nが入力値に与えられる
 * 1行目からN行目まで値を半角スペースで出力させる
 * 各行の出力できる数値は行数が最大値
 * 各行の末尾は改行する
*/

/* 変数定義 */
$n = trim(fgets(STDIN));
// print $n;

/* 処理 */
for($row=1;$row<=$n;$row++) {
    for($col=1;$col<=$row;$col++) {
        echo $col;
        if($col === $row) break;
        echo ' ';
    }
    echo PHP_EOL;
}