<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Prognoza pogody Wrocław</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <div id="baner_lewy">
        <img src="logo.png" alt="meteo">
    </div>

    <div id="baner_srodkowy">
        <h1>Prognoza dla Wrocławia</h1>
    </div>

    <div id="baner_prawy">
        <p>maj, 2019r.</p>
    </div>

    <div id="glowny">
        <table>
            <tr>
                <th>DATA</th>
                <th>TEMPERATURA W NOCY</th>
                <th>TEMPERATURA W DZIEN</th>
                <th>OPADY [mm/h]</th>
                <th>CIŚNIENIE [hPa]</th>
            </tr>

            <?php
                $con = mysqli_connect('localhost','root','','prognoza2');
                $komenda1 = 'SELECT * FROM pogoda where pogoda.miasta_id=1 order by pogoda.data_prognozy asc';
                $zapytanie1 = mysqli_query($con, $komenda1);

                while ($row = mysqli_fetch_array($zapytanie1)){
                    echo "<tr>";
                    echo "<td>".$row['data_prognozy']."</td>";
                    echo "<td>".$row['temperatura_noc']."</td>";
                    echo "<td>".$row['temperatura_dzien']."</td>";
                    echo "<td>".$row['opady']."</td>";
                    echo "<td>".$row['cisnienie']."</td>";
                    echo "</tr>";
                }
                mysqli_close($con);
            ?>
        </table>
    </div>

    <div id="lewy">
        <img src="obraz.jpg" alt="Polska, Wrocław">
    </div>

    <div id="prawy">
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>

    <div id="stopka">
        <p>Stronę wykonał: 00000000000</p>
    </div>
</body>
</html>