<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <script src="./JS/script.js"></script>
</head>

<body>
    <div class="cut">
        <section id="navbar">
            <p>TIME TABLE GENERATOR, Computer Engineering Department</p>
        </section>

        <section id="btn-container">
            <a href="#"><button class="sembtn active">First Semester</button></a>
            <a href="#"><button class="sembtn">Second Semester</button></a>
            <a href="#"><button class="sembtn">Third Semester</button></a>
            <a href="#"><button class="sembtn">Fourth Semester</button></a>
            <a href="#"><button class="sembtn">Fifth Semester</button></a>
            <a href="#"><button class="sembtn">Sixth Semester</button></a>
        </section>
    </div>

    <style>
        @media print {

            .cut,
            .cut * {
                display: none;
                width: 0;
                height: 0;
            }

            .main,
            .main * {
                table td {
                    padding: 0px;
                }
            }

            select {
                border: none;
                outline: none;
                -webkit-appearance: none;
            }
        }

        .active {
            background-color: red;
        }
        td{
            height: 50px;
            padding: 12px;
        }
    </style>

    <form action="./retrieve1process.php" method="post">
    <div class="main">
        <table>
            <tr>
                <th></th>
                <th class="time" style="padding: 10px">10:30 <br>-<br> 11:30</th>
                <th class="time" style="padding: 10px">11:30 <br>-<br> 12:30</th>
                <th class="time" style="padding: 10px">12:30 <br>-<br> 1:15</th>
                <th class="time" style="padding: 10px">1:15 <br>-<br> 2:15</th>
                <th class="time" style="padding: 10px">2-15 <br>-<br> 3:15</th>
                <th class="time" style="padding: 10px">3:15 <br>-<br> 3:30</th>
                <th class="time" style="padding: 10px">3:30 <br>-<br> 4:30</th>
                <th class="time" style="padding: 10px">4:30 <br>-<br> 5:30</th>
            </tr>

<!------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------->
<!--!!!!! MONDAY !!!!! ---------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------->
            <tr>
                <th class="day">Mon</th>
                <td>
                    <?php
                    $couSql = "SELECT * FROM final WHERE sem=1";
                    $couResult = mysqli_query($conn, $couSql);
                    $facSql = "SELECT * FROM final";
                    $facResult = mysqli_query($conn, $facSql);
                    $classSql = "SELECT * FROM final";
                    $classResult = mysqli_query($conn, $classSql);

                    while ($dataC = mysqli_fetch_array($couResult) && $dataF = mysqli_fetch_array($facResult) && $dataCl = mysqli_fetch_array($classResult))
                    {
                        echo "<td>".$dataC[1]."</td> <br>";
                        echo "<td>".$dataF[2]."</td> <br>";
                        echo "<td>".$dataCl[3]."</td> <br>";
                    }
                    ?>
            </tr>
        </table>
    </div>
    <div class="cut">
        <div class="form-btn-container">
            <input type="submit" value="Update" name="upload" class="sembtn" style="margin: 20px;">
            <button class="sembtn" style="margin: 20px;" onclick="window.print(); return false;">Print</button>
        </div>
    </div>
    </form>
</body>
</html>