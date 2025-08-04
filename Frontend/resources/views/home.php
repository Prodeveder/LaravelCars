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

    <!-- Hero -->
    <div class="hero">
        <img src="https://images.unsplash.com/photo-1607811386421-a261a5392c73?q=80&w=1332&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">

        <div class="content">
            <h1 class="title">Find Your Dream Car</h1>
            <p class="description">
                Discover a wide range of cars for sale, from luxury vehicles to budget-friendly options. Whether you're looking for a new or used car, we have something for everyone. Start your search today and find the perfect car that fits your lifestyle and budget.
            </p>

            <form action="/search" class="search">
                <input type="text" name="query" id="query" placeholder="Search for cars, dealers, or locations...">
                <button type="submit">Search <span class="material-symbols-outlined">
                        search
                    </span></button>
            </form>
        </div>


    </div>
    <!-- Hero -->

    <!-- Section  -->
    <section>
        <h1 class="title">Popular <span>Cars</span></h1>
        <p class="description">Browse our most popular car listings, featuring top models and great deals from trusted dealers.</p>

        <!-- Listing Grid  -->
        <div class="listing_grid">
            <a href="/Cars/id" class="listing_card">
                <div class="image">
                    <img src="https://images.unsplash.com/photo-1603386329225-868f9b1ee6c9?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    <div class="content">
                        <div class="image_count">
                            <i class="fa-solid fa-image"></i>
                            12
                        </div>
                    </div>
                </div>
                <div class="contents">
                    <div class="price">R250000</div>
                    <div class="title">BMW xi230 iDrive 1.5</div>

                    <div class="stats">
                        <div class="stat">
                            <i class="fa-solid fa-gauge"></i>
                            120000 km
                        </div>
                        <div class="stat">
                            <i class="fa-solid fa-gear"></i>
                            Manuel
                        </div>

                    </div>
                    <div class="stats">
                        <div class="stat">
                            <i class="fa-solid fa-gas-pump"></i>
                            Petrol
                        </div>
                        <div class="stat">
                            <i class="fa-solid fa-car"></i>
                            Used
                        </div>

                    </div>
                </div>
            </a>
        </div>
        <!-- Listing Grid  -->

    </section>
    <!-- Section Car Listing -->


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


    <!-- Section  Dealer Listing -->
    <section>
        <h1 class="title">Popular <span>Dealers</span></h1>
        <p class="description">Explore our top-rated car dealers, known for excellent service and a wide selection of vehicles. Find a trusted dealer near you and start your car buying journey with confidence.</p>

        <!-- Dealer Grid  -->
        <div class="dealer_grid">
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