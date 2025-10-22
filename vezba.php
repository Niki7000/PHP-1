<?php

    $cena = 500;
    $iznosPoreza = 0.2;
    $porez = $cena * $iznosPoreza;

    $totalnaCena = $cena + $porez; //totalnaCena = 500 + 100

    echo "Cena bez poreza je: $cena, porez je: $porez (iznos poreza: $iznosPoreza) , a ukupna cena je: $totalnaCena. ";

    $proizvod = "Hleb";
    $proizvod .= " Sava";
    echo $proizvod;

    $cenaProizvoda = 50;
    $cenaProizvoda += 5;
    $cenaProizvoda++;
    echo "Cena proizvoda je $cenaProizvoda" ."\n"." NEMA DOMACEG!!!!! :DDDDD";

?>