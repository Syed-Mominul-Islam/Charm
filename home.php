<!-- index.php -->
<?php include 'global/header.php'; ?> 

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="images/Banner/Untitled-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Water Treatment Plant</h1>
                            <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="images/Banner/Untitled-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Sewage Treatment Plant</h1>
                            <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="images/Banner/Untitled-3.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Effluent Treatment Plant</h1>
                            <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Facts Start -->
    <div class="container-fluid facts py-2 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Number Of Completed Project</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">53</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Number Of Ongoing Project</h5>
                            <h1 class="mb-0" data-toggle="counter-up">9</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Number Of Government Project</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">20</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Number Of Private Project</h5>
                            <h1 class="mb-0" data-toggle="counter-up">42</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->

    <!-- About Start -->
    <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-2">
            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">The Best Solution With 10 Years of Experience</h1>
                    </div>
                    <p style="text-align: justify;" class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati hic facere magni minus quos quibusdam perferendis rem unde adipisci animi eveniet, quod temporibus! Molestiae ipsa accusamus nemo sed blanditiis voluptates eum totam dolor numquam dignissimos, est cupiditate ipsum nesciunt incidunt molestias facilis doloribus aliquam quia aperiam! Culpa cupiditate eligendi nostrum maxime! Ea voluptatum quasi accusantium harum minima nobis facilis perspiciatis, culpa ratione, rerum minus fugiat nulla laborum error ipsum nemo at obcaecati quod nisi sit eos blanditiis! Necessitatibus eligendi quo modi, aliquam odio ad dicta ex, a fuga reiciendis nemo earum suscipit quas est id laboriosam animi, deleniti omnis eum!</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Award Winning</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Request A Quote</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="images/800-800.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
   <!-- Team Start -->
    <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Products</h5>
                <h1 class="mb-0">Our Products</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/500-350.jpg" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Product 1</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/500-350.jpg" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Product 2</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/500-350.jpg" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Product 3</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/500-350.jpg" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Product 4</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/500-350.jpg" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Product 5</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/500-350.jpg" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Product 6</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
  <!-- Blog Start -->
    <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Service</h5>
                <h1 class="mb-0">Our Service</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="images/banner/1.webp" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">STP</a>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Sewage Treatment Plant</h4>
                            <a class="text-uppercase" href="">Learn More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="images/banner/6.webp" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">ST</a>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Sludge Treatment</h4>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="images/banner/5.webp" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">CW</a>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Construction Work</h4>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="images/banner/4.webp" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">RES</a>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Renewable Energy System (RES)</h4>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="images/banner/2.webp" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">ETP</a>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">EFFLUENT TREATMENT PLANT</h4>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="images/banner/3.webp" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">WTP</a>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">WATER TREATMENT PLANT</h4>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
  
            </div>
        </div>
    </div>
    <!-- Blog Start -->
    <!-- Features Start -->
    <!-- <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Highlighted Project</h5>
                <h1 class="mb-0">Highlighted Project</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-5  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/800-800.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <h4>About Project</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. A debitis molestiae aut laudantium voluptatum fuga sit ratione consequuntur ex quidem. Illo sed labore consequatur ex inventore quisquam quo, quidem dicta? Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. A debitis molestiae aut laudantium voluptatum fuga sit ratione consequuntur ex quidem. Illo sed labore consequatur ex inventore quisquam quo, quidem dicta? Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Features Start -->
    <!-- Highlighted Project -->
     <style>
        .highlighted-item{
            background: #f1f1f28b;
            padding: 15px;
            border-radius: 5px;
        }
        .highlighted-item p{
            text-align: justify;
        }
     </style>
    <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Project</h5>
                <h1 class="mb-0">Highlighted Project</h1>
            </div>
            <div class="bg-white">
                <div class="owl-carousel highlighted-carousel">
                <div class="highlighted-item">
                    <div class="row g-3">
                        <div class="col-lg-6  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="images/350-450.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row g-5">
                                <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                    <h4>About Project</h4>
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur voluptatibus consectetur, quaerat facere ea delectus tempore aut quod rerum, aliquid incidunt, minima esse qui inventore animi beatae debitis! Nesciunt, quidem! Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="highlighted-item">
                    <div class="row g-3">
                        <div class="col-lg-6  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="images/350-450.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row g-5">
                                <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                    <h4>About Project</h4>
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur voluptatibus consectetur, quaerat facere ea delectus tempore aut quod rerum, aliquid incidunt, minima esse qui inventore animi beatae debitis! Nesciunt, quidem! Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

    <!-- Vendor Start -->
    <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Partner</h5>
                <h1 class="mb-0">Our Global Partner</h1>
            </div>
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="images/logo/Amcon-1-qijiqlf4zh44oe1sjav3zzxx6gjhbnbax7wdg3ttuw.png" alt="">
                    <img src="images/logo/Daiki-AXIS-1-qijiqlf4zh44oe1sjav3zzxx6gjhbnbax7wdg3ttuw.png" alt="">
                    <img src="images/logo/ECOSTERYl-qijiqlf4zh44oe1sjav3zzxx6gjhbnbax7wdg3ttuw.png" alt="">
                    <img src="images/logo/J.A.king_-qijiqlf4zh44oe1sjav3zzxx6gjhbnbax7wdg3ttuw.png" alt="">
                    <img src="images/logo/Lackeby-logo-1-qijiqlf4zh44oe1sjav3zzxx6gjhbnbax7wdg3ttuw.png" alt="">
                    <img src="images/logo/MITSUBISHI-CHEMICAL-qijiqlf4zh44oe1sjav3zzxx6gjhbnbax7wdg3ttuw.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
 <!-- Testimonial Start -->
    <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Clients</h5>
                <h1 class="mb-0">What Our Clients Say About Our Service</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="images/100-100.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="images/100-100.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="images/100-100.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="images/100-100.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <!-- Service Start -->
    <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
                <h1 class="mb-0">Our Guarantee</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">WARRANTY</h4>
                        <p class="m-0">After-sales service warranty is ensured</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3">100% Authentice product</h4>
                        <p class="m-0">We ensure 100% authentic product</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3">Service programs</h4>
                        <p class="m-0">Paid maintenance programs can be offered</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fab fa-android text-white"></i>
                        </div>
                        <h4 class="mb-3">Technical Support</h4>
                        <p class="m-0">Paid technical support for 1 year</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3">Customer service</h4>
                        <p class="m-0">One-stop 24/7 services</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
  <!-- OUR VALUABLE CLIENT START -->
  <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Our Clients</h1>
            </div>
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="images/logo/N-client (1).png" alt="">
                    <img src="images/logo/N-client (2).png" alt="">
                    <img src="images/logo/N-client (3).png" alt="">
                    <img src="images/logo/N-client (4).png" alt="">
                    <img src="images/logo/N-client (5).png" alt="">
                    <img src="images/logo/N-client (6).png" alt="">
                    <img src="images/logo/N-client (7).png" alt="">
                    <img src="images/logo/N-client (8).png" alt="">
                    <img src="images/logo/N-client (9).png" alt="">
                    <img src="images/logo/N-client (10).png" alt="">
                    <img src="images/logo/N-client (11).png" alt="">
                    <img src="images/logo/N-client (12).png" alt="">
                    <img src="images/logo/N-client (13).png" alt="">
                </div>
            </div>
        </div>
    </div>
      <!-- OUR VALUABLE CLIENT END -->
    <!-- <div id="footer"></div> -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


<?php include 'global/footer.php'; ?> 
