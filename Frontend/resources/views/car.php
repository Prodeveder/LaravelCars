<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LaravelCars - Find a car for sale today</title>

    <!-- Css Files -->
    <link rel="stylesheet" href="resources/assets/css/app.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!-- Navbar  -->
    <div class="navbar">
        <div class="item">
            <a href="/" class="brand">
                Laravel<span>Cars</span>
            </a>
            <div class="links">
                <a href="\">Home</a>
                <a href="\Cars">Cars</a>
                <a href="\Dealers">Dealers</a>
                <a href="\About">About</a>
            </div>


        </div>
        <div class="item">
            <div class="links">
                <a href="\register">Create Account</a>
                <p class="divider">|</p>
                <a href="\login">Login</a>
            </div>
        </div>
    </div>
    <!-- Navbar  -->

    <!-- Bread Crumbs -->
    <div class="breadcrumbs">
        <a href="/">Home</a>
        <span class="divider">/</span>
        <a href="/Cars">Cars</a>
        <span class="divider">/</span>
        <a href="/make">Ford</a>
        <span class="divider">/</span>
        <a href="/model">2024 Ford Mustang California Special 5.0 GT Auto</a>
    </div>
    <!-- Bread Crumbs -->

    <!-- Header  -->
    <div class="header">
        <div class="title">2024 Ford Mustang California Special 5.0 GT Auto</div>
        <div class="item">
            <div class="price">R 929 000</div>
            <a href="#" class="btn">Contact Dealer</a>
        </div>
    </div>
    <!-- Header  -->

    <!-- Image  -->
    <div class="image_gallery">
        <div class="main_image">
            <img src="https://img-ik.cars.co.za/ik-seo/carsimages/tr:n-stock_large/10174904/2024-Ford-Mustang-California-Special-50-GT-Auto.jpg?v=4152900612" alt="">
        </div>
        <div class="slide_image">
            <div class="image">
                <img src="https://img-ik.cars.co.za/ik-seo/carsimages/tr:n-stock_large/10174904_5/2024-Ford-Mustang-California-Special-50-GT-Auto.jpg?v=4152900612" alt="">
            </div>

            <div class="image">
                <img src="https://img-ik.cars.co.za/ik-seo/carsimages/tr:n-stock_large/10174904_4/2024-Ford-Mustang-California-Special-50-GT-Auto.jpg?v=4152900612" alt="">
            </div>
        </div>

        <div class="slide_image">
            <div class="image">
                <img src="https://img-ik.cars.co.za/ik-seo/carsimages/tr:n-stock_large/10174904_2/2024-Ford-Mustang-California-Special-50-GT-Auto.jpg?v=4152900612" alt="">
            </div>

            <div class="image">
                <img src="https://img-ik.cars.co.za/ik-seo/carsimages/tr:n-stock_large/10174904_3/2024-Ford-Mustang-California-Special-50-GT-Auto.jpg?v=4152900612" alt="">
            </div>
        </div>
    </div>
    <!-- Image  -->

    <!-- Details -->
    <div class="details">
        <div class="_stats">
            <div class="_stat_list">
                <div class="stat">
                    <p class="main">Used</p>
                </div>

                <div class="stat">
                    <i class="fa-solid fa-calendar"></i>
                    <p>2025</p>
                </div>

                <div class="stat">
                    <i class="fa-solid fa-gauge"></i>
                    <p>120000 km</p>
                </div>
                <div class="stat">
                    <i class="fa-solid fa-gear"></i>
                    <p>Manuel</p>
                </div>
                <div class="stat">
                    <i class="fa-solid fa-gas-pump"></i>
                    <p>Petrol</p>
                </div>

                <div class="stat">
                    <i class="fa-solid fa-brush"></i>
                    <p>Yellow</p>
                </div>
            </div>
            <div class="_description">
                <p>
                    2024 Mustang 5.0L V8 GT – California Special Edition
                    They say that quality never goes out of style. With a signature ebony black and race red script California Special badge, a blacked-out open grille and unique five-spoke painted machined wheels – the California Special stands proud atop the shoulders of giants. Inspired by the 1967 Shelby GT Notchback Coupe prototype.
                </p>
            </div>

        </div>
        <div class="_dealer">
            <h3>Dealer Information</h3>
            <a href="/Dealers/id" class="dealer_card">
                <div class="image">
                    <img src="https://images.unsplash.com/photo-1603386329225-868f9b1ee6c9?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </div>
                <div class="content">
                    <div class="name">BMW Dealership</div>
                    <div class="location">Cape Town, South Africa</div>
                    <div class="cars">
                        <i class="fa-solid fa-car-side"></i>
                        15 Cars Available
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- Details -->

    <!-- Section Brand Listing -->
    <section>
        <h1 class="title">Search by <span>Make</span></h1>
        <p class="description">Select a car make or brand to quickly find vehicles from your favorite manufacturers. Browse listings by popular brands and discover the best deals on models you love.</p>

        <!-- Brand Grid  -->
        <div class="brand_grid">
            <div class="brand_card">
                <img src="https://www.carlogos.org/car-logos/bmw-logo-2020-gray.png" alt="">
                <div class="name">BMW</div>
                <div class="cars">
                    <i class="fa-solid fa-car-side"></i>
                    5 Cars Available
                </div>
            </div>

            <div class="brand_card">
                <img src="https://www.carlogos.org/car-logos/ford-logo-2017-640.png" alt="">
                <div class="name">Ford</div>
                <div class="cars">
                    <i class="fa-solid fa-car-side"></i>
                    11 Cars Available
                </div>
            </div>

            <div class="brand_card">
                <img src="https://www.carlogos.org/logo/Mercedes-Benz-logo-2011-640x369.jpg" alt="">
                <div class="name">Mercedes-Benz</div>
                <div class="cars">
                    <i class="fa-solid fa-car-side"></i>
                    9 Cars Available
                </div>
            </div>

            <div class="brand_card">
                <img src="https://www.carlogos.org/logo/Volkswagen-logo-2019-640x500.jpg" alt="">
                <div class="name">Volkswagen</div>
                <div class="cars">
                    <i class="fa-solid fa-car-side"></i>
                    15 Cars Available
                </div>
            </div>
        </div>

    </section>
    <!-- Section  -->



    <!-- Footer  -->
    <Footer>

        <div class="item">
            <a href="/" class="brand">
                Laravel<span>Cars</span>
            </a>
            <p>© Copyright 2025 LaravelCars</p>
        </div>
        <div class="item">
            <a href="/Cars" class="btn">Discover Cars</a>
        </div>
    </Footer>
    <!-- Footer  -->
</body>

</html>