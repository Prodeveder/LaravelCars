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


    <!-- Section  Dealer Listing -->
    <section>
        <h1 class="title">Popular <span>Dealers</span></h1>
        <p class="description">Explore our top-rated car dealers, known for excellent service and a wide selection of vehicles. Find a trusted dealer near you and start your car buying journey with confidence.</p>

        <!-- Dealer Grid  -->
        <div class="dealer_grid">
            <div class="listing_span">
                <div class="item">
                    <i class="fa-solid fa-warehouse"></i> 13 Dealers Found
                </div>
                <div class="item">
                    <form action="/">
                        Filter by Province:
                        <select name="filter" id="filter">
                            <option value="all">All</option>
                            <option value="gauteng">Gauteng</option>
                            <option value="western_cape">Western Cape</option>
                            <option value="kwazulu_natal">KwaZulu-Natal</option>
                            <option value="eastern_cape">Eastern Cape</option>
                            <option value="limpopo">Limpopo</option>
                            <option value="mpumalanga">Mpumalanga</option>
                            <option value="northern_cape">Northern Cape</option>
                            <option value="free_state">Free State</option>
                        </select>
                        <button type="submit" class="btn">Apply</button>
                    </form>
                </div>
            </div>
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