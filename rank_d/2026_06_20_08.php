<?php

# 問題文URL
# https://paiza.jp/works/mondai/stdout_primer/stdout_primer__string_output_boss

/**
 * ルール
 * 10個の文字列が半角スペース区切りで入力される
 * すべての文字を改行区切りで表示させる
*/

$str = trim(fgets(STDIN));
$array = explode(' ',$str);
$withEol = array_map(function($v){
    return $v.PHP_EOL;
},$array);
// print_r($withEol);

echo implode('',$withEol);