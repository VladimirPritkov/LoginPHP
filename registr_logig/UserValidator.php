<?php
include 'variables.php';
include 'functions.php';

if(validLog() && validPass()){
  if(startChecking($login, $pass)){
    $pages = include_once 'txt.txt';
    $userStatus =  'Добрый день '. $_POST['login'];
     
}
else{ 
  $userStatus = 'Не верный логин или пароль';
   $pages = include_once 'VisualPages.php';
}
  
} 
else {
    $userStatus =  " Заполните все поля ввода данных";
    $pages = include_once 'VisualPages.php';
}


