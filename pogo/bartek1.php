<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
    
    <table>

        <tr>
            <th>Id</th>
            <th>Imię</th>
            <th>Nazwisko</th>
        <tr>

                <?php
                $db = mysqli_connect("localhost", "root", "", "ee09");
                $zap = "SELECT id, imię, nazwisko FROM dyspozytorzy";
                $wynik = mysqli_query($db, $zap);

                while($row = mysqli_fetch_row($wynik)){
                    echo "<tr><td>".$row[0]"</td><td>".$row[1]."</td><td>".row[2]."<td></tr>";
                }
                mysqli_close($db);
                ?>      
    </table>


         

</body>
</html>