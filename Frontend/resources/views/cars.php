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


    <!-- Section  -->
    <section>
        <h1 class="title">Car <span>Listings</span></h1>
        <p class="description">Browse our most popular car listings, featuring top models and great deals from trusted dealers.</p>

        <form action="/search" class="search">
            <input type="text" name="query" id="query" placeholder="Search for cars, dealers, or locations...">
            <button type="submit">Search <span class="material-symbols-outlined">
                    search
                </span></button>
        </form>
        <!-- Listing Grid  -->
        <div class="listing_grid">
            <div class="listing_span">
                <div class="item">
                    <i class="fa-solid fa-car-side"></i> 23 Cars Found
                </div>
                <div class="item">
                    <form action="/">
                        Filter by:
                        <select name="filter" id="filter">
                            <option value="all">All</option>
                            <option value="new">New</option>
                            <option value="used">Used</option>
                            <option value="low">Low Price</option>
                            <option value="high">High Price</option>
                        </select>
                        <button type="submit" class="btn">Apply</button>
                    </form>
                </div>
            </div>

            <div class="listing_error">
                <div class="item"> <i class="fa-solid fa-face-sad-cry"></i>
                    Results not found for <span class="error_query">"BMW"</span></div>

                <div class="item">
                    <a class="btn" href="/">Back</a>
                </div>
            </div>
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