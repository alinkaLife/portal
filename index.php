<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./index.css">
</head>

<body>
    <header class="header">
        <div class="container">


            <nav class="header__nav">
                <a class="logo" href="/index.html">
                    <img src="./img/header/frame_1000002497.webp" alt="logo">
                </a>
                <ul class="header__list">
                    <li class="header__item">
                        <a class="header__text" href="/index.html">
                            <div>
                                <img src="./img/header/marketplace.webp" alt="marketplace">
                            </div>
                            <div>
                                Marketplace
                            </div>
                        </a>
                    </li>
                    <li class="header__item">
                        <a class="header__text" href="/index.html">
                            <div>
                                <img src="./img/header/network.webp" alt="network">
                            </div>
                            <div>
                                Network
                            </div>
                        </a>
                    </li>
                    <li class="header__item">
                        <a class="header__text" href="/index.html">
                            <div>
                                <img src="./img/header/feed.webp" alt="feed">
                            </div>
                            <div>
                                Feed
                            </div>
                        </a>
                    </li>
                </ul>
                <input placeholder="Search for work, businesses, talents..." class="header__input" type="text"
                    id="mainSearch" name="fname">
                <ul class="header__list">
                    <li class="header__item">
                        <a class="header__text" href="/index.html">
                            <div>
                                <img src="./img/header/post_project.webp" alt="project">
                            </div>
                            <div>
                                Post Project
                            </div>
                        </a>
                    </li>
                    <li class="header__item">
                        <a class="header__text" href="/index.html">
                            <div>
                                <img src="./img/header/post_product.webp" alt="product">
                            </div>
                            <div>
                                Post Product
                            </div>
                        </a>
                    </li>
                    <li class="header__item">
                        <a class="header__text" href="/index.html">
                            <div>
                                <img src="./img/header/find_work.webp" alt="work">
                            </div>
                            <div>
                                Find Work
                            </div>
                        </a>
                    </li>
                </ul>
                <button class="header__btn">Register</button>
            </nav>

        </div>
    </header>
    <main>
        <section class="hero">
            <div class="container">

                <div class="hero__content">
                    <p class="hero__text">Empowering Businesses, Advancing Careers</p>
                    <h2 class="hero__about">Find The Right Solution For Your <span class="accent">Business</span> and
                        <span class="accent">Career</span>.
                    </h2>
                    <form>
                        <label class="hero__label" for="emailOrPhone">Email or phone</label><br>
                        <input class="hero__input" type="text" id="emailOrPhone" name="fname"><br>
                        <label class="hero__label" for="passwordValue">Password</label><br>
                        <input class="hero__input" type="password" id="passwordValue" name="lname">
                    </form>
                    <p class="hero__password">Forgot password?</p>
                    <div>
                        <button class="hero__btn">Sign in</button>
                    </div>
                    <div>
                        <button class="hero__btn-second">Don’t have an account? Join now</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="partners">
            <div class="container">
                <h2 class="partners__text">Trusted by 4,000+ Businesses</h2>
                <ul class="partners__list">
                    <li class="partners__item">
                        <img src="./img/logo/spotify.webp" alt="spotify">
                    </li>
                    <li class="partners__item">
                        <img src="./img/logo/toyota.webp" alt="toyota">
                    </li>
                    <li class="partners__item">
                        <img src="./img/logo/slack.webp" alt="slack">
                    </li>
                    <li class="partners__item">
                        <img src="./img/logo/adobe.webp" alt="adobe">
                    </li>
                    <li class="partners__item">
                        <img src="./img/logo/webflow.webp" alt="webflow">
                    </li>
                    <li class="partners__item">
                        <img src="./img/logo/zoom.webp" alt="zoom">
                    </li>
                </ul>
                <ul class="partners__about">
                    <li class="partners__name">
                        <img src="./img/partners/interview.webp" alt="interview">
                        <h3 class="partners__text-main">Find Work & Talents</h3>
                        <p class="partners__about-bottom">Whether you are looking to find work or talents for your
                            business we help you connect with
                            the
                            right resources</p>
                        <button class="partners__btn">Explore Now</button>
                    </li>
                    <li class="partners__name">
                        <img src="./img/partners/business_deal.webp" alt="business_deal">
                        <h3 class="partners__text-main">Discover Businesses</h3>
                        <p class="partners__about-bottom">Discover thousands of businesses who rely on our platform to
                            showcase and expand their
                            business
                        </p>
                        <button class="partners__btn">Explore Now</button>
                    </li>
                    <li class="partners__name">
                        <img src="./img/partners/group.webp" alt="group">
                        <h3 class="partners__text-main">Buy & Sell Resources</h3>
                        <p class="partners__about-bottom">Buy and sell your business products in an every growing
                            marketplace and diversify your
                            business portfolio</p>
                        <button class="partners__btn">Explore Now</button>
                    </li>
                </ul>
            </div>
        </section>
        <section class="about">
            <div class="container">
                <div class="about__content">
                    <div>
                        <h3 class="about__top-name">Why Us</h3>
                        <h2 class="about__text">We provide a wide range of solutions for all your business needs</h2>
                        <p class="about__about">Whether you seek versatile part-time engagements, freelance projects, or
                            trying
                            to sell your products, our platform connects you with businesses spanning various
                            industries.
                            Diversify your skill set, create your network, and expand your business footprint by
                            immersing
                            yourself in different industries across the globe</p>
                        <p class="about__about">Join Toil now and unlock a world of possibilities to fuel success and
                            grow your business.</p>
                        <button class="about__btn">Join Now</button>
                    </div>
                    <div>
                        <img src="./img/about/Images.webp" alt="cavorking">
                    </div>
                </div>
            </div>
        </section>
        <section class="team">
            <div class="container">
                <ul class="team__block">
                    <li>
                        <h2 class="team__text">Creative Solutions <br> by Professional<span class="accent">
                                Talents</span>
                        </h2>
                        <p class="team__about">Our platform showcases a curated collection of highly skilled
                            professionals ready to provide
                            inventive solutions across diverse industries. Harnessing the creative prowess and extensive
                            experience of our talent pool, we offer a spectrum of imaginative solutions tailored to your
                            unique business needs.</p>
                        <ul class="team__list">
                            <li class="team__item">
                                <img src="./img/team/arun.webp" alt="arun">
                                <div class="team__left-part">
                                    <p class="team__name">Arun Prakash</p>
                                    <ul class="teal__list-star">
                                        <li>
                                            <img src="./img/products/star.webp" alt="star" width="13" height="13">
                                        </li>
                                        <li>
                                            <img src="./img/products/star.webp" alt="star" width="13" height="13">
                                        </li>
                                        <li>
                                            <img src="./img/products/star.webp" alt="star" width="13" height="13">
                                        </li>
                                        <li>
                                            <img src="./img/products/star.webp" alt="star" width="13" height="13">
                                        </li>
                                        <li>
                                            <img src="./img/products/star.webp" alt="star" width="13" height="13">
                                        </li>
                                    </ul>
                                </div>
                                <div class="team__last-string">
                                    <p class="team__work">Photographer</p>
                                    <a class="team__link" href="#">View</a>
                                </div>
                            </li>
                            <li class="team__item">
                                <img src="./img/team/adriana.webp" alt="adriana">
                                <div class="team__left-part">
                                    <p class="team__name">Adriana Miller</p>
                                    <ul class="teal__list-star">
                                        <li>
                                            <img src="./img/products/star.webp" alt="star" width="13" height="13">
                                        </li>
                                        <li>
                                            <img src="./img/products/star.webp" alt="star" width="13" height="13">
                                        </li>
                                        <li>
                                            <img src="./img/products/star.webp" alt="star" width="13" height="13">
                                        </li>
                                        <li>
                                            <img src="./img/products/star.webp" alt="star" width="13" height="13">
                                        </li>
                                        <li>
                                            <img src="./img/products/star.webp" alt="star" width="13" height="13">
                                        </li>
                                    </ul>
                                </div>
                                <div class="team__last-string">
                                    <p class="team__work">Software Engineer</p>
                                    <a class="team__link" href="#">View</a>
                                </div>
                            </li>
                            <li class="team__item">
                                <img src="./img/team/rene.webp" alt="rene">
                                <div class="team__left-part">
                                    <p class="team__name">Rene Danilo</p>
                                    <ul class="teal__list-star">
                                        <li>
                                            <img src="./img/products/star.webp" alt="star" width="13" height="13">
                                        </li>
                                        <li>
                                            <img src="./img/products/star.webp" alt="star" width="13" height="13">
                                        </li>
                                        <li>
                                            <img src="./img/products/star.webp" alt="star" width="13" height="13">
                                        </li>
                                        <li>
                                            <img src="./img/products/star.webp" alt="star" width="13" height="13">
                                        </li>
                                        <li>
                                            <img src="./img/products/star.webp" alt="star" width="13" height="13">
                                        </li>
                                    </ul>
                                </div>
                                <div class="team__last-string">
                                    <div>
                                        <p class="team__work">Financial Advisor</p>
                                    </div>
                                    <div>
                                        <a class="team__link" href="#">View</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <button class="team__btn">View All Talents</button>
                    </li>
                    <li class="team__block-right">
                        <div class="backdrop__wrapper">
                            <img class="team__img-big" src="./img/team/elizabeth.webp" alt="elizabeth">
                            <div class="backdrop">
                                <div class="statistic">
                                    <ul class="statistic__list">
                                        <li class="statistic__item">
                                            <div>7</div>
                                            <div>Years of work experience</div>
                                        </li>
                                        <li class="statistic__item">
                                            <div>50+</div>
                                            <div>Completed projects</div>
                                        </li>
                                        <li class="statistic__item">
                                            <div>20+</div>
                                            <div>Satisfied customers</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team__left-part">
                            <div>
                                <p class="team__name-main">Elizabeth Smith</p>
                            </div>
                            <div>
                                <ul class="teal__list-star">
                                    <li>
                                        <img src="./img/products/star.webp" alt="star" width="22" height="22">
                                    </li>
                                    <li>
                                        <img src="./img/products/star.webp" alt="star" width="22" height="22">
                                    </li>
                                    <li>
                                        <img src="./img/products/star.webp" alt="star" width="22" height="22">
                                    </li>
                                    <li>
                                        <img src="./img/products/star.webp" alt="star" width="22" height="22">
                                    </li>
                                    <li>
                                        <img src="./img/products/star.webp" alt="star" width="22" height="22">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team__last-string">
                            <div>
                                <p class="team__work-main">Administrator</p>
                            </div>
                            <div>
                                <a class="team__link-main" href="#">View</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="projects">
            <div class="container">
                <h2 class="projects__main">Over 4000+ Different Businesses in the <span
                        class="accent">Marketplace</span> </h2>
                <div class="products__divider">
                </div>
                <h3 class="projects__about">Our marketplace offers a diverse tapestry of industries – from tech titans
                    to manufacturing pioneers, creative agencies to healthcare innovators – we provide a centralized hub
                    for discovering, connecting, and conducting business. Join us now in this expansive business
                    marketplace</h3>
                <ul class="projects__list">
                    <li class="projects__item">
                        <img src="./img/projects/software.webp" alt="Software and IT">
                        <p class="projects__name">Software and IT</p>
                    </li>
                    <li class="projects__item">
                        <img src="./img/projects/estate.webp" alt="Real Estate">
                        <p class="projects__name">Real Estate</p>
                    </li>
                    <li class="projects__item">
                        <img src="./img/projects/design.webp" alt="Design">
                        <p class="projects__name">Design</p>
                    </li>
                    <li class="projects__item">
                        <img src="./img/projects/manufacturing.webp" alt="Manufacturing">
                        <p class="projects__name">Manufacturing</p>
                    </li>
                    <li class="projects__item">
                        <img src="./img/projects/administration.webp" alt="Public Administration">
                        <p class="projects__name">Public Administration</p>
                    </li>
                    <li class="projects__item">
                        <img src="./img/projects/books.webp" alt="Education">
                        <p class="projects__name">Education</p>
                    </li>
                    <li class="projects__item">
                        <img src="./img/projects/finance.webp" alt="Finance">
                        <p class="projects__name">Finance</p>
                    </li>
                    <li class="projects__item">
                        <img src="./img/projects/crypto.webp" alt="Crypto">
                        <p class="projects__name">Crypto</p>
                    </li>
                    <li class="projects__item">
                        <img src="./img/projects/arts.webp" alt="Arts">
                        <p class="projects__name">Arts</p>
                    </li>
                    <li class="projects__item">
                        <img src="./img/projects/construction.webp" alt="Construction">
                        <p class="projects__name">Construction</p>
                    </li>
                    <li class="projects__item">
                        <img src="./img/projects/network.webp" alt="Hardware and Networking">
                        <p class="projects__name">Hardware and Networking</p>
                    </li>
                    <li class="projects__item">
                        <img src="./img/projects/legal.webp" alt="Legal">
                        <p class="projects__name">Legal</p>
                    </li>
                    <li class="projects__item">
                        <img src="./img/projects/transport.webp" alt="Transportation and Logistics">
                        <p class="projects__name">Transportation and Logistics</p>
                    </li>
                    <li class="projects__item">
                        <img src="./img/projects/healthcare.webp" alt="Health Care">
                        <p class="projects__name">Health Care</p>
                    </li>
                    <li class="projects__item">
                        <img src="./img/projects/energy.webp" alt="Energy and Mining">
                        <p class="projects__name">Energy and Mining</p>
                    </li>
                    <li class="projects__item">
                        <img src="./img/projects/safety.webp" alt="Public Safety">
                        <p class="projects__name">Public Safety</p>
                    </li>
                    <li class="projects__item">
                        <img src="./img/projects/web.webp" alt="Web3">
                        <p class="projects__name">Web3</p>
                    </li>
                    <li class="projects__item">
                        <img src="./img/projects/enterteiment.webp" alt="Entertainment">
                        <p class="projects__name">Entertainment</p>
                    </li>
                    <li class="projects__item">
                        <img src="./img/projects/media.webp" alt="Media and Communications">
                        <p class="projects__name">Media and Communications</p>
                    </li>
                    <li class="projects__item">
                        <img src="./img/projects/retail.webp" alt="Retail">
                        <p class="projects__name">Retail</p>
                    </li>
                </ul>
                <button class="projects__btn">View Marketplace</button>
            </div>
        </section>
        <section class="products">
            <div class="container">
                <h2 class="products__main">Buy, Sell and Create Your <span class="accent">Business Products</span> </h2>
                <h3 class="products__about">Join the marketplace where every transaction is a chance to build your
                    unique business portfolio and discover new avenues for investment and creativity</h3>
                <div class="products__divider">
                </div>
                <ul class="products__list">
                    <li class="products__item">
                        <img src="./img/products/green.webp" alt="green fon">
                        <div class="products__second-part-top">
                            <div class="products__item-top">
                                <div class="products__item-top">
                                    <img class="products__avatar" src="./img/products/people/mark.webp" alt="mark"
                                        width="36" height="36">
                                    <div>
                                        <h4 class="products__name">Mark Russo</h4>
                                        <div class="products__wrapper">
                                            <ul class="products__stars">
                                                <li>
                                                    <img src="./img/products/star.webp" alt="star" width="16"
                                                        height="16">
                                                </li>
                                                <li>
                                                    <img src="./img/products/star.webp" alt="star" width="16"
                                                        height="16">
                                                </li>
                                                <li>
                                                    <img src="./img/products/star.webp" alt="star" width="16"
                                                        height="16">
                                                </li>
                                                <li>
                                                    <img src="./img/products/star.webp" alt="star" width="16"
                                                        height="16">
                                                </li>
                                                <li>
                                                    <img src="./img/products/star.webp" alt="star" width="16"
                                                        height="16">
                                                </li>
                                            </ul>
                                            <div class="products__feedback">
                                                (55)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img src="./img/products/heartlove.webp" alt="heart">
                                </div>
                            </div>
                            <p class="products__about">Green screen (82.6”x59.9”) for sale with stand height of 75”
                                total
                            </p>
                            <div class="products__bottom-card">
                                <div class="products__price">
                                    $599.99
                                </div>
                                <button class="products__btn">View</button>
                            </div>
                        </div>
                    </li>


                    <li class="products__item">
                        <img src="./img/products/white.webp" alt="white fon">
                        <div class="products__second-part-top">
                            <div class="products__item-top">
                                <div class="products__item-top">
                                    <img class="products__avatar" src="./img/products/people/ethan.webp" alt="ethan"
                                        width="36" height="36">
                                    <div>
                                        <h4 class="products__name">Ethan Sullivan</h4>
                                        <div class="products__wrapper">
                                            <ul class="products__stars">
                                                <li>
                                                    <img src="./img/products/star.webp" alt="star" width="16"
                                                        height="16">
                                                </li>
                                                <li>
                                                    <img src="./img/products/star.webp" alt="star" width="16"
                                                        height="16">
                                                </li>
                                                <li>
                                                    <img src="./img/products/star.webp" alt="star" width="16"
                                                        height="16">
                                                </li>
                                                <li>
                                                    <img src="./img/products/star.webp" alt="star" width="16"
                                                        height="16">
                                                </li>
                                                <li>
                                                    <img src="./img/products/star.webp" alt="star" width="16"
                                                        height="16">
                                                </li>
                                            </ul>
                                            <div class="products__feedback">
                                                (139)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img src="./img/products/heart.webp" alt="heart">
                                </div>
                            </div>
                            <p class="products__about">Ad space for sale near bus station King Edwards Street</p>
                            <div class="products__bottom-card">
                                <div class="products__price">
                                    $599.99
                                </div>
                                <button class="products__btn">View</button>
                            </div>
                        </div>
                    </li>
                    <li class="products__item">
                        <img src="./img/products/camera.webp" alt="camera fon">
                        <div class="products__second-part-top">
                            <div class="products__item-top">
                                <div class="products__item-top">
                                    <img class="products__avatar" src="./img/products/people/mark.webp" alt="mark"
                                        width="36" height="36">
                                    <div>
                                        <h4 class="products__name">Mark Russo</h4>
                                        <div class="products__wrapper">
                                            <ul class="products__stars">
                                                <li>
                                                    <img src="./img/products/star.webp" alt="star" width="16"
                                                        height="16">
                                                </li>
                                                <li>
                                                    <img src="./img/products/star.webp" alt="star" width="16"
                                                        height="16">
                                                </li>
                                                <li>
                                                    <img src="./img/products/star.webp" alt="star" width="16"
                                                        height="16">
                                                </li>
                                                <li>
                                                    <img src="./img/products/star.webp" alt="star" width="16"
                                                        height="16">
                                                </li>
                                                <li>
                                                    <img src="./img/products/star.webp" alt="star" width="16"
                                                        height="16">
                                                </li>
                                            </ul>
                                            <div class="products__feedback">
                                                (55)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img src="./img/products/heart.webp" alt="heart">
                                </div>
                            </div>
                            <p class="products__about">Offering professional headshot services (1 Session, 3 Shots)</p>
                            <div class="products__bottom-card">
                                <div class="products__price">
                                    $599.99
                                </div>
                                <button class="products__btn">View</button>
                            </div>
                        </div>
                    </li>
                    <li class="products__item">
                        <img src="./img/products/magnefon.webp" alt="magnefon fon">
                        <div class="products__second-part-top">
                            <div class="products__item-top">
                                <div class="products__item-top">
                                    <img class="products__avatar" src="./img/products/people/ethan.webp" alt="ethan"
                                        width="36" height="36">
                                    <div>
                                        <h4 class="products__name">Ethan Sullivan</h4>
                                        <div class="products__wrapper">
                                            <ul class="products__stars">
                                                <li>
                                                    <img src="./img/products/star.webp" alt="star" width="16"
                                                        height="16">
                                                </li>
                                                <li>
                                                    <img src="./img/products/star.webp" alt="star" width="16"
                                                        height="16">
                                                </li>
                                                <li>
                                                    <img src="./img/products/star.webp" alt="star" width="16"
                                                        height="16">
                                                </li>
                                                <li>
                                                    <img src="./img/products/star.webp" alt="star" width="16"
                                                        height="16">
                                                </li>
                                                <li>
                                                    <img src="./img/products/star.webp" alt="star" width="16"
                                                        height="16">
                                                </li>
                                            </ul>
                                            <div class="products__feedback">
                                                (139)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img src="./img/products/heartlove.webp" alt="heartlove">
                                </div>
                            </div>
                            <p class="products__about">Office networking gear (Includes Lan installation) for sale</p>
                            <div class="products__bottom-card">
                                <div class="products__price">
                                    $799.99
                                </div>
                                <button class="products__btn">View</button>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="products__btn-second-main">
                    <button class="products__btn-second">View Listings</button>
                </div>
            </div>
        </section>
        <section class="feedback">
            <div class="container">
                <div class="feedback__together">
                    <div class="feedback__content">
                        <h3 class="feedback__title">Powering the growth of 4000+ business & retailers around the globe.
                        </h3>
                        <p class="feedback__text">From single store, startups, to large multi-store brands.</p>
                    </div>
                    <div class="feedback__card">
                        <ul class="feedback__stars">
                            <li>
                                <img src="./img/products/star.webp" alt="star" width="18" height="18">
                            </li>
                            <li>
                                <img src="./img/products/star.webp" alt="star" width="18" height="18">
                            </li>
                            <li>
                                <img src="./img/products/star.webp" alt="star" width="18" height="18">
                            </li>
                            <li>
                                <img src="./img/products/star.webp" alt="star" width="18" height="18">
                            </li>
                            <li>
                                <img src="./img/products/star.webp" alt="star" width="18" height="18">
                            </li>
                        </ul>
                        <p class="feedback__bottom">“With Toil we were able to find the right resources to grow our
                            business. It’s become an essential tool for us to grow and engage with our audience.”</p>
                        <div class="feedback__group">
                            <img src="./img/products/people/ethan.webp" alt="ethan" width="56" height="56">
                            <div>
                                <h4 class="feedback__name">Ethan Sullivan</h4>
                                <h5 class="feedback__work">CEO, Cubicle INC</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="banner">
            <div class="container">
                <div>
                    <div class="banner__content">
                        <div>
                            <h2 class="banner__title">Grow your business and showcase your products</h2>
                            <p class="banner__text">Join with more 10,000+ happy clients</p>
                            <div class="banner__group-logo">
                                <img src="./img/banner/grouplogo.webp" alt="group" width="137" height="37">
                                <a class="banner__link" href="#">and others</a>
                            </div>
                        </div>
                        <div class="banner__bottom">
                            <button class="banner__btn">Start Now</button>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <div class="footer__main">
                <div>
                    <h5 class="footer__name">About</h5>
                    <ul class="footer__list">
                        <li>
                            <a>Careers</a>
                        </li>
                        <li>
                            <a>About Us</a>
                        </li>
                        <li>
                            <a>Partnerships</a>
                        </li>
                        <li>
                            <a>Privacy Policy</a>
                        </li>
                        <li>
                            <a>Terms of Service</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h5 class="footer__name">Resources</h5>
                    <ul class="footer__list">
                        <li>
                            <a>Advertising</a>
                        </li>
                        <li>
                            <a>Guides and Tutorials</a>
                        </li>
                        <li>
                            <a>Become a Seller</a>
                        </li>
                        <li>
                            <a>Community</a>
                        </li>
                        <li>
                            <a>Blogs</a>
                        </li>
                        <li>
                            <a>Downloads</a>
                        </li>
                        <li>
                            <a>FAQs</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h5 class="footer__name">Academy</h5>
                    <ul class="footer__list">
                        <li>
                            <a>Courses</a>
                        </li>
                        <li>
                            <a>Tutorials</a>
                        </li>
                        <li>
                            <a>User Resources</a>
                        </li>
                        <li>
                            <a>Events & Webinars</a>
                        </li>
                        <li>
                            <a>Feedback and Surveys</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h5 class="footer__name">Explore</h5>
                    <ul class="footer__list">
                        <li>
                            <a>Categories</a>
                        </li>
                        <li>
                            <a>Featured Products</a>
                        </li>
                        <li>
                            <a>Discover New</a>
                        </li>
                        <li>
                            <a>Trending</a>
                        </li>
                        <li>
                            <a>Marketplace</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h5 class="footer__name">Support</h5>
                    <ul class="footer__list">
                        <li>
                            <a>Help & Support</a>
                        </li>
                        <li>
                            <a>Selling on Toil</a>
                        </li>
                        <li>
                            <a>Buying on Toil</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h5 class="footer__name">Dev Support</h5>
                    <ul class="footer__list">
                        <li>
                            <a>Tools and Utilities</a>
                        </li>
                        <li>
                            <a>API Documentation</a>
                        </li>
                        <li>
                            <a>Code Libraries</a>
                        </li>
                        <li>
                            <a>Security</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer__divider">
            </div>
            <div class="footer__bottom">
                <div class="footer__left">
                    <img src="./img/footer/logo.webp" height="24" alt="logo">
                    <div class="footer__text">©2023 Toil. All rights reserved</div>
                </div>

                <div class="footer__right">
                    <ul class="footer__logo">
                        <li class="footer__item">
                            <img src="./img/footer/facebook.webp" alt="facebook">
                        </li>
                        <li class="footer__item">
                            <img src="./img/footer/instagram.webp" alt="instagram">
                        </li>
                        <li class="footer__item">
                            <img src="./img/footer/youtube.webp" alt="youtube">
                        </li>
                    </ul>
                    <input class="footer__input" type="email" placeholder="Enter Your Email">
                    <button class="footer__btn">Subscribe</button>

                </div>
            </div>
        </div>
    </footer>

</body>

</html>