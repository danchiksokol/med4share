<?php
defined('SYSPATH') or die('No direct script access.');
/*
 * Класс расширяющий хелпер Kohana_DATE
 */
class TEXT extends Kohana_HTML
{

    /**
     * Генерирует случайную строку заданного типа и длины.
     *
     * @param   integer  length of string to return
     * @return  string
     */

    public static function randstr($length)
    {
        $random = "";
        srand((double)microtime() * 1000000);
        $char_list = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
        $listlength = strlen($char_list);
        while (strlen($random) < $length) $random .= substr($char_list, rand(0, $listlength), 1);
        return $random;
    }

    /**
     * // пример использования
     * echo "В Вашем почтовом ящике $n ".pluralForm($n, "письмо", "письма", "писем");
     * @param $n
     * @param $form1
     * @param $form2
     * @param $form5
     * @return mixed
     */
    public static function pluralForm($n, $form1, $form2, $form5)
    {
        $n = abs($n) % 100;
        $n1 = $n % 10;
        if ($n > 10 && $n < 20) return $form5;
        if ($n1 > 1 && $n1 < 5) return $form2;
        if ($n1 == 1) return $form1;
        return $form5;
    }

}