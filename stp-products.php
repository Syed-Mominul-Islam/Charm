<?php include 'global/header.php'; ?> 
    <div class="container-fluid py-5 stp-products-banner">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center content">
                <h1 class="display-4 text-white animated zoomIn">STP Products </h1>
                <a href="home.php" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="#" class="h5 text-white">Decoloring</a>
            </div>
        </div>
    </div>
<style>
/* ================= Deader banner start =============== */
.stp-products-banner {
        position: relative;
        background-image: url('images/1660-600.jpg');
        height: 600px;
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
}
.stp-products-banner::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: rgba(0, 0, 0, 0.5); /* Dark shade with 50% opacity */
        z-index: 1;
}
.stp-products-banner .content {
        position: relative;
        z-index: 2; /* Ensure content appears above the overlay */
}
/* ================= Deader banner end =============== */
</style>
<div class="container-fluid py-5">
        <div class="container">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">Our STP Products</h1>
        </div>
        <div class="mb-5" style="background-color: #f8f9fa; padding: 20px; border-radius: 10px; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
            <div class="row g-5">
                <div class="col-lg-5">
                    <img class="w-100" class="img-fluid" src="images/stp-product-1.jpg" alt="">
                </div>
                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;" class="col-lg-7">
                <div style="text-align: left; width: 100%;">
                    <h2 class="text-uppercase mb-4">Asher</h2>
                    <p><strong>Usage/Application:</strong> Turning WASTE to ASH.</p>
                    <p><strong>Type Of Incinerator:</strong> Industry & Hospital Waste Incinerator.</p>
                    <p><strong>Power Source:</strong> Diesel.</p>
                    <p><strong>Waste Type:</strong> Ash.</p>
                    <p><strong>Brand: </strong> The ASHER.</p>
                    <p><strong>Material:</strong> Mild Steel.</p>
                </div>
                </div>
            </div>
        </div>
        <div class="mb-5" style="background-color:rgb(250, 232, 218); padding: 20px; border-radius: 10px; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
            <div class="row g-5">
                <div class="col-lg-5">
                    <img class="w-100" class="img-fluid" src="images/stp-product-2.jpg" alt="">
                </div>
                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;" class="col-lg-7">
                <div style="text-align: left; width: 100%;">
                    <h2 class="text-uppercase mb-4">Sludge Dewatering Press</h2>
                    <p><strong>Automation Grade:</strong> Automatic.</p>
                    <p><strong>Capacity:</strong> 5 Kg dry solid to 1050 Kg dry solid.</p>
                    <p><strong>Installation Service: </strong> Yes</p>
                    <p><strong>Brand: </strong> AMCON Inc. – SBSEnviro.</p>
                    <p><strong>Material:</strong> SS304.</p>
                    <p><strong>Efficiency:</strong> More than 95%.</p>
                </div>
                </div>
            </div>
        </div>
        <div class="mb-5" style="background-color: #f8f9fa; padding: 20px; border-radius: 10px; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
            <div class="row g-5">
                <div class="col-lg-5">
                    <img class="w-100" class="img-fluid" src="images/stp-product-3.jpg" alt="">
                </div>
                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;" class="col-lg-7">
                    <div style="text-align: left; width: 100%;">
                        <h2 class="text-uppercase mb-4">Johkasou STP</h2>
                        <p><strong>Application Industry:</strong> Residential & Commercial Building.</p>
                        <p><strong> Treatment Technology:</strong> Mixed Bed Bio Reactor (MBBR).</p>
                        <p><strong>Material of Construction:</strong> Mild Steel.</p>
                        <p><strong>Automation Grade: </strong>Automatic.</p>
                        <p><strong>Brand:</strong> Daiki Axis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'global/footer.php'; ?> 