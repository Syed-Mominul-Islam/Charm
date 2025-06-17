<?php include 'global/header.php'; ?> 
   <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 h-75" src="images/1660-600.jpg" alt="Image">
                </div>
                <div class="carousel-item">
                    <img class="w-100  h-75" src="images/1660-600.jpg" alt="Image">
                </div>
                <div class="carousel-item">
                    <img class="w-100 h-75" src="images/1660-600.jpg" alt="Image">
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

 <!-- Full Screen Search Start -->
 <!-- <div class="modal fade" id="searchModal" tabindex="-1">
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
    </div> -->
    <!-- Full Screen Search End -->
    <style>
        .message p{
            text-align:justify;
            font-size:20px;
        }
        .message img{
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            position: absolute;
            bottom: 50px;
            left: 0;
        }
    </style>
    <!-- About Charm Start -->
    <div class="message container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About</h5>
                        <h1 class="mb-0">About Charm</h1>
                    </div>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam consectetur eum harum magni unde illo repellat voluptates nihil modi quibusdam quasi at ex molestias facilis dignissimos asperiores ea, quaerat, cumque voluptatem labore quo! Molestiae sequi esse vitae similique dignissimos exercitationem magnam quas inventore quo harum nostrum reprehenderit, ab atque quam!</p>
                    <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut voluptates distinctio quidem facere. Cum quae fugit amet numquam! Non iure cumque architecto quod rem quaerat totam atque quidem neque nisi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam consectetur eum harum magni unde illo repellat voluptates nihil modi quibusdam quasi at ex molestias facilis dignissimos asperiores ea, quaerat, cumque voluptatem labore quo! Molestiae sequi esse vitae similique dignissimos exercitationem magnam quas inventore quo harum nostrum reprehenderit, ab atque quam!</p>
                </div>
                <div class="col-lg-4" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 rounded wow zoomIn" data-wow-delay="0.9s" src="images/800-800.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Charm end -->
     
    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Our Mission & Vision</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/500-250.jpg" alt="">
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Our Mission</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta aliquam quia laudantium ea autem. Id debitis veritatis natus accusantium iste. Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            
                            <details>
                                <summary class="text-uppercase" style="display: inline; cursor: pointer;">
                                    Read More <i class="bi bi-arrow-right"></i>
                                </summary>
                                <div class="mt-2">
                                    <p>Additional content goes here. This appears when "Read More" is clicked.</p>
                                    <p>You can add more paragraphs or any other HTML content here.</p>
                                </div>
                            </details>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/500-250.jpg" alt="">
                        </div>
                        <div class="p-4">
                                <h4 class="mb-3">Our Vision</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta aliquam quia laudantium ea autem. Id debitis veritatis natus accusantium iste. Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                                
                                <details>
                                    <summary class="text-uppercase" style="display: inline; cursor: pointer;">
                                        Read More <i class="bi bi-arrow-right"></i>
                                    </summary>
                                    <div class="mt-2">
                                        <p>Additional content goes here. This appears when "Read More" is clicked.</p>
                                        <p>You can add more paragraphs or any other HTML content here.</p>
                                    </div>
                                </details>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Start -->
    <!-- Chairman Message Start -->
    <div class="message container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Chairman</h5>
                        <h1 class="mb-0">Abul Mansur Ahmed</h1>
                    </div>
                    <p class="mb-4">Abul Mansur Ahmed, a dedicated humanitarian and accomplished Chartered Accountant, currently serves as Chairman at CHARM Ltd. With a strong foundation in academic excellence, he completed the Chartered Accountancy Course in 1984. Abul Mansur Ahmed’s illustrious career has seen him hold influential positions at Pioneer Group, where he serves as Chairman & Managing Director, as well as in Doel Group of Industries as Executive Director & Technical Advisor. His entrepreneurial spirit shines through as the Founder General Manager & Director of Apex Spinning & Knitting Ind. Ltd. Beyond business, Abul Mansur Ahmed leads CHARM Ltd., a visionary endeavor aimed at addressing Bangladesh’s environmental challenges through sustainable solutions, setting global standards in water and wastewater treatment.</p>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 rounded wow zoomIn" data-wow-delay="0.9s" src="images/img/chairman.webp" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-12">
                    <h2>OUR CHAIRMAN'S MESSEGE</h2>
                    <p>It is my pleasure to introduce Charm Ltd which was established in 2013. We are specialize for water treatment system , Architecture and building service sectors. Our engineering and consulting service range from planning and feasibility studies to detailed design, construction ,project management ,training and post construction operational and maintenance assistance.</p>
                    <p>Charm Ltd continues to provide progressive, professional, practical and forward thinking engineering and consulting service as well as offers straight-forward, costeffective solutions. We brings dedication, commitment, and innovation to our clients that exceed their expectations for service, quality, and value. We strive to build and maintain strong long-term relationships with our clients, staffs and communities-based on trust, integrity and respect.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Chairman Message end -->
    <!-- Chairman Message end -->
    <div class="message container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Managing Director</h5>
                        <h1 class="mb-0">Major Md Shafiqul Islam (Retd.)</h1>
                    </div>
                    <p class="mb-4">An Industrialist, Environmentalist, Entrepreneur, and Retired Army person MD SHAFIQUL ISLAM founded Charm Ltd. in 2013. In the early years, he gained valuable experience and become expert in Engineering sector by being involved in the ETP, STP, WTP, MBR technology related environmental works. He is a successful environmental engineer, and completed different courses regarding this field with a great achievement. He is directly engaged with Mitsubishi Chemicals, Sumitomo Electronics as consultant about STP, ETP, WTP. He played a major role in introducing Jhokasou technology around all over Bangladesh.</p>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 rounded wow zoomIn" data-wow-delay="0.9s" src="images/img/Director.webp" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-12">
                    <h2>Managing Director's Message</h2>
                    <p>It is my pleasure to introduce Charm Ltd which was established in 2013. We are specialize for water treatment system , Architecture and building service sectors. Our engineering and consulting service range from planning and feasibility studies to detailed design, construction ,project management ,training and post construction operational and maintenance assistance.</p>
                    <p>Charm Ltd continues to provide progressive, professional, practical and forward thinking engineering and consulting service as well as offers straight-forward, costeffective solutions. We brings dedication, commitment, and innovation to our clients that exceed their expectations for service, quality, and value. We strive to build and maintain strong long-term relationships with our clients, staffs and communities-based on trust, integrity and respect.</p>
                </div>

            </div>
        </div>
    </div>
    <!-- Chairman Message end -->

    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Who We are</h5>
                <h1 class="mb-0">Our Team Member </h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/400-300.jpg" alt="">
                        </div>
                        <div class="text-center py-3">
                            <h4 class="text-primary">Ataul Karim Khan</h4>
                            <p class="text-uppercase m-0">AGM</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/400-300.jpg" alt="">
                        </div>
                        <div class="text-center py-3">
                            <h4 class="text-primary">Syed Mahbub Shobhan</h4>
                            <p class="text-uppercase m-0">Asst. Marketing Officer</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/400-300.jpg" alt="">
                        </div>
                        <div class="text-center py-3">
                           <h4 class="text-primary">Mehedi Hasan</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/400-300.jpg" alt="">
                        </div>
                        <div class="text-center py-3">
                      <h4 class="text-primary">Mominul Islam</h4>
                            <p class="text-uppercase m-0">Software Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/400-300.jpg" alt="">
                        </div>
                        <div class="text-center py-3">
                      <h4 class="text-primary">Rumman Sultana</h4>
                            <p class="text-uppercase m-0">Jr. Architect</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/400-300.jpg" alt="">
                        </div>
                        <div class="text-center py-3">
                            <h4 class="text-primary">Md. Nasir Uddin</h4>
                            <p class="text-uppercase m-0">Project  Engr</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/400-300.jpg" alt="">
                        </div>
                        <div class="text-center py-3">
                            <h4 class="text-primary">Saroar Hossen</h4>
                            <p class="text-uppercase m-0">Intern</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/400-300.jpg" alt="">
                        </div>
                        <div class="text-center py-3">
                            <h4 class="text-primary">Md. Ashik Mahmud</h4>
                            <p class="text-uppercase m-0">Technical Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/400-300.jpg" alt="">
                        </div>
                        <div class="text-center py-3">
                            <h4 class="text-primary">Hedayedetul Islam</h4>
                            <p class="text-uppercase m-0">Intern</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/400-300.jpg" alt="">
                        </div>
                        <div class="text-center py-3">
                            <h4 class="text-primary">Mohammad Shibli Noman</h4>
                            <p class="text-uppercase m-0">Intern</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/400-300.jpg" alt="">
                        </div>
                        <div class="text-center py-3">
                            <h4 class="text-primary">Nabil Ibne Noman</h4>
                            <p class="text-uppercase m-0">Senior Engineer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/400-300.jpg" alt="">
                        </div>
                        <div class="text-center py-3">
                            <h4 class="text-primary">Kazi Abir</h4>
                            <p class="text-uppercase m-0">Maintenance supervisor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/400-300.jpg" alt="">
                        </div>
                        <div class="text-center py-3">
                            <h4 class="text-primary">Md. Moniruzzan</h4>
                            <p class="text-uppercase m-0">Purchase Officer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/400-300.jpg" alt="">
                        </div>
                        <div class="text-center py-3">
                            <h4 class="text-primary">Sazzad Hossen</h4>
                            <p class="text-uppercase m-0">Intern</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/400-300.jpg" alt="">
                        </div>
                        <div class="text-center py-3">
                            <h4 class="text-primary">Tamanna Binte Faruque Nawme</h4>
                            <p class="text-uppercase m-0">Intern</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/400-300.jpg" alt="">
                        </div>
                        <div class="text-center py-3">
                            <h4 class="text-primary">Arif Ahmad Adil</h4>
                            <p class="text-uppercase m-0">Intern</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/400-300.jpg" alt="">
                        </div>
                        <div class="text-center py-3">
                            <h4 class="text-primary">Tahura Sharmin</h4>
                            <p class="text-uppercase m-0">Intern</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

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
    <?php include 'global/footer.php'; ?> 