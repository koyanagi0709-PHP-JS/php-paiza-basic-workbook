<?php
# 問題文URL
# https://paiza.jp/works/mondai/stdout_primer/stdout_primer__variable_array_boss


/**
 * ルール
 * 入力値１行目に自然数Nと自然数Mが与えられる
 * 自然数Nは入力値２行目に与えられるAの数列Aの長さを表す
 * 自然数Mは入力値３行目に与えられるBの数列Bの長さを表す
 * 数列Aを数列Bの数値ごとに分割し半角スペース区切りで表示し末尾は改行
*/

/* 変数定義 */
list($n,$m) = explode(' ',trim(fgets(STDIN)));
// echo $n,$m;
$listA = explode(' ',trim(fgets(STDIN)));
$listB = explode(' ',trim(fgets(STDIN)));
// print_r($listA);
// print_r($listB);

/* 処理 */
for($row=0;$row<count($listB);$row++) {
    for($col=0;$col<$listB[$row];$col++) {
        echo $listA[0];
        array_shift($listA);
        if($col+1 == $listB[$row]) break;
        echo ' ';
    }
    echo PHP_EOL;
}