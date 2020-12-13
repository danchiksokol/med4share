<?php
$Fio = Auth::instance()->get_user()->fio;
$Specialty = Auth::instance()->get_user()->specialty;
$Phone = Auth::instance()->get_user()->phone;
$City = Auth::instance()->get_user()->city;

$jkt_ger = mysql_query("INSERT INTO jkt_reg (fio, specialty, phone, city, jkt_reg) VALUES ('$Fio', '$Specialty', '$Phone', '$City', '1')");
if($jkt_ger == true) {
    echo "Вы успешно зарегистрированы на Клинический форум «Опухоли желудочно-кишечного тракта» 2019!";
}else{
    echo "В процессе регистрации произошла ошибка!";
}
?>