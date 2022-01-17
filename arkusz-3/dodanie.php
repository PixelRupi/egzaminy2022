<?php
    $con = mysqli_connect("localhost","root","","ee09");
    $karetka = $_POST['numer_karetki'];
    $pierwszy_ratownik = $_POST['ratownik_1'];
    $drugi_ratownik = $_POST['ratownik_2'];
    $trzeci_ratownik = $_POST['ratownik_3'];

    $komenda1 = "INSERT INTO ratownicy(nrKaretki, ratownik1, ratownik2, ratownik3) VALUES ('$karetka', '$pierwszy_ratownik', '$drugi_ratownik', '$trzeci_ratownik')";
    $zapytanie1 = mysqli_query($con, $komenda1);

    echo "Do bazy zostało wysłane zapytanie: ".$komenda1;

    mysqli_close($con);
?>