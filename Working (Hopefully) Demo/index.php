<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gabby's Pawnshop, Inc.</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel = "stylesheet" href = "css/normalize.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "css/main.css">
</head>
<body>
    

    <!-- header -->
    <header class = "header bg-blue">
        <nav class = "navbar bg-blue">
            <div class = "container flex">
                <a href = "index.php" class = "navbar-brand">
                    <img src = "images/logo.png" alt = "site logo">
                </a>
                <button type = "button" class = "navbar-show-btn">
                    <img src = "images/ham-menu-icon.png">
                </button>

                <div class = "navbar-collapse bg-white">
                    <button type = "button" class = "navbar-hide-btn">
                        <img src = "images/close-icon.png">
                    </button>
                    <ul class = "navbar-nav">
                        <li class = "nav-item">
                            <a href = "index.php" class = "nav-link">Home</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "Items.php" class = "nav-link">Items We Accept</a>
                        </li>
                        <li class="nav-item">
                            <a href="aboutus.php" class="nav-link" >About US</a>
                        </li>
                    </ul>
                    <div class = "nav-btn-group">
                        <a href = "PawnNow.php" class = "btn btn-light-blue">Pawn Now</a>
                    </div>
                        </form>
                    </div>
                </div> 
            </div>
        </nav>

        <div class = "header-inner text-white text-center">
            <div class = "container grid">
                <div class = "header-inner-left">
                    <h1>your most trusted<br> <span>Pawnshop</span></h1>
                    <p class = "lead">in the Davao City</p>
                    <p class="text text-md">Where we value your trust and provide you with reliable services. Our team is dedicated to assisting you with your financial needs. Whether you're looking to pawn valuables, buy or seek financial assistance, we're here to help. With years of experience and a commitment to integrity, we ensure that your transactions are smooth and transparent. Visit us today and experience the difference of dealing with your most trusted pawnshop.</p>
                </div>
                <div class = "header-inner-right">
                    <img src = "images/header.png">
                </div>
            </div>
        </div>
    </header>
    <!-- end of header -->

    <main>

         <!-- services section -->
         <section id = "services" class = "services py">
            <div class = "container">
                <div class = "section-head text-center">
                    <h2 class = "lead">Featured Products</h2>
                    <p class = "text text-lg">Gabby's Pawnshop accepts a wide variety of items as collateral for instant cash loans</p>
                </div>
                <div class = "services-inner text-center grid">
                    <article class = "service-item">
                        <div class = "icon">
                            <a href = "#"  ><img src = "images/service-icon-1.png"></a>
                        </div>
                        <a href= "#"><h3>Your Smartphones</h3></a>
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <a href = "#"  ><img src = "images/service-icon-2.png"></a>
                        </div>
                        <a href= "#"><h3>Your Luxury Watches</h3></a>
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <a href = "#"  ><img src = "images/service-icon-3.png"></a>
                        </div>
                        <a href= "#"><h3>Your High-end T.V</h3></a>
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <a href = "#"  ><img src = "images/service-icon-4.png"></a>
                        </div>
                        <a href= "#"><h3>Your Jewelry</h3></a>
                    </article>
                    <div class = "service-btn-group">
                        <a href = "#" class = "btn btn-blue">See more Featured Products</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of services section -->

         <!-- package services section -->
         <section id = "package-service" class = "package-service py text-center">
            <div class = "container">
                <div class = "package-service-head text-white">
                    <h3>How to Pawn Online</h3>
                    <p class = "text text-lg">Pawn from anywhere in just 3 easy steps</p>
                </div>
                <div class = "package-service-inner grid">
                    <div class = "package-service-item bg-white">
                        <div class = "icon flex">
                            <i class="fas fa-solid fa-magnifying-glass fa-3x"></i>
                        </div>
                        <p class = "text text-sm"><br><br>
                            "Visit Gabby's Pawnshop at [insert location/address] or explore their services online at [insert website if available]. Click here to learn more about the pawn services offered by Gabby's Pawnshop."</p>
                    </div>

                    <div class = "package-service-item bg-white">
                        <div class = "icon flex">
                            <i class=" fas fa-solid fa-person-walking fa-3x"></i>
                        </div>
                        <p class = "text text-sm"><br><br>Click “Pawn Now” and choose from our lists of descriptions that best fit your collateral. Once you've generated your online pawn ticket, bring it to our physical pawnshop for final inspection and appraisal.</p>
                    </div>
                    
                    <div class = "package-service-item bg-white">
                        <div class = "icon flex">
                            <i class="fas fa-solid fa-envelope fa-3x"></i>
                        </div>
                        <p class = "text text-sm"><br><br>Once you receive the notification, you can head to the pawnshop to finalize the process. Upon accepting our final loan offer, your loan will be promptly released within 5-10 minutes through your selected InstaPay partner bank or electronic money issuer.</p>
                    </div>
                    <div class = "package-btn-group">
                        <a href = "#" class = "btn btn-white">Learn more about pawning</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of package services section -->

       <!-- FAQ section -->
    <!-- FAQ section -->
    <section id="faq-panel" class="faq-panel py">
        <div class="container">
            <div class="section-head">
                <h2>Frequently Asked Questions</h2>
            </div>

            <div class="faq-panel-inner grid">
                <div class="faq-panel-item" data-toggle="faq-1">
                    <div class="question bg-blue text-white text-center">
                        <p class="lead">What items can I pawn?</p>
                    </div>
                    <div class="answer">
                        <p>You can pawn a variety of items such as Luxury Jewelry, Gadgets, Watches, and more. Visit our store for a detailed assessment.</p>
                    </div>
                </div>

                <div class="faq-panel-item" data-toggle="faq-2">
                    <div class="question bg-blue text-white text-center">
                        <p class="lead">What documents do I need to pawn an item?</p>
                    </div>
                    <div class="answer">
                        <p>You will typically need a valid ID, proof of ownership of the item, and any relevant documentation such as certificates or receipts.</p>
                    </div>
                </div>

                
                <div class="faq-panel-item" data-toggle="faq-3">
                    <div class="question bg-blue text-white text-center">
                        <p class="lead">What item can I pawn?</p>
                    </div>
                    <div class="answer">
                        <p>Gabby's Pawnshop accepts a wide range of items as collateral. For a full list of what we accept, visit the Items We Accept Page.</p>
                    </div>
                </div>

                <div class="faq-panel-item" data-toggle="faq-4">
                    <div class="question bg-blue text-white text-center">
                        <p class="lead">What are requirements to redeem my item?</p>
                    </div>
                    <div class="answer">
                        <p>Make sure to fully settle your loan balance and don't forget to bring with you the original copy of your PawnHero ticket and two (2) valid IDs when redeeming your item/s. These are strictly required for us to be able to smoothly process your loan redemption.</p>
                    </div>
                </div>

                <div class="faq-panel-item" data-toggle="faq-5">
                    <div class="question bg-blue text-white text-center">
                        <p class="lead">How do I redeem my loan?</p>
                    </div>
                    <div class="answer">
                        <p>Redeem your loan on or before the maturity date to avoid inconvenience. You may pay via these payment methods:</p>
                        <p>Over-the-Counter</p>
                        <p>Cash Payment</p>
                        <p>Online Bank Payment</p>
                        <p>* Transaction and service fees may apply.</p>
                    </div>
                </div>

                <div class="faq-panel-item" data-toggle="faq-6">
                    <div class="question bg-blue text-white text-center">
                        <p class="lead">Can I extend my loan?</p>
                    </div>
                    <div class="answer">
                        <p>Yes! If you are not ready to redeem your item yet and pay the full loan amount, you can request for a loan renewal. call one of our customer care specialists to help you.</p>
                    </div>
                </div>

            <!-- Add more FAQ items as needed -->
            </div>
         </div>
    </section>


        <!-- banner two section -->
        <section id = "banner-two" class = "banner-two text-center">
            <div class = "container grid">
                <div class = "banner-two-left">
                    <img src = "images/banner-2-img.png">
                </div>
                <div class = "banner-two-right">
                    <p class="lead text-white">Looking for quick cash? Visit our pawnshop today and get instant cash for your valuable items!</p>
                    <div class = "btn-group">
                        <a href = "#" class = "btn btn-white">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of banner two section -->

        <!-- posts section -->
        <section id = "posts" class = "posts py">
            <div class = "container">
                <div class = "section-head">
                    <h2>News</h2>
                </div>
                <div class = "posts-inner grid">
                    <article class = "post-item bg-white">
                        <div class = "img">
                            <img src = "images/post-1.jpg">
                        </div>
                        <div class = "content">
                            <h4>Auction Schedule for January 2024</h4>
                            <p class = "text text-sm">Feel free to note these dates on your calendar and get your money ready to purchase the auction items!</p>
                            <p class = "text text-sm">For updates regarding Gabby’s Pawnshop, make sure to check out their Facebook page to stay informed about their auction events and other announcements. Happy Buying!</p>
                        </div>
                    </article>

                    <article class = "post-item bg-white">
                        <div class = "img">
                            <img src = "images/post-2.jpg">
                        </div>
                        <div class = "content">
                            <h4>Auction Schedule for February 2024</h4>
                            <p class = "text text-sm">Feel free to note these dates on your calendar and get your money ready to purchase the auction items!</p>
                            <p class = "text text-sm">For updates regarding Gabby’s Pawnshop, make sure to check out their Facebook page to stay informed about their auction events and other announcements. Happy Buying!</p>
                        </div>
                    </article>

                    <article class = "post-item bg-white">
                        <div class = "img">
                            <img src = "images/post-3.jpg">
                        </div>
                        <div class = "content">
                            <h4>Auction Schedule for March 2024</h4>
                            <p class = "text text-sm">Feel free to note these dates on your calendar and get your money ready to purchase the auction items!</p>
                            <p class = "text text-sm">For updates regarding Gabby’s Pawnshop, make sure to check out their Facebook page to stay informed about their auction events and other announcements. Happy Buying!</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- end of posts section -->
        
        <!-- about section -->
        <section id = "about" class = "about py">
            <div class = "about-inner">
                <div class = "container grid">
                    <div class = "about-left text-center">
                        <div class = "section-head">
                            <h2>About Us</h2>
                            <div class = "border-line"></div>
                        </div>
                        <p class = "text text-lg">Gabby's Pawnshop is a reputable pawn shop in Davao City, known for its reliable and efficient services. With a commitment to integrity and fair dealings, the shop offers a wide range of services, including pawn loans, remittance, and foreign currency exchange. The dedicated team is available to assist customers with quick cash or secure storage of valuables.</p>
                        <a href = "aboutus.html" class = "btn btn-blue">Learn More</a>
                    </div>
                    <div class = "about-right flex">
                        <div class = "img">
                            <img src = "images/about-img.png">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of about section -->
    </main>

    <!-- footer  -->
    <footer id = "footer" class = "footer text-center">
        <div class = "container">
            <div class = "footer-inner text-white py grid">
                <div class = "footer-item">
                    <h3 class = "footer-head">Location</h3>
                    <address>
                        San Vicente Bldg, San Pedro St., <br>
                        Brgy. 3-A, Davao City, <br>
                        Davao City, Philippines
                    </address>
                </div>

                <div class = "footer-item">
                    <h3 class = "footer-head">tags</h3>
                    <ul class = "tags-list flex">
                        <li>Pawned Items</li>
                        <li>Contacts</li>
                        <li>Jewelry</li>
                        <li>Gadgets</li>
                        <li>Watches</li>
                        <li>Questions</li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h3 class = "footer-head">Quick Links</h3>
                    <ul>
                        <li><a href = "#faq-panel" class = "text-white">FAQ</a></li>
                        <li><a href = "#" class = "text-white">Help</a></li>
                        <li><a href = "#footer" class = "text-white">Privacy Policy</a></li>
                    </ul>
                </div>

                <div class="footer-item">
                    <h3 class="footer-head">Privacy Policy</h3>
                    <p class="text text-md">Our privacy policy outlines how we collect, use, and protect your personal information when you visit our website or use our services. We are committed to ensuring the confidentiality and security of your personal data.</p>
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


    <!-- custom js -->
    <script src = "js/script.js"></script>
    <script src = "js/script2.js"></script>
    <script src="js/Items.js"></script>
</body>
</html>