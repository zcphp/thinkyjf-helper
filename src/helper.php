<?php
// +----------------------------------------------------------------------
// | Thinkyjf
// +----------------------------------------------------------------------
// | Copyright (c) 2018 http://www.thinkyjf.com, All rights reserved.
// +----------------------------------------------------------------------
// | Author: Mr.long <admin@zcphp.com>
// +----------------------------------------------------------------------
// | 定义常用的助手方法
// +----------------------------------------------------------------------

//定义助手
Validate::extend('yjf_test', function ($value) {
	//调用本文件中的方法
    return yjf_test($value);
});

/**
 * 测试方法
 * @param        $value
 * @param string $id
 * @param array  $config
 * @return bool
 */
function yjf_test($value){
	return $value;
}

