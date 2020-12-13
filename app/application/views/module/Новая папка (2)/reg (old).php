<?php define('SP', TRUE);
session_start();
include '../config.php';

if($_SESSION['auth']['user']){
    //header("Location: ../");
    //exit;
}
/* ===Фильтрация входящих данных=== */
function clear($var){
    $var = mysql_real_escape_string(strip_tags($var));
    return $var;
}
/* ===Фильтрация входящих данных=== */

if($_POST){
//========================Функция добавления пользователя==================//
    $fio=trim($_POST['fio']);
    $dolgnost=trim($_POST['dolgnost']);
    $login=$_POST['login'];
    $pass=$_POST['pass'];
    $special=$_POST['special'];
    $phone=$_POST['phone'];
    $mail=$_POST['mail'];
    $city=$_POST['city'];

    if(empty($login)){
        $_SESSION['answer']="<div class='error'>Укажите Логин пользователя</div>";
        $_SESSION['add_user']['dolgnost']=$dolgnost;
        $_SESSION['add_user']['login']=$login;
        $_SESSION['add_user']['pass']=$pass;
        $_SESSION['add_user']['special']=$special;          
        $_SESSION['add_user']['phone']=$phone;      
        $_SESSION['add_user']['mail']=$mail;        
    }else{ 
        $fio=clear($fio);
        $dolgnost=clear($dolgnost);
        $login=clear($login);
        $pass=md5($pass);
        $special=clear($special);
        $phone=clear($phone);
        $mail=clear($mail);

        $query=mysql_query("INSERT INTO `_users` (fio,dolgnost,login,pass,special,phone,mail,city,user_role_id) VALUES ('$fio','$dolgnost','$login','$pass','$special','$phone','$mail','$city','3')");
        
        if(mysql_affected_rows() > 0){
            $id=mysql_insert_id();
            $_SESSION['answer'].="<div class='ok'>Вы успешно зарегистрированы. <br>Используйте Логин и Пароль для <a href='".PATH."'>входа на сайт<i class='icon-login-2'></i></a></div>";
            unset($_SESSION['add_user']);
            //return true;
        }
    }
//========================Функция добавления пользователя==================//

}
/* ===Получение массива статей по категории=== */
    $query="SELECT * FROM `_specials` ORDER BY title ASC";
    $res=mysql_query($query) or die(mysql_error());
    $specials=array();
    while($row=mysql_fetch_assoc($res)){
        $specials[]=$row;
    }  

/* ===Получение массива статей по категории=== */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="SHORTCUT ICON" href="<?=PATH;?>template/img/favicons/icon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="<?=PATH?>template/css/fontello.css" />
<link rel="stylesheet" type="text/css" href="<?=PATH?>template/css/fontello_all_icon.css" />
<link rel="stylesheet" type="text/css" href="<?=PATH?>template/css/style.css" />

<title>Регистрация | Междисциплинарный медицинский портал</title>
</head>

<body>
    <section class="enter">
        <div class="enter-body">
            <img src="<?=PATH?>template/img/logo.png" alt="Регистрация | Междисциплинарный медицинский портал" title="Регистрация | Междисциплинарный медицинский портал" />
        <?php if(isset($_SESSION['answer'])){
            echo $_SESSION['answer'];
            unset($_SESSION['answer']);}?>
             <?if(!$_GET['question1']=="2" and !$_GET['question2']=="3" and !$_GET['question3']=="2"){?>
           <p>Уважаемые коллеги, добро пожаловать!</p>
           <p>Данный форум представляет предназначен для профессионального общения врачей, применяющих или планирующих применять в практической работе иммуноонкологический подход в лечении пациентов с онкологическими заболеваниями.</p>
           <p>Для участия в форуме просим Вас подтвердить Вас подтвердить, что Вы являетесь медицинским специалистом, и ответить на несколько вопросов.</p>
            <form method="get" action="" name="opros">

            <label for="question1">Какова основная функция лейкоцитов:</label>
            <select name="question1">
               <option value="2">Защита организма от инфекций, чужеродный белков и инородных тел</option>
               <option value="1">Перенос кислорода к тканям</option>
               <option value="3">Обеспечение свертываемости крови</option>
               <option value="4">Передача нервных импульсов</option>
           </select>
             <label for="question2">Антитело – это:</label>
          <select name="question2">
               <option value="1">Летальная токсичность лекарственного препарата</option>
               <option value="2">Тело, состоящее из антиматерии</option>
               <option value="3">Белковое соединение, являющееся важнейшим фактором иммунитета</option>
               <option value="4">Средство для похудения</option>    
           </select>
          <label for="question3">К белкам острой фазы относятся:</label>
          <select name="question3">
               <option value="1">Глюкоза</option>
               <option value="4">Холестерин</option>
               <option value="3">Калий</option>
               <option value="2">С-реактивный белок</option>
           </select>              
                  <input type="submit" value="Я ответил на все вопросы"/>    
          </form>
            <?}if($_GET['question1']=="2" and $_GET['question2']=="3" and $_GET['question3']=="2"){?>

            <p>Вы успешно прошли опрос.</p>

            <form method="post" action="">
                <input type="text" name="fio" placeholder="ФИО"/>
                <input type="text" name="login" placeholder="Логин"/>
                <input type="password" name="pass" placeholder="Пароль"/>
                <input type="text" name="dolgnost" placeholder="Должность"/>
                <select name="special">
                    <option value="">Специализация</option>
                    <?foreach($specials as $special){?>
                    <option value="<?=$special['special_id'];?>"><?=$special['title'];?></option>
                    <?}?>
                </select>
                <input type="text" name="phone" placeholder="Телефон"/>
                <input type="text" name="mail" placeholder="Почта"/>
                <input type="text" name="city" placeholder="Город"/>
                <input type="submit" value="Зарегистрироваться"/>    
            </form>
            <?}?>
            <a href="<?=PATH;?>"><i class="icon-login-2"></i>Вход на сайт</a>
        </div>               
    </section>
</body>
</html>
