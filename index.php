<?php

    $ime = "Nikodin Gregorin"; //Ovo je string
    $godine = 30; //Ovo je int
    $visina = 182.6; //Ovo je float
    $programer = true; //Ovo je bool

    echo "Moje ime je $ime, i imam $godine godina, visok sam $visina. <br>";
    $ime = "Niki";
    $godine = 19;
    echo "Moje ime je $ime, i imam $godine godina, visok sam $visina. <br>";

    if($godine >= 18)
    {
        echo "Punoletni ste.<br>";
    }
    else
    {
        echo "Maloletni ste.<br>";
    }
?>