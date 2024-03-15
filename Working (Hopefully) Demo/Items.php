<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items We Accept</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/Items.css">
</head>

<body>


    <!-- header -->
    <header class="header bg-blue">
        <nav class="navbar bg-blue">
            <div class="container flex">
                <a href="index.php" class="navbar-brand">
                    <img src="images/logo.png" alt="site logo">
                </a>
                <button type="button" class="navbar-show-btn">
                    <img src="images/ham-menu-icon.png">
                </button>

                <div class="navbar-collapse bg-white">
                    <button type="button" class="navbar-hide-btn">
                        <img src="images/close-icon.png">
                    </button>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="Items.php" class="nav-link">Items We Accept</a>
                        </li>
                        <li class="nav-item">
                            <a href="aboutus.php" class="nav-link">About Gabbys</a>
                        </li>
                    </ul>
                    <div class="nav-btn-group">
                        <a href="PawnNow.php" class="btn btn-light-blue">Pawn Now</a>
                    </div>
                    </form>
                </div>
            </div>
            </div>
        </nav>
    </header>
    <!-- end of header -->
    <div class="items">
        <div class="item-text">
            <h1>items we Accept</h1>
            <p>At Gabby's Infinite Pawnshop,
                we accept a wide variety of valuable items such as luxury items like designer bags,
                luxury watches, jewelry, precious metals, gemstones and more that are already traditionally accepted by
                pawnshops.
                Unlike brick-and-mortar pawnshops, we also accept an expanded list of items like smartphones,
                other electronic gadgets and so much more. All of these are acceptable as loan collateral at Gabby's Infinite
                Pawnshop.
                For a full list of items we accept, see the list below.</p>
        </div>
        <div class="container-search">
            <div class="search-bar">
                <div id="select">
                    <p id="selectText">All Categories</p>
                    <img src="images/Arrow.png">
                    <ul id="list">
                        <li class="options" id="option1">Jewelry</li>
                        <li class="options">Watch</li>
                        <li class="options">Laptop</li>
                        <li class="options">Gaming Console</li>
                        <li class="options">Camera</li>
                        <li class="options">Smartphone</li>
                        <li class="options">Tablet</li>
                        <li class="options">Television</li>
   
                    </ul>
                </div>
                <input type="text" id="inputfield" placeholder="Search">
                <button id="searchButton">Search</button>
            </div>
        </div>
    </div>
    <div class="categories">
        <div class="container-categories">
            <div class="products">
                <div class="col-4">
                    <a href="Items.html Item descriptions/Jewelry.php"><img src="images/service-icon-4.png" alt=""></a>
                    <br>
                    <h4>Jewelry</h4>
                </div>
                <div class="col-4">
                    <a href="Items.html Item descriptions/Tablet.php"><img src="images/Tablet.png" alt=""></a>
                    <br>
                    <h4>Tablet</h4>
                </div>
                <div class="col-4">
                    <a href="Items.html Item descriptions/Watch.php"><img src="images/service-icon-2.png" alt=""></a>
                    <br>
                    <h4>Watch</h4>
                </div>
                <div class="col-4">
                    <a href="Items.html Item descriptions/Smartphone.php"><img src="images/service-icon-1.png" alt=""></a>
                    <br>
                    <h4>Smartphone</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="categories">
        <div class="container-categories">
            <div class="products">
                <div class="col-4">
                    <a href="Items.html Item descriptions/Laptop.php"><img src="images/Laptop.png" alt=""></a>
                    <br>
                    <h4>Laptop</h4>
                </div>
                <div class="col-4">
                    <a href="Items.html Item descriptions/Television.php"><img src="images/Television.png" alt=""></a>
                    <br>
                    <h4>Television</h4>
                </div>
                <div class="col-4">
                    <a href="Items.html Item descriptions/GameConsole.php"><img src="images/Controller.png" alt=""></a>
                    <br>
                    <h4>Game Console</h4>
                </div>
                <div class="col-4">
                    <a href="Items.html Item descriptions/Camera.php"><img src="images/Camera.png" alt=""></a>
                    <br>
                    <h4>Camera</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- footer  -->
    <footer id = "footer" class = "footer text-center">
        <div class = "container">
            <div class = "footer-inner text-white py grid">
                <div class = "footer-item">
                    <h3 class = "footer-head">about us</h3>
                    <div class = "icon">
                        <img src = "images/logo.png">
                    </div>
                    <p class = "text text-md">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis saepe incidunt fugiat optio corporis ea!</p>
                    <address>
                        Medic Clinic <br>
                        69 Deerpark Rd, Mount Merrion <br>
                        Co. Dublin, A94 E9D3 <br>
                        Ireland
                    </address>
                </div>

                <div class = "footer-item">
                    <h3 class = "footer-head">tags</h3>
                    <ul class = "tags-list flex">
                        <li>medical care</li>
                        <li>emergency</li>
                        <li>therapy</li>
                        <li>surgery</li>
                        <li>medication</li>
                        <li>nurse</li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h3 class = "footer-head">Quick Links</h3>
                    <ul>
                        <li><a href = "#" class = "text-white">Our Services</a></li>
                        <li><a href = "#" class = "text-white">Our Plan</a></li>
                        <li><a href = "#" class = "text-white">Privacy Policy</a></li>
                        <li><a href = "#" class = "text-white">Appointment Schedule</a></li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h3 class = "footer-head">make an appointment</h3>
                    <p class = "text text-md">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, omnis.</p>
                    <ul class = "appointment-info">
                        <li>8:00 AM - 11:00 AM</li>
                        <li>2:00 PM - 05:00 PM</li>
                        <li>8:00 PM - 11:00 PM</li>
                        <li>
                            <i class = "fas fa-envelope"></i>
                            <span>revomedic@gmail.com</span>
                        </li>
                        <li>
                            <i class = "fas fa-phone"></i>
                            <span>+003 478 2834(00)</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class = "footer-links">
                <ul class = "flex">
                    <li><a href = "#" class = "text-white flex"> <i class = "fab fa-facebook-f"></i></a></li>
                    <li><a href = "#" class = "text-white flex"> <i class = "fab fa-twitter"></i></a></li>
                    <li><a href = "#" class = "text-white flex"> <i class = "fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- end of footer  -->
    <script src="js/Items.js"></script>



</body>

</html>