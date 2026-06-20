<?php

# 問題文URL
# https://paiza.jp/works/mondai/stdout_primer/stdout_primer__2dim_array_step3

/**
 * ルール
 * 九九表の作成
 * 数値と数値の間は半角スペース
 * 各行の末尾は改行
*/

for($i=1;$i<=9;$i++) {
    for($e=1;$e<=9;$e++) {
        print ($i * $e);
        if ($e !== 9) print ' ';
    }
    print PHP_EOL;
}