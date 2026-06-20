<?php
# 問題文URL
# https://paiza.jp/works/mondai/stdout_primer/stdout_primer__2dim_array_step1

/**
 * ルール
 * 数値0813を2行2列で表示させる
 * 数値同士の間には半角スペースを入れる
*/

$num = '0813';
echo substr($num,0,1).' '.substr($num,1,1).PHP_EOL
.substr($num,2,1).' '.substr($num,3,1).PHP_EOL;