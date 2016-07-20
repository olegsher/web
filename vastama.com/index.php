<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang){
    case "ru":
        //echo "PAGE RU";
        header("location: ru/");
        break;
    case "he":
        //echo "PAGE HE";
        header("location: he/");
        break;
    case "en":
        //echo "PAGE EN";
        header("location: en/");
        break;        
    default:
        //echo "PAGE EN - Setting Default";
        header("location: en/");
        break;
}
?>