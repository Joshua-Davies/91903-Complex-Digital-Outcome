<!-- main html file -->

<!DOCTYPE HTML>

<!-- include functions.php to use the make_gallery function -->
<?php
    include("functions.php");
?>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="A website dedicated to the preservation of the world's forests."> 
<meta name="keywords" content="forests, conservation, environment, save the canopy">
<meta name="author" content="Joshua Davies">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<title>Save the Canopy</title>

<!-- link stylesheets and fonts -->
<link href="https://fonts.googleapis.com/css?familyLato%7cUbuntu" rel="stylesheet">

<link rel="stylesheet" href="css/simple-lightbox.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/layout.css">
<link rel="stylesheet" href="css/navigation.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/gallery.css">

</head>

<body>

<div class="wrapper">
    <div class="logo">
        <a href="index.php"><img class="pixelated responsive" src="images/logo.webp" alt="s"></a>
    </div>

    <div class="top-title">
        <h2>Save the Canopy</h2>
    </div>

<div class="header">
    <div class="menu-header">
        <i class="fa fa-bars"></i>
        <div class="menu-content">
            <ul>
                <!-- Navigation links -->
                <li><a href="index.php">Home</a></li>
                <li><a class="dropbtn" href="#">Gallery <i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown">
                        <li><a class="nav" href="index.php?page=lifeintheforest">Life In The Forest</a></li>
                        <li><a class="nav" href="index.php?page=destroyedforests">Destroyed Forests</a></li>
                    </ul>
                </li>

                <li><a href="index.php?page=about">About</a></li>
                <li><a href="index.php?page=links">Links</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
<!--includes the page content here-->
 <?php
    if (!isset($_REQUEST['page'])) {
        include("home.php");
    }
    else {
        $page=preg_replace('/[^0-9a-zA-Z]-/','',$_REQUEST['page']);
        include("$page.php");
    }
?>

<div class="box footer">
CC Joshua Davies 2025
</div> <!--/footer -->

    <!-- script links-->
    <script src="js\simple-lightbox.min.js"></script>
    <script src="js/j_query_min.js"></script>
    <script>
    
    // Initialize SimpleLightbox for the gallery
    var lightbox = new SimpleLightbox('.gallery a', { /* options if needed */ });

    $('.dropbtn').click(function () {
        $('.dropdown').toggleClass('display');
    });
    $('.fa-bars').click(function () {
        $('.menu-content').toggle();
    });
    </script>
</body>
</html>