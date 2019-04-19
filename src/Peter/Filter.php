<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/19
 * Time: 16:43
 */

namespace Peter;

class Filter
{

    public static function filterWord($str)
    {
        $str = str_replace('123', '456', $str);
        return $str;
    }

}