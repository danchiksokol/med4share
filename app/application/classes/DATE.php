<?php
defined('SYSPATH') or die('No direct script access.');
/*
 * Класс расширяющий хелпер Kohana_DATE
 */
class DATE extends Kohana_DATE {
    /**
     * Название месяцев на русском языке по номеру месяца
     * @param int $n номер месяца от 1 до 12
     * @param bool $end с окончанием или без (январь/января)
     * @return string
     */
    public static function ru_month($n, $end = false, $registr = true){
        $month_name =
            array(
                1 => 'января',
                2 => 'февраля',
                3 => 'марта',
                4 => 'апреля',
                5 => 'мая',
                6 => 'июня',
                7 => 'июля',
                8 => 'августа',
                9 => 'сентября',
                10 => 'октября',
                11 => 'ноября',
                12 => 'декабря'
            );
        $month_name_end =
            array(
                1 => 'январь',
                2 => 'февраль',
                3 => 'март',
                4 => 'апрель',
                5 => 'май',
                6 => 'июнь',
                7 => 'июль',
                8 => 'август',
                9 => 'сентябрь',
                10 => 'октябрь',
                11 => 'ноябрь',
                12 => 'декабрь'
            );

        $month_name = $end ? $month_name_end[$n] : $month_name[$n];

        if( $registr == true ) {
            $month_name = mb_convert_case($month_name, MB_CASE_TITLE);
        }

        return $month_name;
    }

    /**
     * Выходные дни в РБ
     * @param int $d день
     * @param int $m месяц
     * @return boolean
     */
    public static function ru_hollyday($d, $m){
        $hollyday = array(
            1   => 1,
            7   => 1,
            8   => 3,
            1   => 5,
            9   => 5,
            3   => 7,
            7   => 11,
            25  => 12,
            // нет радуницы
        );

        if (! empty ($hollyday[$d]) && $hollyday[$d] == $m) {
            return true;
        }
        else {
            return false;
        }
    }

    /**
     * Перевод вермени в человекопонятную форму
     * @param unix time string $time
     * @return string
     */
    public static function human_ru_time($time) {

        $month_name = date::ru_month(date('n', $time));

        $month = $month_name[date('n', $time)];
        $day = date('j', $time);
        $year = date('Y', $time);
        $hour = date('G', $time);
        $min = date('i', $time);

        $date = $day . ' ' . $month . ' ' . $year . ' г. в ' . $hour . ':' . $min;

        $dif = time() - $time;

        if ($dif < 59) {
            return $dif . " сек. назад";
        } elseif ($dif / 60 > 1 and $dif / 60 < 59) {
            return round($dif / 60) . " мин. назад";
        } elseif ($dif / 3600 > 1 and $dif / 3600 < 23) {
            return round($dif / 3600) . " час. назад";
        } else {
            return $date;
        }
    }

    /**
     * День надели словами
     * @param $n Номер недели от 0 до 6
     * @param bool $more Полнео название или сокращенное
     * @return mixed
     */
    public static function ru_week($n, $more = FALSE){
        $week_name =
            array(
                0 => 'вс',
                1 => 'пн',
                2 => 'вт',
                3 => 'ср',
                4 => 'чт',
                5 => 'пт',
                6 => 'сб',
            );
        $week_name_more =
            array(
                0 => 'воскресенье',
                1 => 'понедельник',
                2 => 'вторник',
                3 => 'среда',
                4 => 'четверг',
                5 => 'пятница',
                6 => 'суббота',
            );
        return $more ? $week_name_more[$n] : $week_name[$n];
    }

    /**
     * Перобразует строку даты формата 2012-11-29 в метку времени
     * @param string $str формат 2012-11-29
     * @return int метка времени
     */
    public static function mktime_from_input_date($str){
        $date_arr = explode('-', $str);
        return mktime(0, 0, 0, $date_arr[1], $date_arr[2], $date_arr[0]);
    }
}