<?php
session_start();
if (!isset($_SESSION['user_data'])) {
    header('Location: ../login-reg/user/login.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="home.css">


    <link rel="stylesheet" type="text/css" href="../bookdetail/bookdetailstyle.css">
    
    <title>Home</title>
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="#" class="active">Home</a>
        <a href="../bookdetail/bookdetail.html">Book Details</a>
        <a href="../bookdetail/bookdetail.html">Book Catelog</a>
        <a href="../FloorPlanV3/index.php">Floor Plan</a>
        <a href="../inqueris/new inq 2.html">Inquires</a>
        <a href="./Contactus.html" >Contact Us</a>
        <a href="../login-reg/backend/logout.php">Logout</a>

        
        <div class="search-container">
            <form action="search.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    
    <div id="formContainer">
    <div class="slideshow-container" style="width: 100%; border: 1px solid black;">

    <div class="mySlides fade">
            <div class="numbertext">3 / 5</div>
            <img src="img/1.jpg" style="width:100%">
            <div class="text">Caption Three</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 5</div>
            <img src="img/2.jpg" style="width:100%">
            <div class="text">Caption Three</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">5 / 5</div>
            <img src="img/3.jpg" style="width:100%">
            <div class="text">Caption Three</div>
        </div>

    </div>

    <div class="container">
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        <h1>
            Poth Madura Book Store
        </h1>
        <div class="typingclass">
            <a href="" class="typewrite" data-period="2000"
                data-type='[ "Hi, Welcome to Poth Madura Book Store" ]'>
                <span></span>
            </a>
        </div>
        <div class="horisontal-line"></div>
        <div class="book-shop-content">
            <h2>Content About the Poth Madura Book Store</h2>
            <!-- <p style="text-align: justify;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quidem, velit consequatur error
                eveniet
                hic dignissimos, facilis rerum ut autem veritatis reiciendis libero labore dolor fugiat non ipsam
                maiores
                iste!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quidem, velit consequatur error
                eveniet
                hic dignissimos, facilis rerum ut autem veritatis reiciendis libero labore dolor fugiat non ipsam
                maiores
                iste!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quidem, velit consequatur error
                eveniet
                hic dignissimos, facilis rerum ut autem veritatis reiciendis libero labore dolor fugiat non ipsam
                maiores
                iste!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quidem, velit consequatur error
                eveniet
                hic dignissimos, facilis rerum ut autem veritatis reiciendis libero labore dolor fugiat non ipsam
                maiores
                iste!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quidem, velit consequatur error
                eveniet
                hic dignissimos, facilis rerum ut autem veritatis reiciendis libero labore dolor fugiat non ipsam
                maiores
                iste!
            </p> -->
        </div>
        <h2 style="width: 100%; padding: 20px 90px; font-size: 40px;">Special Discount</h2>
        <div class="book-collection-2">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="https://res.cloudinary.com/dqmgkczgk/image/upload/v1691214657/book_shop/WhatsApp_Image_2023-08-04_at_9.41.48_PM_r64swm.jpg" alt="Avatar" style="width:300px;height:300px;">
                        <h4>Funny Boy</h4>
                    </div>
                    <div class="flip-card-back">
                        <h1>Funny Boy</h1>
                        <p>Architect & Engineer</p>
                        <p>We love that guy</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="https://res.cloudinary.com/dqmgkczgk/image/upload/v1691214795/book_shop/WhatsApp_Image_2023-08-04_at_9.41.46_PM_u15zn6.jpg" alt="Avatar" style="width:300px;height:300px;">
                        <h4>Blind Side</h4>
                    </div>
                    <div class="flip-card-back">
                        <h1>Blind Side</h1>
                        <p>Architect & Engineer</p>
                        <p>We love that guy</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="https://res.cloudinary.com/dqmgkczgk/image/upload/v1691215248/book_shop/WhatsApp_Image_2023-08-04_at_9.41.45_PM_1_p33ctq.jpg" alt="Avatar" style="width:300px;height:300px;">
                        <h4>City of girl</h4>
                    </div>
                    <div class="flip-card-back">
                        <h1>City of girl</h1>
                        <p>Architect & Engineer</p>
                        <p>We love that guy</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="https://res.cloudinary.com/dqmgkczgk/image/upload/v1691215279/book_shop/WhatsApp_Image_2023-08-04_at_9.41.45_PM_uvyy0n.jpg" alt="Avatar" style="width:300px;height:300px;">
                        <h4>Date with Death</h4>
                    </div>
                    <div class="flip-card-back">
                        <h1>Date with Death</h1>
                        <p>Architect & Engineer</p>
                        <p>We love that guy</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="https://res.cloudinary.com/dqmgkczgk/image/upload/v1691215367/book_shop/WhatsApp_Image_2023-08-04_at_9.41.40_PM_pdhaep.jpg" alt="Avatar" style="width:300px;height:300px;">
                        <h4>Restore me</h4>
                    </div>
                    <div class="flip-card-back">
                        <h1>Restore me</h1>
                        <p>Architect & Engineer</p>
                        <p>We love that guy</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="https://res.cloudinary.com/dqmgkczgk/image/upload/v1691215424/book_shop/WhatsApp_Image_2023-08-04_at_9.41.35_PM_nt8lgd.jpg" alt="Avatar" style="width:300px;height:300px;">
                        <h4>Hiskole</h4>
                    </div>
                    <div class="flip-card-back">
                        <h1>Hiskole</h1>
                        <p>Architect & Engineer</p>
                        <p>We love that guy</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="https://res.cloudinary.com/dqmgkczgk/image/upload/v1691215452/book_shop/WhatsApp_Image_2023-08-04_at_9.41.33_PM_vu1x3x.jpg" alt="Avatar" style="width:300px;height:300px;">
                        <h4>May December Romance</h4>
                    </div>
                    <div class="flip-card-back">
                        <h1>May December Romance</h1>
                        <p>Architect & Engineer</p>
                        <p>We love that guy</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="https://res.cloudinary.com/dqmgkczgk/image/upload/v1691215548/book_shop/WhatsApp_Image_2023-08-04_at_9.41.32_PM_lbrjom.jpg" alt="Avatar" style="width:300px;height:300px;">
                        <h4>Diary of a wimpy kid hard luck</h4>
                    </div>
                    <div class="flip-card-back">
                        <h1>Diary of a wimpy kid hard luck</h1>
                        <p>Architect & Engineer</p>
                        <p>We love that guy</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="https://res.cloudinary.com/dqmgkczgk/image/upload/v1691216834/book_shop/WhatsApp_Image_2023-08-04_at_9.41.31_PM_odfyl5.jpg" alt="Avatar" style="width:300px;height:300px;">
                        <h4>Jojo moyes</h4>
                    </div>
                    <div class="flip-card-back">
                        <h1>Jojo moyes</h1>
                        <p>Architect & Engineer</p>
                        <p>We love that guy</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card second -->
        <div class="wrapper">
            <div class="card">
                <div class="card-banner">
                    <p class="category-tag popular">History</p>
                    <img class="banner-img"
                        src='https://res.cloudinary.com/dqmgkczgk/image/upload/v1691215248/book_shop/WhatsApp_Image_2023-08-04_at_9.41.45_PM_1_p33ctq.jpg' alt=''>
                </div>
                <div class="card-body">
                    <p class="blog-hashtag">#City #of #girl</p>
                    <h2 class="blog-title">City of girl</h2>
                    <p class="blog-description">My thoughts on the future of front end web development</p>
                </div>
            </div>
            <div class="card">
                <div class="card-banner">
                    <p class="category-tag technology">Sciencetific</p>
                    <img class="banner-img"
                        src='https://res.cloudinary.com/dqmgkczgk/image/upload/v1691215279/book_shop/WhatsApp_Image_2023-08-04_at_9.41.45_PM_uvyy0n.jpg' alt=''>
                </div>
                <div class="card-body">
                    <p class="blog-hashtag">#Date #with #Death</p>
                    <h2 class="blog-title">Date with Death</h2>
                    <p class="blog-description">Looking to upgrade your gear? Here is the list of the best photography
                        tools for this year</p>
                </div>
            </div>
            <div class="card">
                <div class="card-banner">
                    <p class="category-tag psychology">History</p>
                    <img class="banner-img"
                        src='https://res.cloudinary.com/dqmgkczgk/image/upload/v1691215367/book_shop/WhatsApp_Image_2023-08-04_at_9.41.40_PM_pdhaep.jpg' alt=''>
                </div>
                <div class="card-body">
                    <p class="blog-hashtag">#Restore #me</p>
                    <h2 class="blog-title">Restore me</h2>
                    <p class="blog-description">Mediation has transformed my life. These are the best practices to get
                        into the habit</p>

                </div>
            </div>
            <div class="card">
                <div class="card-banner">
                    <p class="category-tag psychology">Scientific</p>
                    <img class="banner-img"
                        src='https://res.cloudinary.com/dqmgkczgk/image/upload/v1691215424/book_shop/WhatsApp_Image_2023-08-04_at_9.41.35_PM_nt8lgd.jpg' alt=''>
                </div>
                <div class="card-body">
                    <p class="blog-hashtag">#Hiskole</p>
                    <h2 class="blog-title">Hiskole</h2>
                    <p class="blog-description">Mediation has transformed my life. These are the best practices to get
                        into the habit</p>
                    
                </div>
            </div>
            <div class="card">
                <div class="card-banner">
                    <p class="category-tag psychology">Story</p>
                    <img class="banner-img"
                        src='https://res.cloudinary.com/dqmgkczgk/image/upload/v1691215452/book_shop/WhatsApp_Image_2023-08-04_at_9.41.33_PM_vu1x3x.jpg' alt=''>
                </div>
                <div class="card-body">
                    <p class="blog-hashtag">#May #December #Romance</p>
                    <h2 class="blog-title">May December Romance</h2>
                    <p class="blog-description">Mediation has transformed my life. These are the best practices to get
                        into the habit</p>
                    
                </div>
            </div>
            <div class="card">
                <div class="card-banner">
                    <p class="category-tag psychology">Noverls</p>
                    <img class="banner-img"
                        src='https://res.cloudinary.com/dqmgkczgk/image/upload/v1691215548/book_shop/WhatsApp_Image_2023-08-04_at_9.41.32_PM_lbrjom.jpg' alt=''>
                </div>
                <div class="card-body">
                    <p class="blog-hashtag">#Diary #wimpy #hard </p>
                    <h2 class="blog-title">Diary of a wimpy kid hard luck</h2>
                    <p class="blog-description">Mediation has transformed my life. These are the best practices to get
                        into the habit</p>
                    
                </div>
            </div>
            <div class="card">
                <div class="card-banner">
                    <p class="category-tag technology">Sciencetific</p>
                    <img class="banner-img"
                        src='https://res.cloudinary.com/dqmgkczgk/image/upload/v1691215279/book_shop/WhatsApp_Image_2023-08-04_at_9.41.45_PM_uvyy0n.jpg' alt=''>
                </div>
                <div class="card-body">
                    <p class="blog-hashtag">#Date #with #Death</p>
                    <h2 class="blog-title">Date with Death</h2>
                    <p class="blog-description">Looking to upgrade your gear? Here is the list of the best photography
                        tools for this year</p>
                </div>
            </div>
            <div class="card">
                <div class="card-banner">
                    <p class="category-tag psychology">History</p>
                    <img class="banner-img"
                        src='https://res.cloudinary.com/dqmgkczgk/image/upload/v1691215367/book_shop/WhatsApp_Image_2023-08-04_at_9.41.40_PM_pdhaep.jpg' alt=''>
                </div>
                <div class="card-body">
                    <p class="blog-hashtag">#Restore #me</p>
                    <h2 class="blog-title">Restore me</h2>
                    <p class="blog-description">Mediation has transformed my life. These are the best practices to get
                        into the habit</p>

                </div>
            </div>
            <div class="card">
                <div class="card-banner">
                    <p class="category-tag psychology">Story</p>
                    <img class="banner-img"
                        src='https://res.cloudinary.com/dqmgkczgk/image/upload/v1691215452/book_shop/WhatsApp_Image_2023-08-04_at_9.41.33_PM_vu1x3x.jpg' alt=''>
                </div>
                <div class="card-body">
                    <p class="blog-hashtag">#May #December #Romance</p>
                    <h2 class="blog-title">May December Romance</h2>
                    <p class="blog-description">Mediation has transformed my life. These are the best practices to get
                        into the habit</p>
                    
                </div>
            </div>
            <div class="card">
                <div class="card-banner">
                    <p class="category-tag technology">Sciencetific</p>
                    <img class="banner-img"
                        src='https://res.cloudinary.com/dqmgkczgk/image/upload/v1691215279/book_shop/WhatsApp_Image_2023-08-04_at_9.41.45_PM_uvyy0n.jpg' alt=''>
                </div>
                <div class="card-body">
                    <p class="blog-hashtag">#Date #with #Death</p>
                    <h2 class="blog-title">Date with Death</h2>
                    <p class="blog-description">Looking to upgrade your gear? Here is the list of the best photography
                        tools for this year</p>
                </div>
            </div>
            <div class="card">
                <div class="card-banner">
                    <p class="category-tag popular">History</p>
                    <img class="banner-img"
                        src='https://res.cloudinary.com/dqmgkczgk/image/upload/v1691215248/book_shop/WhatsApp_Image_2023-08-04_at_9.41.45_PM_1_p33ctq.jpg' alt=''>
                </div>
                <div class="card-body">
                    <p class="blog-hashtag">#City #of #girl</p>
                    <h2 class="blog-title">City of girl</h2>
                    <p class="blog-description">My thoughts on the future of front end web development</p>
                </div>
            </div>

        </div>
    </div>

    <footer>
        <div class="footer-content">
            <h3>Poth Madura Book Store</h3>
            <p></p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                
            </ul>
            
            <a id="contact" href="./Contactus.html">CONTACT US</a>
        </div>
        <!-- <div class="footer-bottom">
            <p>copyright &copy; <a href="#">Foolish Developer</a> </p>
            <div class="footer-menu">
                <ul class="f-menu">
                   
                    <li><a href="./Contactus.html">Contact</a></li>
                    
                </ul>
            </div>
        </div> -->

    </footer>

    <Script src="home.js"></Script>
    <script src="../bookdetail/bookdetails.js"></script>
</body>
</html>
