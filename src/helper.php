<?php
// +----------------------------------------------------------------------
// | Thinkyjf
// +----------------------------------------------------------------------
// | Copyright (c) 2018 http://www.thinkyjf.com, All rights reserved.
// +----------------------------------------------------------------------
// | Author: Mr.long <admin@zcphp.com>
// +----------------------------------------------------------------------

//定义助手
Validate::extend('yjfecho', function ($value, $id = '') {
    return yjfecho($value, $id);
});

/**
 * @param        $value
 * @param string $id
 * @param array  $config
 * @return bool
 */
function yjfecho($value)
{
	return $value;
}

