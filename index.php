<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="title">
        <img src="ZFAP_LOGO_ALTER.png" class="zfap">
        </div>
        <div class="main">
            <div class="left">
                <a href="">
                    <div class="a">
                        GALERIA
                    </div>
                </a>
                <a href="index.php">
                    <div class="a">
                        ZAWODNICY
                    </div>
                </a>
                <a href="index2.html">
                <div class="a">
                    HISTORIA
                </div>
                </a>
                <a href="index.html">
                <div class="a">
                    ZASADY
                </div>
                </a>
            </div>
            <div class="right">
                <div class="ins">
                    <form action="insert.php" method="POST">
                        <input type="text" name="imie">IMIĘ<br>
                        <input type="text" name="nazwisko">NAZWISKO<br>
                        <input type="text" name="wzrost">WZROST<br>
                        <input type="text" name="waga">WAGA<br>
                        <input type="text" name="klub">KLUB<br>
                        <input type="submit" name="POST" value="INSERT">
                    </form>
                </div>
                <div class="tabela">
                <?php
                 $ser="localhost";
                 $use="root";
                 $pass="";
                 $db="fa";
                 $conn=new mysqli($ser,$use,$pass,$db);

                 $result = $conn->query("SELECT * FROM zaw");
                 echo("<table class='tabelka'>");
                 echo("<tr>
                     <td>Imie</td>
                     <td>Nazwisko</td>
                     <td>Wzrost</td> 
                     <td>Waga</td> 
                     <td>Klub</td>
                 </tr>");
                 while($wiersz = $result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>" .$wiersz['Imie']. "</td><td>" .$wiersz['Nazwisko']. "</td><td>" .$wiersz['Wzrost']. "</td><td>" .$wiersz['Waga']. "</td><td>" .$wiersz['Klub']. "</td>");
                    echo("</tr>");
            
                }
                echo("</table>");
                ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>