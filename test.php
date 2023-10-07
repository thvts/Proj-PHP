<?php
    $_BIRTHMONTH = 10;
    $_BIRTHDAY = 24;
    $_BIRTHYEAR = 2000;

    ECHO $_BIRTHMONTH ."/". $_BIRTHDAY ."/". $_BIRTHYEAR . "<BR/>" . "<BR/>";

    if ($_BIRTHDAY%2 == 0){
        ECHO "<H3>EVEN</H3>";
    }
    else {
        ECHO "<H3>ODD</H3>";
    }
?>