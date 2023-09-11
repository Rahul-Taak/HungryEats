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
        .aParent {
            background-image: url("img/aboutBg.webp");
            background-size: cover;
        }

        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');

        .justify {
            text-align: justify;
        }

        /* ---------------------------------------------------- */
        .container {
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .container .card {
            position: relative;
            width: 300px;
            height: 280px;
            background: rgba(255, 255, 255, 0.05);
            margin: 30px 0px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            backdrop-filter: blur(10px);
        }

        .container .card .content {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            transition: 0.5s;
        }

        .container .card:hover .content {
            transform: translateY(-20px);
        }

        .container .card .content .imgBx {
            position: relative;
            margin-top: 30px;
            width: 200px;
            height: 200px;
            overflow: hidden;
        }

        .container .card .content .imgBx img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #ab-logo {
            cursor: pointer;
            height: 200px;
        }

        @media (max-width:900px) {

            #ab-logo {
                cursor: pointer;
                height: 90px;
            }

        }

        /* ---------------------------------------------------- */
    </style>

</head>

<body>

    <?php include "navbar.php"; ?>

    <div class="aParent">
        <!-- Body Content ------------------------------------------------>

        <div class="mx-auto" style="width: 200px;">
            <img class="my-4 rotate" id="ab-logo" src="img/Logo.png">
        </div>
        <div class="container">
            <h3 style="color: #BCF500;margin-left:100px;"><em>A Food For Every Taste !!</em></h3>
        </div>

        <div class="justify container text-white">
            <h5>Launched in 2022, And developed by Rahul Taak. Our technology platform connects customers, restaurant
                partners and delivery partners, serving their multiple needs. Customers use our platform to search and
                discover restaurants, read and write customer generated reviews and view and upload photos, order food
                delivery, book a table and make payments while dining-out at restaurants. On the other hand, we provide
                restaurant partners with industry-specific marketing tools which enable them to engage and acquire
                customers to grow their business while also providing a reliable and efficient last mile delivery
                service. We also operate a one-stop procurement solution, Hyperpure, which supplies high quality
                ingredients and kitchen products to restaurant partners. We also provide our delivery partners with
                transparent and flexible earning opportunities.</h5>

            <div id="flex">
                <div class="card">
                    <div class="content">
                        <div class="imgBx zoom">
                            <img src="img/Rahul.jpg" height="400px" style="border-radius:10px;">
                        </div>
                    </div>
                </div>
                <div style="margin-bottom: 50px;">
                    <h5>Hello Everyone, My name is Rahul and I am <?php $a = 2002;
                                                                    $b = date('Y');
                                                                    echo $b - $a; ?> years old.
                        I currently studying in Punjabi
                        University Patiala as a student of Computer Science and Engeenering (CSE) in B.Tech. I passed
                        12th from Meritorious School Ghabdan, Sangrur. I always act more mature than my age. I have had
                        a lot of people invest in me academically, so I have excelled in most of my classes. I am from
                        Abohar City in District Fazilka, state Punjab. I love to code because it is usable art. Just
                        like architecture, which is an art used by people daily and affects their everyday life, so is
                        code. You can create something and people interact with, use, touch and work with. That is an
                        amazing feeling.</h5>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>

    <!-- JavaScript -------------------------------------------------->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>