<?php

# 問題文URL
# https://paiza.jp/works/mondai/stdout_primer/stdout_primer__specific_split_step5

/**
 * ルール
 * 入力された値（改行区切り）を取得
 * 前後に半角スペースと｜でセパレートし出力
 * ただし先頭は半角スペースなし
 * 末尾も半角スペースなし
*/

/* 定数定義 */
define('SPACE',' ');
define('PARTITION','|');
define('COUNT',10);

/* 変数定義 */
$lists = array();
$result = '';

/* 処理 */
for($i=0; $i<COUNT; $i++) array_push($lists,trim(fgets(STDIN)));
$result = implode(' | ',$lists);
echo trim($result);