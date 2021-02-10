<?php

$lang_en = true;
$message_en = "Sorry, this site is under maintenance. Please contact me <a href='mailto: witty.html@gmail.com'>here</a>";
$message_ru = "Извините, сайт находится на обновлении. Пожалуйста свяжитесь со мной <a href='mailto: witty.html@gmail.com'>тут</a>";
$actual_link = "$_SERVER[REQUEST_URI]";
//echo "$actual_link";
echo "<nav style='text-align: right'><a class='active' href='/'>EN</a> | <a href='/ru'>RU</a></nav>";
echo "<section><article style='text-align: center'>";
if($actual_link == "/ru") {
    echo $message_ru;
} elseif($actual_link == "/") {
    echo $message_en;
} else echo "I can't get a language parameter";
echo "</article></section>"


?>