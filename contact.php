<?php include "dbConnect.php";

$empty = FALSE;
$insert = FALSE;
$notInsert = FALSE;

?>

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
        .cParent {
            background-image: url("img/contact.jpg");
            background-size: cover;
            height: 100vh;
        }

        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');

        #center {
            text-align: center;
            font-size: 40px;
            padding: 5px 0px;
            color: white;
            font-family: 'Ubuntu', sans-serif;
            background-color: #0068A8;
        }

        form {
            font-family: 'Ubuntu', sans-serif;
        }
    </style>
</head>

<body>

    <?php include "navbar.php"; ?>

    <div class="cParent">

        <!-- Heading ----------------------------------------------------->

        <div id="center">Contact Us 📲</div>

        <!-- Contact Form  ----------------------------------------------->

        <div class="container my-4">
            <form method="post" class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="exampleInputName1" class="form-label"><strong>Name</strong></label>
                    <input type="text" name="name" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" required>
                    <div class="invalid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><strong>Email</strong></label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <div class="invalid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputAddress1" class="form-label"><strong>Address</strong></label>
                    <input type="text" name="address" class="form-control" id="exampleInputAddress1" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputFeedback1" class="form-label"><strong>Feedback</strong></label>
                    <textarea class="form-control" name="feedback" rows="5" id="exampleInputFeedback1" required></textarea>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-primary mx-4 px-3">Reset</button>
            </form>
        </div>

        <!-- ----------------------------------------- -->

        <?php

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $feedback = $_POST['feedback'];

            if (empty($name) || empty($email) || empty($address) || empty($feedback)) {
                $empty = TRUE;
                // header("location:contact.php");
            } else {
                $sql1 = "INSERT INTO contactform(name,email,address,feedback) VALUES('$name','$email','$address','$feedback')";
                $result1 = mysqli_query($conn, $sql1);
                if (!$result1) {
                    $notInsert = TRUE;
                    // header("location:contact.php");
                } else {
                    $insert = TRUE;
                    // header("location:contact.php");
                }
            }
        }

        ?>

        <?php

        // Alerts Start ---------------------------------------------------------------------------------

        if ($empty) {
            echo '<div class="alert alert-warning alert-dismissible fade show container my-4" role="alert">
        <strong>Empty !</strong> Contact fields should not empty.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }

        if ($insert) {
            echo '<div class="alert alert-success alert-dismissible fade show container my-4" role="alert">
        <strong>Submitted !</strong> Your feedback is submitted succesfully. Thank You for contact us.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }

        if ($notInsert) {
            echo '<div class="alert alert-warning alert-dismissible fade show container my-4" role="alert">
        <strong>Not Submitted !</strong> Your feedback is not submitted. Please try again.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }

        // Alerts End -------------------------------------------------------------------------------

        ?>

    </div>

    <?php include "footer.php"; ?>

    <!-- JavaScript --------------------------------------------------->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>