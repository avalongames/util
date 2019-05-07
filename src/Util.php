<?php
/**
 * Created by PhpStorm.
 * User: xmxtc
 * Date: 2019/5/7
 * Time: 2:09 PM
 */

namespace AvalonGames\Util;


class Util
{
    //生成指定长度的随机字符串
    public static function getRandomStringID(int $len, $chars = null)
    {
        if (is_null($chars)) {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        }

        $lc = strlen($chars) - 1;
        $str = '';
        for ($i = 0; $i < $len; $i++) {
            $str .= $chars[mt_rand(0, $lc)];
        }

        return $str;
    }
}