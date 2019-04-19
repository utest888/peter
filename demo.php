<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/19
 * Time: 16:48
 */
require './vendor/autoload.php';

use Peter\Filter;

$result = Filter::filterWord('123-123-123');

echo $result;