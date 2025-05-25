
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="A website dedicated to the preservation of the world's forests."> 
<meta name="keywords" content="forests, conservation, environment, save the canopy">
<meta name="author" content="Joshua Davies">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<title>Save the Canopy</title>

<!-- Edit the link below / replace with your chosen google font -->
<link href="https://fonts.googleapis.com/css?family Lato%7cUbuntu" rel="stylesheet">


<!-- Edit the name of your style sheet 'foo' is not a valid name!! -->


<link rel="stylesheet" href="css/simple-lightbox.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/layout.css">
<link rel="stylesheet" href="css/navigation.css">

</head>

<body>

<div class="wrapper">
    <div class="logo">
        <a href="index.php"><img class="responsive" src="images/logo.webp" alt="s"></a>
    </div>

    <div class="top-title">
        <h2>Save the Canopy</h2>
    </div>


<div class="header">
    <div class="menu-header">
        <i class="fa fa-bars"></i>
        <div class="menu-content">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a class="dropbtn" href="#">Gallery <i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown">
                        <li><a class="nav" href="#">Gallery1</a></li>
                        <li><a class="nav" href="#">Gallery2</a></li>
                        <li><a class="nav" href="#">Gallery3</a></li>
                    </ul>
                </li>

                <li><a href="#">About</a></li>
                <li><a href="#">Links</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="box main">
    <div class="info-text">
        <h1>Home</h1>
        <p>Welcome to our website dedicated to the preservation of the world's forests. Join us in our mission to protect these vital ecosystems.</p>
        <ul class="text">
            <li>Learn about the importance of forests</li>
            <li>Discover ways to get involved</li>
            <li>Support our conservation efforts</li>
            <li>Explore our gallery of stunning forest images</li>
        </ul>
    </div>
</div>
<div class="box footer">
CC Joshua Davies 20XX
</div> <!--/footer -->
    <script src="js/j_query_min.js"></script>
    <script>
       
        $('.dropbtn').click(function () {
            $('.dropdown').toggleClass('display');
        }
        )
        $('.fa-bars').click(function () {
            $('.menu-content').toggle();
        }
        )
    </script>
</body>
</html> 