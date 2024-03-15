<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Gabby's Pawnshop, Inc.</title>
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
                            <a href = "items.php" class = "nav-link">Items We Accept</a>
                        </li>
                        <li class="nav-item">
                            <a href="aboutus.php" class="nav-link">About US</a>
                        </li>
                    </ul>
                    <div class = "nav-btn-group">
                        <a href = "#" class = "btn btn-light-blue">Pawn Now</a>
                    </div>
                        </form>
                    </div>
                </div> 
            </div>
        </nav>

        <div class = "header-inner text-white text-center">
            <div class = "container grid">
                <div class = "header-inner-left">
                    <h1>About Gabby's Pawnshop</h1>
                    <p class="text-lg">Gabby's Pawnshop is a reputable pawn shop in Davao City, known for its reliable and efficient services. With a commitment to integrity and fair dealings, the shop offers a wide range of services, including pawn loans, remittance, and foreign currency exchange. The dedicated team is available to assist customers with quick cash or secure storage of valuables.</p>
                    <p class="text-lg">We prioritize cultivating a warm and inviting atmosphere for our patrons, fostering enduring relationships built on trust and mutual respect. Gabby's Pawnshop's dedication to trustworthiness, reliability, and customer satisfaction shines through in every facet of our operations. Come and visit Gabby's Pawnshop today to discover the unparalleled experience we offer.</p>
                </div>
                <div class = "header-inner-right-image text-light-blue">
                    <img src = "images/aboutus.jpg">
                </div>
            </div>
        </div>
    </header>
    <!-- end of header -->

    <main>

        <!-- Contact Detail Section -->
        <section class="header-inner-contact text-black text-center">
            <div class="container grid">
                <div class="header-inner-left-contact">
                    <h1>Contact Gabby's Pawnshop, Inc.</h1>
                    <p class="text">We'd love to assist you with your Gabby's Pawnshop loan journey. You may talk to any of our loan support team during business hours.</p>
                    <p class="text text-md">San Vicente Bldg, San Pedro St.,</p>
                    <p class="text text-md">Brgy. 3-A, Davao City,</p>    
                    <p class="text text-md">Davao City, Philippines</p>  
                    <p class="text text-md">Main hotline: (082) 321 2185</p>
                    <p class="text text-md">Email: gabby_brilliant2017@yahoo.com</p>
                    <p class="text text-md">Message us on Facebook: Gabby's Pawnshop, Inc</p>
                </div>
                <div class="header-inner-right-contact text-light-blue">
                    <h1>Map Direction of Gabby's Pawnshop, Inc.</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.8726669455107!2d125.60419081983642!3d7.068966950298673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d77565f4c5d%3A0xa0f9cfe0b615e3e1!2sGabby&#39;s%20Infinite%20Pawnshop%20Inc.!5e0!3m2!1sen!2sph!4v1709743660582!5m2!1sen!2sph" width="800" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        <!-- end of Contact Detail Section -->
    
        <!-- contact us section -->
        <section class = "contact py">
                <div class = "contact-right text-white text-center bg-blue">
                    <div class = "contact-head">
                        <h3 class = "lead">We're here to help!</h3>
                        <p class = "text text-md">For any inquiries, concerns or suggestions, feel free to fill out the form below and our friendly customer service specialists will contact you.</p>
                    </div>
                    <form>
                        <div class="form-element">
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-element">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="form-element">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-element">
                            <input type="tel" class="form-control" placeholder="Contact Number">
                        </div>
                        <div class="form-element">
                            <select class="form-control">
                                <option value="content1">Complaint</option>
                                <option value="content2">General Inquiry</option>
                                <option value="content3">Item/s not on list</option>
                                <option value="content4">Advertising</option>
                                <option value="content5">Authentication Service</option>
                                <option value="content6">Feedback</option>
                                <option value="content7">Others</option>
                            </select>
                        </div>
                        <div class="form-element">
                            <textarea rows="5" placeholder="Your Message" class="form-control"></textarea>
                        </div>
                        <div class="form-element">
                            <input type="file" id="fileUpload" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-white btn-submit">
                            <i class="fas fa-arrow-right"></i> Send Message
                        </button>
                    </form>
                </div>
        </section>
        <!-- end of contact us section -->
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
                        <li><a href = "index.html#faq-panel" class = "text-white">FAQ</a></li>
                        <li><a href = "#" class = "text-white">Promos</a></li>
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
</body>
</html>
