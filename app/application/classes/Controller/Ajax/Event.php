<?php defined('SYSPATH') or die('No direct script access.');//защита от прямого вызова

class Controller_Ajax_Event extends Controller_Ajax
{
    public function action_rheumatology() {
        $year = intval($_GET['year']);
        $month = intval($_GET['month']);
        $razdel_id = 3;

        $data = ORM::factory('Calendar')->getMainPage($month, $year, $razdel_id);

        $dd = array();
        $dateArray = array(); // массив с датами
        $k = 0;

        foreach( $data as $val ) {
            // Ищем интервал между датами
            $dateBegin = new DateTime($val->date_begin);
            $dateEnd = new DateTime($val->date_end);

            if( $dateBegin < $dateEnd ) // Событие не одного дня
            {
                $interval = $dateBegin->diff($dateEnd)->days;

                for( $i = 0; $i <= $interval; $i++) {

                    if( isset( $dd[ $dateBegin->format('d-m-Y') ] ) ) {
                        $event_title = $dd[ $dateBegin->format('d-m-Y') ]['event_title'].'<br><br>'.$val->event_title;
                        $url = null;
                    }
                    else {
                        $event_title = $val->event_title;
                        $url = $val->url;
                    }


                    $dd[ $dateBegin->format('d-m-Y') ] = array(
                        'event_title' => $event_title,
                        'url'   => $url,
                        'badge' => (boolean) $dd[ $dateBegin->format('d-m-Y') ]['badge'] or $val->badge,
                        'date'  => $dateBegin->format('Y-m-d')
                    );

                    //echo $dateBegin->format('d-m-Y').' '.$val->event_title . "\n";
                    $dateBegin->modify('+1 day');
                }

            }
            else {

                if( isset( $dd[ $dateBegin->format('d-m-Y') ] ) ) {
                    $event_title = $dd[ $dateBegin->format('d-m-Y') ]['event_title'].'<br><br>'.$val->event_title;
                    $url = null;
                }
                else {
                    $event_title = $val->event_title;
                    $url = $val->url;
                }

                $dd[ $dateBegin->format('d-m-Y') ] = array(
                    'event_title' => $event_title,
                    'url'   => $url,
                    'badge' => (boolean) $dd[ $dateBegin->format('d-m-Y') ]['badge'] or $val->badge,
                    'date'  => $dateBegin->format('Y-m-d')
                );
            }


        }

        foreach( $dd as $val ) {
            $this->data[] = array(
                'date' => $val['date'],
                'badge' => $val['badge'],//$val->badge, // отмечать знаком
                'title' => $val['event_title'],
                'a' => '/rheumatology/calendar/'.$val['url']
            );
        }
        return;
    }

    public function action_neurology() {
        $year = intval($_GET['year']);
        $month = intval($_GET['month']);
        $razdel_id = 4;

        $data = ORM::factory('Calendar')->getMainPage($month, $year, $razdel_id);

        $dd = array();
        $dateArray = array(); // массив с датами
        $k = 0;

        foreach( $data as $val ) {
            // Ищем интервал между датами
            $dateBegin = new DateTime($val->date_begin);
            $dateEnd = new DateTime($val->date_end);

            if( $dateBegin < $dateEnd ) // Событие не одного дня
            {
                $interval = $dateBegin->diff($dateEnd)->days;

                for( $i = 0; $i <= $interval; $i++) {

                    if( isset( $dd[ $dateBegin->format('d-m-Y') ] ) ) {
                        $event_title = $dd[ $dateBegin->format('d-m-Y') ]['event_title'].'<br><br>'.$val->event_title;
                        $url = null;
                    }
                    else {
                        $event_title = $val->event_title;
                        $url = $val->url;
                    }


                    $dd[ $dateBegin->format('d-m-Y') ] = array(
                        'event_title' => $event_title,
                        'url'   => $url,
                        'badge' => (boolean) $dd[ $dateBegin->format('d-m-Y') ]['badge'] or $val->badge,
                        'date'  => $dateBegin->format('Y-m-d')
                    );

                    //echo $dateBegin->format('d-m-Y').' '.$val->event_title . "\n";
                    $dateBegin->modify('+1 day');
                }

            }
            else {

                if( isset( $dd[ $dateBegin->format('d-m-Y') ] ) ) {
                    $event_title = $dd[ $dateBegin->format('d-m-Y') ]['event_title'].'<br><br>'.$val->event_title;
                    $url = null;
                }
                else {
                    $event_title = $val->event_title;
                    $url = $val->url;
                }

                $dd[ $dateBegin->format('d-m-Y') ] = array(
                    'event_title' => $event_title,
                    'url'   => $url,
                    'badge' => (boolean) $dd[ $dateBegin->format('d-m-Y') ]['badge'] or $val->badge,
                    'date'  => $dateBegin->format('Y-m-d')
                );
            }


        }

        foreach( $dd as $val ) {
            $this->data[] = array(
                'date' => $val['date'],
                'badge' => $val['badge'],//$val->badge, // отмечать знаком
                'title' => $val['event_title'],
                'a' => '/neurology/calendar/'.$val['url']
            );
        }
        return;
    }

    public function action_index()
    {
        $year = intval($_GET['year']);
        $month = intval($_GET['month']);

        $data = ORM::factory('Calendar')->getMainPage($month, $year);

        $dd = [];
        $dateArray = array(); // массив с датами
        $k = 0;

        foreach( $data as $val ) {
            // Ищем интервал между датами
            $dateBegin = new DateTime($val->date_begin);
            $dateEnd = new DateTime($val->date_end);
            $eventDate = $val->event_time;
            if ($eventDate) {
                $eventDate = ' '.$eventDate;
            } else {
                $eventDate = ' 00:00:00';
            }


            if( $dateBegin < $dateEnd ) // Событие не одного дня
            {
                $interval = $dateBegin->diff($dateEnd)->days;

                for( $i = 0; $i <= $interval; $i++) {

                    if( isset( $dd[ $dateBegin->format('d-m-Y') ] ) ) {
                        $event_title = $dd[ $dateBegin->format('d-m-Y') ]['event_title'].'<br><br>'.$val->event_title;
                        $url = null;
                    }
                    else {
                        $event_title = $val->event_title;
                        $url = $val->url;
                    }


                    $dd[ $dateBegin->format('d-m-Y') ] = [
                        'event_title' => $event_title,
                        'url'   => $url,
                        'badge' => (boolean) $dd[ $dateBegin->format('d-m-Y') ]['badge'] or $val->badge,
                        'date'  => $dateBegin->format('Y-m-d').$eventDate
                    ];
                    
                    //echo $dateBegin->format('d-m-Y').' '.$val->event_title . "\n";
                    $dateBegin->modify('+1 day');
                }

            }
            else {

                if( isset( $dd[ $dateBegin->format('d-m-Y') ] ) ) {
                    $event_title = $dd[ $dateBegin->format('d-m-Y') ]['event_title'].'<br><br>'.$val->event_title;
                    $url = null;
                }
                else {
                    $event_title = $val->event_title;
                    $url = $val->url;
                }

                $dd[ $dateBegin->format('d-m-Y') ] = array(
                    'event_title' => $event_title,
                    'url'   => $url,
                    'badge' => (boolean) $dd[ $dateBegin->format('d-m-Y') ]['badge'] or $val->badge,
                    'date'  => $dateBegin->format('Y-m-d').$eventDate
                );
            }


        }

        foreach( $dd as $val ) {
            $this->data[] = array(
                'date' => $val['date'],
//                'badge' => $val['badge'],//$val->badge, // отмечать знаком
                'title' => $val['event_title'],
                'description' => '',
                'url' => '/calendar/'.$val['url']
            );
        }
        return;


        foreach( $data as $val ) {
            // Ищем интервал между датами

            $dateBegin = new DateTime($val->date_begin);
            $dateEnd = new DateTime($val->date_end);

          // echo $dateBegin->format('d-m-Y').' - '. $dateEnd->format('d-m-Y');
         //

            if( $dateBegin < $dateEnd ) // Событие не одного дня
            {

                $interval = $dateBegin->diff($dateEnd)->days;
             //   echo ' '.$interval.' '.$val->event_title."\n";

                if( $key = array_search($dateBegin->format('Y-m-d'), $dateArray) ) {
                    
                    $dd[$key] =  array(
                        'event_title' => $dd[$key]['event_title'].'<br><br>'.$val->event_title,
                        'url'   => null,
                        'badge' => (boolean) $dd[$key]['badge'] or $val->badge,
                        'date'  => $dateBegin->format('Y-m-d')
                    );
                } else {
                    // $dd[$dateBegin->format('d-m-Y')] =  array(
                    $dd[$k++] =  array(
                        'event_title' => $val->event_title,
                        'url'   => $val->url,
                        'badge' => (boolean) $val->badge,
                        'date'  => $dateBegin->format('Y-m-d')
                    );
                }



                $dateArray[] = $dateBegin->format('Y-m-d');

                for( $i = 1; $i <= $interval; $i++) {
                    $dateBegin->modify('+1 day');

                   // echo $dateBegin->format('Y-m-d').' '.$val->event_title."\n";

                   // echo $key."\n"; echo $k."\n";
                   // print_r($dateArray);



                    if( $key = array_search($dateBegin->format('Y-m-d'), $dateArray) ) {

                        $dd[$key] =  array(
                            'event_title' => $dd[$key]['event_title'].'<br><br>'.$val->event_title,
                            'url'   => null,
                            'badge' => (boolean) $dd[$key]['badge'] or $val->badge,
                            'date'  => $dateBegin->format('Y-m-d')
                        );

                        //echo $key.$val->event_title."\n";

                    }
                    else {

                        $dd[$k] =  array(
                            'event_title' => '',//$val->event_title,
                            'url'   => $val->url,
                            'badge' => (boolean) $val->badge,
                            'date'  => $dateBegin->format('Y-m-d')
                        );

                        $k++;
                    }


                    $dateArray[] = $dateBegin->format('Y-m-d');

                }
            } else { // Однодневное событие



                if( $key = array_search($dateBegin->format('Y-m-d'), $dateArray) ) {

                    $dd[$key] =  array(
                        'event_title' => $dd[$key]['event_title'].'<br><br>'.$val->event_title,
                        'url'   => null,
                        'badge' => (boolean) $dd[$key]['badge'] or $val->badge,
                        'date'  => $dateBegin->format('Y-m-d')
                    );
                }
                elseif( ! in_array( $dateBegin->format('Y-m-d'), $dateArray )  ) {
                 
                    $dd[$k++] =  array(
                        'event_title' => $val->event_title,
                        'url'   => $val->url,
                        'badge' => (boolean) $val->badge,
                        'date'  => $dateBegin->format('Y-m-d')
                    );
                }


                if( ! in_array( $dateBegin->format('Y-m-d'), $dateArray  ) ) {
                    $dateArray[] = $dateBegin->format('Y-m-d');
                }
            }
        }


        //print_r($dd);


        foreach( $dd as $val ) {
            $this->data[] = array(
                'date' => $val['date'],
                'badge' => $val['badge'],//$val->badge, // отмечать знаком
                'title' => $val['event_title'],
                'a' => '/calendar/'.$val['url']
            );
        }


        /*$this->data = array(
            array(
                "date" => "2015-01-31",
                "badge" => true,
                "title" => "Tonight",
                "body" => "<p class=\"lead\">Party<\/p><p>Like it's 1999.<\/p>",
                "footer" => "At Paisley Park",
                "classname" => "purple-event",
                'a' => '/gg'
            ),
            array(
                "date" => "2015-01-22",
                "badge" => false,
                "title" => "Tonight",
                "body" => "<p class=\"lead\">Party<\/p><p>Like it's 1999.<\/p>",
                "footer" => "At Paisley Park",
                "classname" => "purple-event",
                'a' => '/gg'
            ),
        ); */

       // SELECT * FROM `calendar_events` WHERE MONTH(`date_event`) = 1 AND YEAR(`date_event`) = 2015

        //$this->error = 'Нет данных';
    }

}