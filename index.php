<?php

// Premiere ligne

$date = getdate();
echo $date["weekday"] . "<br>";

$date2 = strtotime("2018/12/10");
echo date("Y.m.d", $date2) . "<br>";

$date3 = mktime(11, 35, 07, 0, 0, 0);
echo date("H.i.s", $date3) . "<br>";