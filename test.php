<?php


function ValidateEmail($email)
{
    if($email === null)
    {
        echo 'Заполните поле email!';
    }
    elseif(strpos($email, '@') == false || strpos($email, '.com') == false)
    {
        echo 'Вы не поставили знак: "@" или ".com"!';
    }
    else
    {
        echo 'Электроная почта правильная!';
    }
}

$a = 'ibatullinhadis@38gmail.com';
ValidateEmail($a);


?>