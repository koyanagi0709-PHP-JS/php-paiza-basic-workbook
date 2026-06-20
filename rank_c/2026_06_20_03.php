<?php

# 問題文URL
# https://paiza.jp/works/mondai/stdout_primer/stdout_primer__2dim_array_boss

/**
 * ルール
 * 入力値Nが与えられる。
 * N×Nの表を作成する
 * 値と値の間は半角スペース
 * 各行の末尾は改行
*/

$n = intval(trim(fgets(STDIN)));

for($row=1; $row<=$n; $row++) {
    for($col=1; $col<=$n; $col++) {
        echo $row * $col;
        
        if ($col !== $n) {
            echo ' ';
        }
    }
    echo PHP_EOL;
}