<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>Hungry Eats</title>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />
    <!-- Unicons CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <script src="script.js" defer></script>
</head>

<body>
    <nav class="nav">
        <i class="uil uil-bars navOpenBtn"></i>
        <a href="index.php"><img class="rotate" src="img/Logo.png" style="height:50px; margin-left:50px;"></a>
        <ul class="nav-links">
            <i class="uil uil-times navCloseBtn"></i>
            <li><a href="index.php">Home</a></li>
            <li><a aria-current="page" href="menu.php">Menu</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="order.php">My Order</a></li>
        </ul>
        <i class="uil uil-search search-icon" id="searchIcon"></i>
        <div class="search-box">
            <i class="uil uil-search search-icon"></i>
            <input type="text" placeholder="Search here..." />
        </div>
    </nav>
</body>

</html>