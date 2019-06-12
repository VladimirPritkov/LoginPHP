<?php
function validLog()
{
    if (!isset($_POST['login']) || empty($_POST['login']))
    {
        return false;
    }
    return true;
}
function validPass()
{
    if (!isset($_POST['pass']) || empty($_POST['pass']))
    {
        return false;
    }
    return true;
}
function startChecking($login,$pass, $key){
 if($key = array_search($_POST['login'], $login)){;
 if($_POST['pass'] !== $pass[$key] ){
     return false;
 }
 return true;
}
}
