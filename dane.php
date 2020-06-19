<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane.php</title>
</head>
<body>
    <?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dane";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $result = $conn->query("SELECT * FROM zawodnicy");
    $result1 = $conn->query("SELECT * FROM kluby");

    echo("<table border='1'>");
    echo("<tr>
    <th>Id</th>
    <th>Imię</th>
    <th>Nazwisko</th>
    <th>Wzrost</th>
    <th>Waga</th>
   </tr>");
    while($wiersz = $result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['Id']."</td>"."<td>".$wiersz['Imie']."</td>"."<td>".$wiersz['Nazwisko']."</td>"."<td>".$wiersz['Wzrost']."</td>"."<td>".$wiersz['Waga']."</td>");
        echo("</tr>");
    }
   

    echo("<table border='1'>");
    echo("<tr>
    <th>Id</th>
    <th>Miasto</th>
    <th>Nazwa Klubu</th>
    <th>Ilość Graczy</th>
    </tr>");
    while($wiersz1 = $result1->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz1['Id']."</td>"."<td>".$wiersz1['miasto']."</td>"."<td>".$wiersz1['Nazwa_klubu']."</td>"."<td>".$wiersz1['ilosc_graczy']."</td>");
        echo("</tr>");
    }
    
    ?>
</body>
</html>