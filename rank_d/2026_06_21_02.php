<?php

# 問題文URL
# https://paiza.jp/works/mondai/stdout_primer/stdout_primer__variable_array_step2


/**
 * ルール
 * 入力値N Mが半角スペース区切りで入力される
 * 出力値の１行目には1からNまで出力し行の末尾は改行
 * 出力値の２行目には1からMまで出力し行の末尾は改行
 * 各値の間は半角スペース
*/

/* 変数定義 */
list($n,$m) = explode(' ',trim(fgets(STDIN)));
// echo $n,$m;

/* 処理 */
$array_n = range(1,$n);
$array_m = range(1,$m);
// print_r($array_n);
// print_r($array_m);

echo implode(' ',$array_n).PHP_EOL;
echo implode(' ',$array_m).PHP_EOL;