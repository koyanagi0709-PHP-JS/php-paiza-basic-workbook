<?php
# 問題文URL
# https://paiza.jp/works/mondai/stdout_primer/stdout_primer__variable_array_step4


/**
 * ルール
 * 整数Nが１行目の入力値に与えられる
 * ２行目は半角スペース区切りで入力値M_iが与えられる
 * 出力にはM_iを１から順にM_iまで出力する
 * 出力時は半角スペース区切りで表示
 * 出力時の末尾は改行する
*/

/* 変数定義 */
$n = trim(fgets(STDIN));
$lists = explode(' ',trim(fgets(STDIN)));
// print_r($lists);

for($row=1;$row<=$n;$row++) {
    for($col=1;$col<=$lists[$row-1];$col++) {
        echo $col;
        if($col == $lists[$row-1]) break;
        echo ' ';
    }
    echo PHP_EOL;
}