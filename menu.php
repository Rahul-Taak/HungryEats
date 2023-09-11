<?php include "dbConnect.php"; ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>Hungry Eats</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');

        .mParent {
            background-image: url(img/menuPizza.jpg);
            background-size: cover;
            height: 100vh;
        }

        nav {
            font-family: 'Ubuntu', sans-serif;
        }

        footer {
            font-family: 'Ubuntu', sans-serif;
        }

        table,
        th,
        td {
            font-family: 'Ubuntu', sans-serif;
        }

        .tableFixHead {
            overflow-y: auto;
            height: 700px;
        }

        .tableFixHead thead th {
            position: sticky;
            top: 0;
        }


        #center {
            text-align: center;
            font-size: 40px;
            padding: 5px 0px;
            color: white;
            font-family: 'Ubuntu', sans-serif;
            background-color: #0068A8;
        }
    </style>

</head>

<body>

    <?php include "navbar.php"; ?>

    <div class="mParent">
        <!-- Heading --------------------------------------------------->

        <div id="center">Menu 🥗</div>

        <!-- Menu Items ------------------------------------------------>

        <div class="responsive container my-4 tableFixHead">
            <table class="table table-dark table-striped table-hover">
                <?php
                echo '<thead>
            <tr>
            <th>SNo.</th>
            <th>CATEGORY</th>
            <th>TYPE</th>
            <th>MEDIUM PRICE</th>
            <th>LARGE PRICE</th>
            </tr>
            </thead>';

                $sql2 = "SELECT * FROM menu";
                $result2 = mysqli_query($conn, $sql2);
                $count = 1;
                while ($row = mysqli_fetch_array($result2)) {
                    echo '<tbody>
                <tr>
                            <td>&nbsp;&nbsp;' . $count . '</td>
                            <td>' . $row[1] . '</td>
                            <td>' . $row[2] . '</td>
                            <td><a href="menu_order.php?x=' . $row[0] . '"><button class="btn btn-sm btn-warning">₹ ' . $row[3] . '</button></a></td>
                            <td><a href="menu_order.php?y=' . $row[0] . '"><button class="btn btn-sm btn-warning">₹ ' . $row[4] . '</button></a></td>
                            </tr>
                            </tbody>';
                    $count++;
                }
                ?>
            </table>
        </div>

    </div>
    <?php include "footer.php"; ?>

    <!-- JavaScript -------------------------------------------------->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>