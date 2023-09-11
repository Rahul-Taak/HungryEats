<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" charset="utf-8"></script>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <title>Hungry Eats</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');

    .center {
        text-align: center;
        font-size: 50px;
        padding: 10px 0px;
        color: white;
        font-family: 'Ubuntu', sans-serif;
        background-color: #0068A8;
    }

    /* Card Start ------------------------------------- */

    section {
        margin: 30px 0px;
        font-family: 'Ubuntu', sans-serif;
    }

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
        height: 440px;
        background: rgba(255, 255, 255, 0.05);
        margin: 20px;
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
        transform: translateY(-40px);
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
        border-radius: 10px;
    }

    .carousel-item {
        transition: transform .2s;
    }

    .carousel-item:hover {
        transform: scale(1.5);
    }

    .active {
        height: 300px;
        overflow: hidden;
    }

    /* Card End -------------------------------------- */

    /* ..................................................... */

    .accordions {
        width: 80%;
        margin: 50px auto;
    }

    .accordions h3 {
        text-align: center;
        font-weight: bold;
        font-family: "Ubuntu", sans-serif;
    }

    .accordion-item {
        background-color: #0b3791;
        border-radius: 5px;
        color: #ffffff;
        margin-bottom: 20px;
        border: 1px solid #100e34;
    }

    .accordion-item .accordion-title {
        background-color: #0068A8;
        cursor: pointer;
        padding: 20px;
        transition: transform 0.4s ease-in-out;
    }

    .accordion-item .accordion-title.active-title {
        background-color: #212529;
        color: #ffffff;
    }

    .accordion-item .accordion-title h3 {
        font-weight: 700;
        margin: 0;
        justify-content: space-between;
        font-weight: bold;
        font-size: 18px;
        display: flex;
    }

    .accordion-item .accordion-title i.fa-chevron-down {
        transform: rotate(0);
        transition: 0.4s;
    }

    .accordion-item .accordion-title i.fa-chevron-down.chevron-top {
        transform: rotate(-180deg);
        color: #fa5019;
    }

    .accordion-item .accordion-content {
        display: none;
        line-height: 1.7;
        color: #212529;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 0 0 5px 5px;
    }

    .accordion-item .accordion-content.active {
        display: block;
    }

    .accordion-item .accordion-content p {
        margin: 0;
        font-size: 16px;
        font-family: "Ubuntu", sans-serif;
    }

    .details {
        background: #dce1f2;
    }

    .details .detailed_info {
        margin: 50px auto;
    }

    .details img {
        margin: 0 auto;
        display: block;
    }

    .details h3 {
        font-weight: bold;
        font-size: 20px;
        font-family: "Ubuntu", sans-serif;
    }

    .details p {
        font-size: 16px;
        line-height: 1.5em;
        font-family: "Ubuntu", sans-serif;
    }

    .details ul li {
        font-size: 16px;
        line-height: 1.7em;
        font-family: "Ubuntu", sans-serif;
    }

    #fq-i {
        width: 800px;
    }

    @media (max-width: 810px) {

        .active {
            height: 200px;
        }

        #fq-i {
            width: 500px;
        }
    }

    /* ..................................................... */
</style>

<body>

    <?php include "navbar.php"; ?>

    <!-- Heading ----------------------------------------------------->

    <div class="center">
        <span>Hot Products</span>
    </div>

    <!-- Cards ------------------------------------------------------->

    <section>

        <div class="container">
            <div class="card">
                <div class="content">
                    <div class="imgBx">
                        <img src="img/pizza1.jpg">
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Pizza</h5>
                    <p class="card-text">Order a delicious pizza on the go, anywhere, anytime. Try our 8 tastes of Pizza
                        Toppings</p>
                    <a href="menu.php" class="btn btn-primary">View More</a>
                </div>
            </div>

            <div class="card">
                <div class="content">
                    <div class="imgBx">
                        <img src="img/burger1.jpg">
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Burger</h5>
                    <p class="card-text">Our burgers are made with scrumptious pre-seasoned patty dipped in fresh herbs
                        and spices. </p>
                    <a href="menu.php" class="btn btn-primary">View More</a>
                </div>
            </div>

            <div class="card">
                <div class="content">
                    <div class="imgBx">
                        <img src="img/sandwich.jpg">
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Sandwich</h5>
                    <p class="card-text">Sandwiches are good for any time of the day. Get
                        a little adventurous with our 7 best sandwich tastes.</p>
                    <a href="menu.php" class="btn btn-primary">View More</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card">
                <div class="content">
                    <div class="imgBx">
                        <img src="img/shakes.jpg">
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Shakes</h5>
                    <p class="card-text">Are you looking for delicious Shake, you will come to know
                        that we are serving something special.</p>
                    <a href="menu.php" class="btn btn-primary">View More</a>
                </div>
            </div>

            <div class="card">
                <div class="content">
                    <div class="imgBx">
                        <img src="img/french_fry.jpg">
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">French Fries</h5>
                    <p class="card-text">Trying to find a French Fries Restaurant? Come to Hungry Eats. We are serving 6
                        tastes.</p>
                    <a href="menu.php" class="btn btn-primary">View More</a>
                </div>
            </div>

            <div class="card">
                <div class="content">
                    <div class="imgBx">
                        <img src="img/ice_cream.jpg">
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Ice Cream</h5>
                    <p class="card-text">Try our Ice Creams with 3 different Flavour options, And special for the whole
                        family to enjoy.</p>
                    <a href="menu.php" class="btn btn-primary">View More</a>
                </div>
            </div>
        </div>

    </section>

    <!-- FAQs -------------------------------------------------------->

    <div class="center">FAQs 💬</div>

    <section id="faq">
        <div class="container faq">

            <div class="container">
                <div class="row">
                    <div class="col-sm-12" id="fq-i">
                        <div class="accordions">

                            <!-- 1st accordion menu -->
                            <div class="accordion-item">
                                <div class="accordion-title" data-tab="item4">
                                    <table>
                                        <tr>
                                            <td>
                                                <h3>Do you provide Home Delivery Service? <i class="fa fa-chevron-down"></i>
                                                </h3>
                                            </td>
                                            <td>▼
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="accordion-content" id="item4">
                                    <p>
                                        Yes, We provide Home Delivery Service
                                    </p>
                                </div>
                            </div>

                            <!-- 2nd accordion menu -->
                            <div class="accordion-item">
                                <div class="accordion-title" data-tab="item2">
                                    <table>
                                        <tr>
                                            <td>
                                                <h3>What is the Payment Option? <i class="fa fa-chevron-down"></i></h3>
                                            </td>
                                            <td>▼
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="accordion-content" id="item2">
                                    <p>
                                        You can do both Online Payment and Cash On Delivery
                                    </p>
                                </div>
                            </div>

                            <!-- 3rd accordion menu -->
                            <div class="accordion-item">
                                <div class="accordion-title" data-tab="item3">
                                    <table>
                                        <tr>
                                            <td>
                                                <h3>What are the opening and closing time of your restaurant? <i class="fa fa-chevron-down"></i>
                                                </h3>
                                            </td>
                                            <td>▼
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="accordion-content" id="item3">
                                    <p>
                                        Restaurant opening Hours are from 8 am to 11 pm
                                    </p>
                                </div>
                            </div>

                            <!-- 4th accordion menu -->
                            <div class="accordion-item">
                                <div class="accordion-title" data-tab="item1">
                                    <table>
                                        <tr>
                                            <td>
                                                <h3>Do you have Veg and Non-veg Both? <i class="fa fa-chevron-down"></i>
                                                </h3>
                                            </td>
                                            <td>▼
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="accordion-content" id="item1">
                                    <p>
                                        No, We have only Veg Food Items
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer ------------------------------------------------------>

    <?php include "footer.php"; ?>

    <!-- JavaScript -------------------------------------------------->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".accordion-title").click(function(e) {
                var accordionitem = $(this).attr("data-tab");
                $("#" + accordionitem)
                    .slideToggle()
                    .parent()
                    .siblings()
                    .find(".accordion-content")
                    .slideUp();

                $(this).toggleClass("active-title");
                $("#" + accordionitem)
                    .parent()
                    .siblings()
                    .find(".accordion-title")
                    .removeClass("active-title");

                $("i.fa-chevron-down", this).toggleClass("chevron-top");
                $("#" + accordionitem)
                    .parent()
                    .siblings()
                    .find(".accordion-title i.fa-chevron-down")
                    .removeClass("chevron-top");
            });
        });
    </script>

</body>

</html>