<?php
/**
 * ルール
 * １行目の入力値に暗号の数整数Nが与えられる
 * ２行目の入力値に半角スペース区切りで暗号m_iが与えられる
 * 
 * ゴールは、最長の単語と最短の単語の差を求めること
*/

/* 変数定義 */
$n = intval(trim(fgets(STDIN)));
$lists = explode(' ',trim(fgets(STDIN)));
// print_r($lists);

/* 処理 */
$listsLen = array_map(function($v){
    return strlen($v);
},$lists);
echo max($listsLen) - min($listsLen);