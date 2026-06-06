<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product card</title>

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="">
    <meta name="keywords"
        content="">
    <link rel="canonical" href="#">

    <!-- Open Graph -->
    <meta property="og:locale" content="en_IN">
    <meta property="og:type" content="website">
    <meta property="og:title" content="">
    <meta property="og:url" content="PAGE_URL">
    <meta property="og:site_name" content="">
    <meta property="og:image" content="#">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="550">
    <meta property="og:description"
        content="">
    <meta name="robots" content="index, follow">

    <?php include_once('assets/includes/links.php') ?>
</head>

<body>



    <!-- Product Section -->
    <section class="product-section py-5">
        <div class="container">
            <div class="product-card">
                <div class="row align-items-center">

                    <!-- Left Side Image -->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card-img">
                            <img src="assets/images/image-product-desktop.jpg"
                                alt="Product Image"
                                class="img-fluid w-100">
                        </div>
                    </div>

                    <!-- Right Side Content -->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="product-content">

                            <span class="product-category">Perfume</span>

                            <h1 class="product-title">
                                Gabrielle Essence Eau De Parfum
                            </h1>

                            <p class="product-description">
                                A floral, solar and voluptuous interpretation composed by
                                Olivier Polge, Perfumer-Creator for the House of CHANEL.
                            </p>

                            <div class="product-price mb-3">
                                <span class="current-price">$149.99</span>
                                <span class="old-price ms-3">$169.99</span>
                            </div>

                            <div class="text-center text-md-start">
                                <button class="btn btn-primary cart-btn">
                                    Add to Cart
                                </button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>


        </div>
    </section>




    <?php include_once('assets/includes/script.php') ?>

</body>

</html>
