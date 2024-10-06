<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description"
        content="Fitness is your premier gym offering personalized workout plans, top-tier equipment, and expert trainers to help you achieve your health goals. Join us today!">

    <!-- Keywords for SEO  -->
    <meta name="keywords"
        content="gym, fitness, workout, personal training, health, wellness, gym membership, exercise, weight training, cardio, fitness classes">

    <!-- Author of the page -->
    <meta name="author" content="Fitness Gym | Angel Jansi">

    <!-- Open Graph Meta Tags  -->
    <meta property="og:title" content="Fitness - Your Ultimate Gym for Health & Wellness">
    <meta property="og:description"
        content="Join Fitness Gym for personalized workout plans, expert trainers, and top-tier equipment. Elevate your fitness journey with us.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.fitnessgym.com">
    <meta property="og:image" content="http://www.fitnessgym.com/images/gym-banner.jpg">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Fitness - Your Ultimate Gym for Health & Wellness">
    <meta name="twitter:description"
        content="Join Fitness Gym for personalized workout plans, expert trainers, and top-tier equipment. Elevate your fitness journey with us.">
    <meta name="twitter:image" content="http://www.fitnessgym.com/images/gym-banner.jpg">

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "HealthClub",
          "name": "Fitness",
          "description": "Fitness is your local gym offering workout plans, fitness classes, and personal training for all levels.",
          "url": "http://www.fitnessgym.com",
          "telephone": "+1-800-555-5555",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "98 nehru high road",
            "addressLocality": "Chennai",
            "addressRegion": "TN",
            "postalCode": "600115",
            "addressCountry": "IN"
          },
          "openingHours": "Mo-Su 06:00-22:00",
          "image": "http://www.fitnessgym.com/images/gym-photo.jpg",
          "priceRange": "$$",
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": "40.712776",
            "longitude": "-74.005974"
          }
        }
        </script>

    <link rel="canonical" href="http://www.fitnessgym.com/">



    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

   
    <!-- Header Section Begin -->
    <?php
    include'header.php';
    ?>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span>Shape your body at Fitness Gym</span>
                                <h1>Be <strong>strong</strong> with hard training</h1>
                                <a href="contact.html" class="primary-btn">Get info now</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span>Push your limits</span>
                                <h1>Unlock <strong>power</strong> with intense workouts</h1>
                                <a class="primary-btn">Join us now</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- ChoseUs Section Begin -->
    <?php
    include'choose_section.php';
    ?>
    <!-- ChoseUs Section End -->

    <!-- Classes Section Begin -->
    <?php
    include'class_section.php';
    ?>
    <!-- ChoseUs Section End -->

    <!-- Banner Section Begin -->
    <?php
    include'banner_section.php';
    ?>
    <!-- Banner Section End -->


    <!-- Pricing Section Begin -->
    <?php
    include'pricing_section.php';
    ?>
    <!-- Pricing Section End -->

    <!-- Gallery Section Begin -->
    <?php
    include'gallery.php';
    ?>
    <!-- Gallery Section End -->

    <!-- Team Section Begin -->
    <?php
    include'team.php';
    ?>
    <!-- Team Section End -->

  

    <!-- Footer Section Begin -->
    <?php
    include'footer.php';
    ?>
    <!-- Footer Section End -->

    

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>