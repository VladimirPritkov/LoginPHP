<?php
include 'users.php';
include 'functions.php';
if(validLog() && validPass()){
  if(startChecking($login,$pass,$key)){
     $user =  'Добрый день '. $_POST['login'];
}
else{$user = 'Не верный логин или пароль';}
} 
else {
    $userStatus =  " Заполните все поля ввода данных";
}


