<? $last_controller = false; ?>
<? foreach( $data as $val ) {

        if ($val['controller'] == 'News') {

            // Формируем урл
            $url = '/news/'.$val['url'];

            if ($last_controller != $val['controller']) {
                echo '<h3>Новости</h3>';
            }
        } elseif ($val['controller'] == 'PageStatic') {

            // Формируем урл
            $url = '/'.$val['url'];

            if ($last_controller != $val['controller']) {
                echo '<h3> Статические страницы</h3>';
            }
        } elseif ($val['controller'] == 'Calendar') {

            // Формируем урл
            $url = '/calendar/'.$val['url'];

            if ($last_controller != $val['controller']) {
                echo '<h3>Календарь событий</h3>';
            }
        }





    echo '<p><a href="'.$url.'">'.$val['name'].' <span class="badge">'.$val['count'].'</span></a></p>';


    $last_controller = $val['controller'];
}
?>