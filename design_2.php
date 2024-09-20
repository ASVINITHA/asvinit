<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Modern Business - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        /* Add your CSS styling here */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .py-55 {
            background-color: #f0f0f0;
        }
        .py-56 {
            background-color: #DC0F82;
        }
        .py-57 {
            background-color: #000000ce;
            
        }
        .description {
            flex-basis: 50%;
            padding: 20px;
            background-color: #DC0F82;
            color: #ffffff;
        }

        .description h4 {
        margin-bottom: 10px; /* You can adjust this value to control the amount of space */
    }

        .picture {
            padding-top: 40px;
            padding-bottom: 40px;
            flex-basis: 100%;
        }

        .picture img {
            max-width: 100%;
            height: auto;
     
        }

        .picture3 {
            flex-basis: 30%; /* Adjust as needed based on your layout */
            padding: 5px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

      
        /* Container for the cards */
        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px; /* Adjust the gap between cards */
            justify-content: center; /* Center align the cards horizontally */
        }

        /* Individual card styles */
        .card {
            background-color: transparent;
            box-shadow: 0px 10px 9px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            padding: 2px;
            display: flex;
            align-items: center;
            height: 550px; /* Adjusted height for smaller images */
            transition: transform 0.3s ease; /* Add a smooth transition for the transform property */
        }

        /* Automatically zoom in the card when hovered */
        .card:hover img {
            transform: scale(1.1); /* Adjust the zoom factor as needed */
        }

        /* Ensure images don't exceed card dimensions */
        .card img {
            max-width: 100%;
            max-height: 100%;
        }

        /* Style for the arrow buttons */
        .arrow-buttons {
           
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .arrow-button {
            border: none;
            font-size: 24px;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 20px;
        }
        
       /* Add this CSS to your existing styles */
.circles {
    display: flex;
    justify-content: center;
    margin-top: 20px; /* Adjust the margin as needed */
    margin-bottom: 20px; /* Adjust as needed */
}

.circle {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    margin: 0 5px;
    box-shadow: 0 0 0 2px #ffffff; /* Adjust the box-shadow values as needed */
}
     .row {
            display: flex;
        }

        .paragraph {
            color: #fff;
            font-size: 12px;
            text-align: justify;
            flex: 1;
            margin: 10px; /* Add margin for gap */
            padding: 10px;
            /* border: 1px solid #ccc; */
        }
    </style>
</head>
<body class="d-flex flex-column h-100 bg-light">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
            <div class="container px-5">
                <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">Asvinitha M.</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="ui_design.html">UI Designs</a></li>
                        <li class="nav-item"><a class="nav-link" href="projects.html">Projects</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="py-56" style="position: relative;">
            <div class="background-image">
                <!-- Add your background image here -->
                <img src="assets/Frame 7.png" alt="Background Image" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: -1; opacity: 0.6;">
            </div>
        
            <div class="container ">
                <!-- Description -->
                <div class="description">
                    <h4>SecureAuth </h4> 
                    <br>
                    <p style="font-size: 13px; text-align: justify;">"The design I've created draws inspiration from Instagram's authentication design, which serves as a creative foundation for my project. The idea behind this inspiration is to maintain a sense of visual consistency and user familiarity by using a constant color palette across all screens. This approach not only ensures a visually pleasing user experience but also makes the user feel more secure and confident while navigating through the application."</p>
                
                    <div class="circles">
                        <div class="circle" style="  background-color: #000000;"></div>
                        <div class="circle" style="  background-color: #8C8B8B;"></div>
                        <div class="circle" style="  background-color: #FBE2F0"></div>
                        <div class="circle" style="  background-color: #FA4471"></div>
                        <div class="circle" style="  background-color: #DC0F82"></div>
                    </div>
                </div>

                <!-- Picture with Zoom -->
                <div class="picture">
                    <!-- Add your picture here -->
                    <img src="assets/authentication_pic/secure_pic.png" alt="Project Image">
                </div>

            </div>
        </section>
      <section class="py-57">
        <div class="container px-3">
            <!-- Header -->
            <div class="col-lg-10 col-xl-10 col-xxl-8"  style="margin-top: 20px;">
            <h4 class="text-center" style="color: #ffffff;">Enhancing Security</h4>
        
            <!-- Description -->
            <div class="row">
                <div class="paragraph">
                    <p>In today's digital landscape, security has become a paramount concern for users. To address this concern, I've introduced some innovative security features. One notable addition is the "forgot password" functionality, which allows users to reset their passwords through email verification. This feature adds an extra layer of security to the application, safeguarding user data and enhancing the overall user experience.</p>
                </div>
                <div class="paragraph">
                    <p>To visually communicate these concepts, I've incorporated vector images into the design. Vector graphics are a popular choice for illustrating complex processes and ideas because they can be scaled without loss of quality and offer a clean, modern aesthetic. These graphics serve to not only enhance the user interface but also to provide a clear and engaging representation of the security measures in place.</p>
                </div>
                <div class="paragraph">
                    <p>My design is not merely a replica of Instagram's authentication design but rather a unique creation that draws inspiration from it. It prioritizes user familiarity through a consistent color palette, reinforces security with features like email-based password recovery, and leverages vector images to communicate these ideas effectively and aesthetically.</p>
                </div>
            </div>
        </div>
</section>
</section>

<section class="py-5">
<div class="container2">
<div class="row">
    <!-- Arrow Buttons Column -->
    <div class="col-md-1">
        <div class="arrow-buttons">
            <button class="arrow-button" onclick="showPreviousImages()">&#8592;</button>
        </div>
    </div>

    <!-- Image Slider Column -->
    <div class="col-md-10">
<div class="card-container" id="image-slider">
    <!-- Use a loop or add your images manually here -->
    <?php
    $images = [
        "assets/authentication_pic/phone 1.png",
        "assets/authentication_pic/phone 2.png",
        "assets/authentication_pic/phone 3.png",
        "assets/authentication_pic/phone 4.png",
        "assets/authentication_pic/phone 5.png",
        "assets/authentication_pic/phone 6.png"
    ];

    foreach ($images as $image) {
        echo '<div class="card">';
        echo '<img src="' . $image . '" alt="Image">';
        echo '</div>';
    }
    ?>
</div>
</div>
  <!-- Next Button Column -->
  <div class="col-md-1">
        <div class="arrow-buttons">
            <button class="arrow-button" onclick="showNextImages()"> &#8594;</button>
        </div>
    </div>
</div>
</div>

</section>
    </main>
    <!-- Footer-->
    <footer class="bg-white py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <center><div class="col-auto"><div class="small m-0">Copyright &copy; My Portfolio - Asvinitha 2023</div></div></center>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

    <script>
        var currentIndex = 0;
        var cards = document.querySelectorAll('.card');

        function showImages() {
            for (var i = 0; i < cards.length; i++) {
                if (i >= currentIndex && i < currentIndex + 3) {
                    cards[i].style.display = 'block';
                } else {
                    cards[i].style.display = 'none';
                }
            }
        }

        function showNextImages() {
            if (currentIndex + 3 < cards.length) {
                currentIndex += 3;
                showImages();
            }
        }

        function showPreviousImages() {
            if (currentIndex - 3 >= 0) {
                currentIndex -= 3;
                showImages();
            }
        }

        showImages(); // Initial display
    </script>
</body>
</html>
