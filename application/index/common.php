<?php
/**
 * +-------------------------------------------------
 * + 返回信息提示
 * +-------------------------------------------------
 * + @param array $array status状态 info提示信息
 * +-------------------------------------------------
 * + @return boolean true|false
 * +-------------------------------------------------
 */
function returnMsg($array = array()) {
	$default ['status'] = 0;
	$default ['info'] = '非法操作';
	return array_merge ( $default, $array );
}