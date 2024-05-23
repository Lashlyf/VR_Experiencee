
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--=============== SWIPER CSS ===============--> 
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============--> 
        <link rel="stylesheet" href="styles.css">

        <title>Responsive Halloween Website</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <img src="assets/img/logo.png" alt="" class="nav__logo-img">
                   Geography hub
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>

                        <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li>

                        <li class="nav__item">
                            <a href="#trick" class="nav__link">Learn</a>
                        </li>

                        <a href="#" class="button button--ghost">Quizzes $ Puzzles</a>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x'></i>
                    </div>

                    <img src="assets/img/nav-img.png" alt="" class="nav__img">
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>

            </nav>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home container" id="home">
                <div class="swiper home-swiper">
                    <div class="swiper-wrapper">
                        <!-- HOME SLIDER 1 -->
                        <section class="swiper-slide">
                            <div class="home__content grid">
                                <div class="home__group">
                                    <img src="images/rainforest.jpeg" alt="" class="home__img">
                                    <div class="home__indicator"></div>
    
                                    <div class="home__details-img">
                                        <h4 class="home__details-title">The Amazon Rainforest</h4>
                                        <span class="home__details-subtitle">The Living Jungle</span>
                                    </div>
                                </div>
    
                                <div class="home__data">
                                    <h3 class="home__subtitle">#1 Top Rainforest</h3>
                                    <h1 class="home__title">UOOOO <br> FLORA OR <br> FAUNA!!</h1>
                                    <p class="home__description">The Amazon Rainforest, also known as the Amazon Jungle, is one of the Earth's most vital and biodiverse ecosystems. It spans approximately 5.5 million square kilometers across nine South American countries: Brazil, Peru, Colombia, Venezuela, Ecuador, Bolivia, Guyana, Suriname, and French Guiana.

                                    </p>

                                    <div class="home__buttons">
                                        <a href="learn.php" class="button">VR Experience</a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- HOME SLIDER 2 -->
                        <section class="swiper-slide">
                            <div class="home__content grid">
                                <div class="home__group">
                                    <img src="images/desert.jpeg" alt="" class="home__img">
                                    <div class="home__indicator"></div>
    
                                    <div class="home__details-img">
                                        <h4 class="home__details-title">Sossusvlei,Namibia</h4>
                                        <span class="home__details-subtitle">No words can describe them</span>
                                    </div>
                                </div>
    
                                <div class="home__data">
                                    <h3 class="home__subtitle">#2 top Best dunes</h3>
                                    <h1 class="home__title">BIG  <br> DADDY</h1>
                                    <p class="home__description">Sossusvlei, situated in the Namib Desert, is home to some of the world's highest dunes, with some towering over 300 meters (984 feet). The vivid red and orange hues of the sand create a striking contrast against the deep blue sky. Deadvlei, a white clay pan surrounded by these towering dunes and dotted with ancient, dead camel thorn trees, adds to the surreal beauty of the area. Climbing the famous "Big Daddy" dune offers panoramic views of this extraordinary landscape.
                                    </p>

                                    <div class="home__buttons">
                                        <a href="desert.php" class="button">VR Experience</a>
                                    </div>
                                </div>
                            </div>
                        </section>

            <!--==================== ABOUT ====================-->
            <section class="section about" id="about">
                 <div class="category__container container grid">
                    <div class="category__data">
                        <img src="images/virtual.webp" alt="" class="category__img">
                        <h3 class="category__title">Virtual Tours</h3>
                        <p class="category__description"> Embark on guided tours led by expert narrators who bring each destination to life with captivating stories and insights.</p>
                    </div>

                    <div class="category__data">
                        <img src="assets/img/category2-img.png" alt="" class="category__img">
                        <h3 class="category__title">Educational Modules</h3>
                        <p class="category__description">Access comprehensive modules covering a wide range of geographical topics, complete with interactive maps, infographics, and VR experiences.</p>
                    </div>

                    <div class="category__data">
                        <img src="assets/img/category3-img.png" alt="" class="category__img">
                        <h3 class="category__title">360-Degree Videos</h3>
                        <p class="category__description">Experience the full panorama of each location with our high-definition 360-degree videos, making you feel like you're truly there.</p>
                    </div>
                </div>
            </section>

            <!--==================== TRICK OR TREAT ====================-->
            <section class="section trick" id="trick">
                <h2 class="section__title">Learn or Learn</h2>

                <div class="trick__container container grid">
                    <div class="trick__content">
                        <img src="images/rainforest.jpeg" alt="" class="trick__img">
                        <h3 class="trick__title">Rainforests</h3>
                        <span class="trick__subtitle">Environment</span>
                        <button class="button trick__button">
                            <i class='bx bx-cart-alt trick__icon'></i>
                        </button>
                    </div>

                    <div class="trick__content">
                        <img src="images/desert.jpeg" alt="" class="trick__img">
                        <h3 class="trick__title">Desert</h3>
                        <span class="trick__subtitle">Dunes</span>
                        <button class="button trick__button">
                            <i class='bx bx-cart-alt trick__icon'></i>
                        </button>
                    </div>

                    <div class="trick__content">
                        <img src="images/P2.jpg" alt="" class="trick__img">
                        <h3 class="trick__title">Beaches</h3>
                        <span class="trick__subtitle">Lagoon</span>
                        <button class="button trick__button">
                            <i class='bx bx-cart-alt trick__icon'></i>
                        </button>
                    </div>

                </div>
            </section>
            


        
            <!--==================== OUR NEWSLETTER ====================-->
            <section class="section newsletter">
                <div class="newsletter__container container">
                    <h2 class="section__title">Our Newsletter</h2>
                    <p class="newsletter__description">
                       New books and articles. Directly to your inbox
                    </p>

                    <form action="" class="newsletter__form">
                        <input type="text" placeholder="Enter your email" class="newsletter__input">
                        <button class="button">
                            Subscribe
                        </button>
                    </form>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
            <footer class="footer section">
                <div class="footer__container container grid">
                    <div class="footer__content">
                        <a href="#" class="footer__logo">
                            <img src="assets/img/logo.png" alt="" class="footer__logo-img">
                          Geography Hub
                        </a>

                        <p class="footer__description">Enjoy the adventure <br> of your life.</p>
                        
                        <div class="footer__social">
                            <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                                <i class='bx bxl-facebook'></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                                <i class='bx bxl-instagram-alt' ></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                                <i class='bx bxl-twitter' ></i>
                            </a>
                        </div>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">About</h3>
                        
                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">About Us</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Features</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">News</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Learn</h3>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Quizzes</h3>
                        
                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">Blog</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Questions</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Articles</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <span class="footer__copy">&#169; Geography hub. All rigths reserved</span>

                <img src="assets/img/footer1-img.png" alt="" class="footer__img-one">
                <img src="assets/img/footer2-img.png" alt="" class="footer__img-two">
            </footer>

            <!--=============== SCROLL UP ===============-->
            <a href="#" class="scrollup" id="scroll-up">
                <i class='bx bx-up-arrow-alt scrollup__icon'></i>
            </a>
        
        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
