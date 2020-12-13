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
    $fio=clear(trim($_POST['fio']));
    $dolgnost=clear(trim($_POST['dolgnost']));
    $degree=clear(trim($_POST['degree']));
    $rank=clear(trim($_POST['rank']));
    $special=clear($_POST['special']);
    $special2=clear($_POST['special2']);
    $phone=clear($_POST['phone']);
    $mail=clear($_POST['mail']);
    $place_work=clear($_POST['place_work']);
    $department=clear($_POST['department']);
    $country=clear($_POST['country']);
    $region=clear($_POST['region']);
    $city=clear($_POST['city']);
    $mailing=clear($_POST['mailing']);
    $login=clear($_POST['login']);
    $pass=md5(clear($_POST['pass']));
    $data_reg=date("Y-m-d H:i:s");
    //print_r($_POST);
    if(empty($fio) or empty($dolgnost) or empty($special) or empty($phone) or empty($mail) or empty($place_work) or empty($region) or empty($login) or empty($pass)){
        $_SESSION['answer']="<div class='error'>Заполните обязательные поля!</div>";
        $_SESSION['add_user']['fio']=$fio;
        $_SESSION['add_user']['dolgnost']=$dolgnost;
        $_SESSION['add_user']['degree']=$degree;
        $_SESSION['add_user']['rank']=$rank;
        $_SESSION['add_user']['special']=$special;          
        $_SESSION['add_user']['special2']=$special2;          
        $_SESSION['add_user']['phone']=$phone;      
        $_SESSION['add_user']['mail']=$mail;        
        $_SESSION['add_user']['place_work']=$place_work;
        $_SESSION['add_user']['department']=$department;
        $_SESSION['add_user']['country']=$country;
        $_SESSION['add_user']['region']=$region;
        $_SESSION['add_user']['city']=$city;
        $_SESSION['add_user']['mailing']=$mailing;
        $_SESSION['add_user']['login']=$login;
        //print_r($_SESSION['add_user']);
    }else{
        //проверка одинакового логина
        $check_login=mysql_query("SELECT user_id FROM `_users` WHERE login='$login'");
        if(mysql_fetch_assoc($check_login)>0){
          $reg_check="1";
          $_SESSION['answer'].="<div class='error'>Пользователь с таким логином уже зарегистрирован!</div>";
        }
        //проверка одинаковой почты
        $check_mail=mysql_query("SELECT user_id FROM `_users` WHERE mail='$mail'");
        if(mysql_fetch_assoc($check_mail)>0){
          $reg_check="1";
          $_SESSION['answer'].="<div class='error'>Пользователь с такой почтой уже зарегистрирован!</div>";
        }

      if($reg_check=="1"){
        $_SESSION['add_user']['fio']=$fio;
        $_SESSION['add_user']['dolgnost']=$dolgnost;
        $_SESSION['add_user']['degree']=$degree;
        $_SESSION['add_user']['rank']=$rank;
        $_SESSION['add_user']['special']=$special;          
        $_SESSION['add_user']['special2']=$special2;          
        $_SESSION['add_user']['phone']=$phone;      
        $_SESSION['add_user']['mail']=$mail;        
        $_SESSION['add_user']['place_work']=$place_work;
        $_SESSION['add_user']['department']=$department;
        $_SESSION['add_user']['country']=$country;
        $_SESSION['add_user']['region']=$region;
        $_SESSION['add_user']['city']=$city;
        $_SESSION['add_user']['mailing']=$mailing;
        $_SESSION['add_user']['login']=$login;        
      }else{
        if($special2!=""){$special_bd=$special2;}else{$special_bd=$special;}
        $query=mysql_query("INSERT INTO `_users` (fio,dolgnost,degree,rank,special,phone,mail,place_work,department,country,region_id,city,mailing,login,pass,user_role_id,data_reg) VALUES ('$fio','$dolgnost','$degree','$rank','$special_bd','$phone','$mail','$place_work','$department','$country','$region','$city','$mailing','$login','$pass','3','$data_reg')");
        if(mysql_affected_rows() > 0){
            $id=mysql_insert_id();
            $_SESSION['answer'].="<div class='ok'>Вы успешно зарегистрированы. <br>Используйте Логин и Пароль для <a href='".PATH."'>Входа на сайт<i class='icon-login-2'></i></a></div>";
            unset($_SESSION['add_user']);

            //отправляем письмо на почту об успешной регистрации
            $tema="Регистрация на сайте immunooncology.med4share.ru";
            //$to=$get_mail;
            $content="<html> 
                <head> 
                    <title>$tema</title> 
                </head> 
                <body> 
                  <p>Вы успешно зарегистрированы на сайте <a href='immunooncology.med4share.ru'>immunooncology.med4share.ru</a></p>
                  <p>Данные для входа:</p>
                  <p>Логин: ".$login."</p>
                  <p>Пароль: ".$_POST['pass']."</p>
                </body> 
            </html>";
            //функци отправки сообщения на почту
            $headers="Content-type: text/html; charset=utf-8 \r\n"; 
            $headers.="From: Регистрация на immunooncology.med4share.ru <".$mail.">\r\n"; 

            mail($mail, $tema, $content, $headers); 
            //отправляем письмо на почту об успешной регистрации

            //return true;
        }
      }
    }
//========================Функция добавления пользователя==================//

}
/* ===Получение массива специалистов=== */
    $query="SELECT * FROM `_specials` ORDER BY priority ASC";
    $res=mysql_query($query) or die(mysql_error());
    $specials=array();
    while($row=mysql_fetch_assoc($res)){
        $specials[]=$row;
    }  
/* ===Получение массива специалистов=== */
/* ===Получение массива регионов=== */
    $query2="SELECT * FROM `_regions` ORDER BY title ASC";
    $res2=mysql_query($query2) or die(mysql_error());
    $regions=array();
    while($row2=mysql_fetch_assoc($res2)){
        $regions[$row2['region_id']]=$row2;
    }  
/* ===Получение массива регионов=== */

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
<link href="<?=PATH?>template/css/bootstrap.css" rel="stylesheet" type="text/css"/>


<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="<?=PATH;?>template/js/jquery.maskedinput.min.js"></script>

<title>Регистрация профессионалов на форуме по Иммуноонкологии | Междисциплинарный медицинский портал</title>
</head>

<body>
    <section class="enter">
        <div class="enter-body">
            <img src="<?=PATH?>template/img/logo.png" alt="Регистрация | Междисциплинарный медицинский портал" title="Регистрация | Междисциплинарный медицинский портал" />

             <?if(!$_GET['question1']=="2" and !$_GET['question2']=="3" and !$_GET['question3']=="2"){?>
           <p>Чтобы получить доступ к регистрации необходимо пройти опрос</p>
            <?php if(isset($_SESSION['answer'])){echo $_SESSION['answer'];unset($_SESSION['answer']);}?>
            <form method="get" action="" name="opros">

            <label for="question1">1. Какова основная функция лейкоцитов:</label>
            <select name="question1">
               <option value="5">Выберите вариант ответа</option>
               <option value="2">Защита организма от инфекций, чужеродный белков и инородных тел</option>
               <option value="1">Перенос кислорода к тканям</option>
               <option value="3">Обеспечение свертываемости крови</option>
               <option value="4">Передача нервных импульсов</option>
           </select>
             <label for="question2">2. Антитело – это:</label>
          <select name="question2">
               <option value="5">Выберите вариант ответа</option>
               <option value="1">Летальная токсичность лекарственного препарата</option>
               <option value="2">Тело, состоящее из антиматерии</option>
               <option value="3">Белковое соединение, являющееся важнейшим фактором иммунитета</option>
               <option value="4">Средство для похудения</option>    
           </select>
          <label for="question3">3. К белкам острой фазы относятся:</label>
          <select name="question3">
               <option value="5">Выберите вариант ответа</option>
               <option value="1">Глюкоза</option>
               <option value="4">Холестерин</option>
               <option value="3">Калий</option>
               <option value="2">С-реактивный белок</option>
           </select>
                  <input type="submit" value="Я ответил на все вопросы"/>    
          </form>
            <?}if($_GET['question1']=="2" and $_GET['question2']=="3" and $_GET['question3']=="2"){?>
<h2>Добро пожаловать!</h2>     
<p>Регистрация обеспечивает доступ на сайт, а также подписку на рассылку материалов и новостей портала.

<?php if(isset($_SESSION['answer'])){echo $_SESSION['answer'];unset($_SESSION['answer']);}?>

<form method="post" action="">
  <input type="text" name="fio" placeholder="ФИО (полностью)*" value="<?=$_SESSION['add_user']['fio']?>" />
  <input type="text" name="dolgnost" placeholder="Должность*" value="<?=$_SESSION['add_user']['dolgnost']?>"/>
  <input type="text" name="degree" placeholder="Ученая степень" value="<?=$_SESSION['add_user']['degree']?>" />
  <input type="text" name="rank" placeholder="Звание" value="<?=$_SESSION['add_user']['rank']?>" />
  <select name="special">
      <? if($_SESSION['add_user']['special']!=""){?>
      <option value="<?=$_SESSION['add_user']['special'];?>"><?=$_SESSION['add_user']['special'];?></option>
      <?}else{?><?}?>
      <option value="0">Специализация*</option>
      <?foreach($specials as $special){if($_SESSION['add_user']['special']!=$special['title']){?>
      <option value="<?=$special['title'];?>"><?=$special['title'];?></option>
      <?}}?>
  </select>
       <? if($_SESSION['add_user']['special']=="другая"){?>
  <input type="text" name="special2" placeholder="Впишите Вашу специализацию" value="<?=$_SESSION['add_user']['special2'];?>" />
      <?}?>
  <input type="text" name="phone" id="phone" placeholder="Контактный телефон*" value="<?=$_SESSION['add_user']['phone'];?>"/>
  <input type="email" name="mail" placeholder="E-mail*" value="<?=$_SESSION['add_user']['mail'];?>"/>
  <input type="text" name="place_work" placeholder="Место работы (Название учреждения)*" value="<?=$_SESSION['add_user']['place_work'];?>"/>
  <input type="text" name="department" placeholder="Отделение" value="<?=$_SESSION['add_user']['department'];?>" />
  <input type="text" name="country" placeholder="Страна" value="<?=$_SESSION['add_user']['country'];?>" />
  <select name="region">
      <? if($_SESSION['add_user']['region']!=""){?>
      <option value="<?=$_SESSION['add_user']['region'];?>"><?=$regions[$_SESSION['add_user']['region']]['title'];?></option>
      <?}else{?><?}?>    
      <option value="0">Регион РФ*</option>
      <?foreach($regions as $region){if($region['region_id']!=$_SESSION['add_user']['region']){?>
      <option value="<?=$region['region_id'];?>"><?=$region['title'];?></option>
      <?}}?>
  </select>                
  <input type="text" name="city" placeholder="Город*" value="<?=$_SESSION['add_user']['city'];?>" />
  <span>Не возражаю получать e-mail рассылку Форума по Иммуноонкологии</span>
  <input type="radio" name="mailing" id="mailing_yes" <?if($_SESSION['add_user']['mailing']=="1" or $_SESSION['add_user']['mailing']==""){?>checked<?}?> value="1"/>
  <label for="mailing_yes">Да</label>
  <input type="radio" name="mailing" id="mailing_no" <?if($_SESSION['add_user']['mailing']=="0"){?>checked<?}?> value="0"/>
  <label for="mailing_no">Нет</label>
  <input type="text" name="login" placeholder="Логин*" value="<?=$_SESSION['add_user']['login'];?>"/>
  <input type="password" name="pass" placeholder="Пароль*" value="<?=$_SESSION['add_user']['pass'];?>"/>
  <input type="submit" value="Зарегистрироваться"/>    
</form>
<p>Письмо об успешном завершении регистрации, а также Логин и Пароль Вы получите на указанный Вами e-mail.</p>
<p>Уважаемые коллеги, не передавайте регистрационные данные, логин и пароль другим лицам, т.к. это может нарушить персональное взаимодействие с вами!</p>
            <script type="text/javascript">
            $("select[name='special']").on('change', function() {
              var special=$("select[name='special'] option:selected").text();
              if(special=="другая"){
                //alert(special);
                var input_file = '<input type="text" name="special2" placeholder="Впишите Вашу специализацию"/>';
                $("select[name='special']").after(input_file);
              }              
              if(special!="другая"){
                $("input[name='special']").remove();
              }
            });

            $(document).ready(function(){
              $('#phone').mask('8 (999) 999-99-99');
            });
            </script>
            <?}?>
            <a href="<?=PATH;?>"><i class="icon-login-2"></i>Вход на сайт</a>
        </div>               
    </section>
</body>
</html>
