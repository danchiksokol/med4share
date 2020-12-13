<?php
$jkt_ger = mysql_query("INSERT INTO jkt_reg (fio, specialty, phone, city, jkt_reg) VALUES FRO ('1', '1', '1', '1', '1')");
if($jkt_ger == true) {
    echo "Вы успешно зарегистрированы на Клинический форум «Опухоли желудочно-кишечного тракта» 2019!";
}else{
    echo "В процессе регистрации произошла ошибка!";
}
}
?>

<div class="row vertical-align">
    <div class="col-md-6" align="center">
        <!--img alt="Логотип РМАНПО" src="/media/files/logo/RMANPO.png"><-->
    </div>
    <div class="col-md-6" align="center">
        <img alt="Логотип РМАНПО" src="/media/files/logo/logo_forum_JKT.jpg">
    </div>
    <div class="col-md-6" align="center">
        <!--img alt="Логотип ROHS" src="/media/files/logo/TS_Oncology_200.png"><-->
    </div>
</div>
