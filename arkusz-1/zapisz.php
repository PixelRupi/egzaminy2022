<?php
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $adres = $_POST['adres'];
    
    $con = mysqli_connect('localhost','root','','wedkowanie');
    $komenda1 = "INSERT INTO karty_wedkarskie (imie, nazwisko, adres) VALUES ('$imie', '$nazwisko', '$adres')";

    $zapytanie1 = mysqli_query($con, $komenda1);
    var_dump(mysqli_error($con));
    mysqli_close($con);
?>