<?php include 'global/header.php'; ?> 
    <div class="container-fluid py-5 stp-products-banner">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center content">
                <h1 class="display-4 text-white animated zoomIn">ETP Products </h1>
                <a href="home.php" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="#" class="h5 text-white">ETP</a>
            </div>
        </div>
    </div>
<style>
/* ================= header banner start =============== */
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
.etp-products{
    margin-top: 50px;
    margin-bottom: 50px;
}
.etp-products .items{
    background: #ecf4f3;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
}
.etp-products .items img{
    width:100%;
}
.etp-products .items .items-detail{
    padding:20px;
}
.etp-products .items .items-detail p{
    line-height:25px;
}
/* ================= header banner end =============== */
</style>
<div class="etp-products">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="items">
                    <div class="row g-0">
                    <div class="col-lg-6 col-sm-12">
                        <img src="images/products/etp/mem.jpg" alt="image">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="items-detail">
                            <h4>Membrane Bio Reactor (MBR)</h4>
                            <p><strong>Water Source Type:</strong> Industrial Wastewater.</p>
                            <p><strong>Treatment Technique:</strong> Membrane Bioreactor.</p>
                            <p><strong>Capacity:</strong> Customized.</p>
                            <p><strong>Usage/Application:</strong> Waste Water.</p>
                            <p><strong>Brand:</strong> Mitsubishi.</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>    
            <div class="col-lg-6">
                <div class="items">
                    <div class="row g-0">
                        <div class="col-lg-6 col-sm-12">
                            <img src="images/products/etp/memb.jpg" alt="image">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                          <div class="items-detail">
                                <h4>Membrane Bio Reactor</h4>
                                <p><strong>Membrane Material:</strong> PTFE.</p>
                                <p><strong>Plant Capacity:</strong> More than 5000 LPH.</p>
                                <p><strong>Water Source Type:</strong> Industrial Effluent.</p>
                                <p><strong>Brand:</strong> Sumitomo.</p>
                                <p><strong>Treatment Stages:</strong> Secondary Treatment.</p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="items">
                    <div class="row g-0">
                        <div class="col-lg-6 col-sm-12">
                            <img src="images/products/etp/air.jpg" alt="image">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="items-detail">
                                <h4>Air Blower</h4>
                                <p><strong>Brand:</strong> Anlet.</p>
                                <p><strong>Type:</strong> Rotary Root Blower (Trilobe).</p>
                                <p><strong>Model:</strong> BE150H.</p>
                                <p><strong>Origin:</strong> Japan.</p>
                                <p><strong>Capacity:</strong> 28.5m3/min, 70 kPa.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="items">
                    <div class="row g-0">
                        <div class="col-lg-6 col-sm-12">
                            <img src="images/products/etp/air-blu.jpg" alt="image">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="items-detail">
                                <h4>Air Blower</h4>
                                <p><strong>Make:</strong> Turbowin.</p>
                                <p><strong>Type:</strong> Turbo.</p>
                                <p><strong>Model:</strong> WL40-06.</p>
                                <p><strong>Capacity:</strong> Airflow 25m3/min, @ 600mbr (Head).</p>
                                <p><strong>Speed:</strong> 40000RPM.</p>
                                <p><strong>Material:</strong> Aluminum Alloy.</p>
                                <p><strong>Motor Rating:</strong> 30kW/440V/3Ph/50Hz.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="items">
                    <div class="row g-0">
                        <div class="col-lg-6 col-sm-12">
                            <img src="images/products/etp/air-com.jpg" alt="image">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="items-detail">
                                <h4>Air-Compressor</h4>
                                <p><strong>Lubrication Style:</strong> Oil-less.</p>
                                <p><strong>Cooling System:</strong> Air Cooling.</p>
                                <p><strong>Cylinder Position:</strong> Horizontal.</p>
                                <p><strong>Usage/Application:</strong> convert power into compressed air for various industrial, commercial, and residential purposes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="items">
                    <div class="row g-0">
                        <div class="col-lg-6 col-sm-12">
                            <img src="images/products/etp/asher.jpg" alt="image">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="items-detail">
                                <h4>Asher</h4>
                                <p><strong>Usage/Application:</strong> For Hospital Hazardous Waste.</p>
                                <p><strong>Type Of Incinerator:</strong> Hospital Waste Incinerator.</p>
                                <p><strong>Power Source:</strong> Diesel.</p>
                                <p><strong>Waste Type:</strong> Ash.</p>
                                <p><strong>Capacity:</strong> 50 KG.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="items">
                    <div class="row g-0">
                        <div class="col-lg-6 col-sm-12">
                             <img src="images/products/etp/cooling.jpg" alt="image">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="items-detail">
                                <h4>Cooling Tower</h4>
                                <p><strong>Brand:</strong> AOSUA.</p>
                                <p><strong>Origin:</strong> China.</p>
                                <p><strong></strong>We provide cooling towers from Aosua a Chinese renowned brand for cooling towers.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="items">
                    <div class="row g-0">
                        <div class="col-lg-6 col-sm-12">
                            <img src="images/products/etp/coarse.jpg" alt="image">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="items-detail">
                                <h4>Coarae Bubble Diffuser Disk Type</h4>
                                <p><strong>Material:</strong> EPDM/Silicon.</p>
                                <p><strong>Brand:</strong> Airfin.</p>
                                <p><strong>Origin:</strong> India.</p>
                                <p><strong>Automation Grade:</strong> Automatic.</p>
                                <p><strong>Type of Aerator:</strong> Diffused Aerations.</p>
                                <p><strong>Applications:</strong> Coarse Bubble Diffused Aeration.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="items">
                    <div class="row g-0">
                        <div class="col-lg-6 col-sm-12">
                            <img src="images/products/etp/Cooling-t.jpg" alt="image">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="items-detail">
                                <h4>Cooling Tower</h4>
                                <p><strong>Brand:</strong> AOSUA.</p>
                                <p><strong>Origin:</strong> China.</p>
                                <p><strong></strong>We provide cooling towers from Aosua a Chinese renowned brand for cooling towers.</p>
                                <p><strong></strong></p>
                                <p><strong></strong></p>
                                <p><strong></strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="items">
                    <div class="row g-0">
                        <div class="col-lg-6 col-sm-12">
                            <img src="images/products/etp/dewatreing.jpg" alt="image">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="items-detail">
                                <h4>Dewatering Press</h4>
                                <p><strong>Automation Grade:</strong> Automatic</p>
                                <p><strong>Capacity:</strong> 5 Kg dry solid to 1050 Kg dry solid.</p>
                                <p><strong>Installation Service:</strong> Yes.</p>
                                <p><strong>Brand:</strong> AMCON Inc. – SBSEnviro.</p>
                                <p><strong>Material:</strong> SS304.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="items">
                    <div class="row g-0">
                        <div class="col-lg-6 col-sm-12">
                            <img src="images/products/etp/drum-.jpg" alt="image">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="items-detail">
                                <h4>Drum-Screen</h4>
                                <p><strong>Material:</strong> mild steel.</p>
                                <p><strong>Capacity:</strong> 0.5 ton.</p>
                                <p><strong>Motor Power:</strong> 1hp.</p>
                                <p><strong>Brand:</strong> Lackeby.</p>
                                <p><strong>Voltage:</strong> 220-240 V.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="items">
                    <div class="row g-0">
                        <div class="col-lg-6 col-sm-12">
                            <img src="images/products/etp/grit.jpg" alt="image">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="items-detail">
                                <h4>Grit-Classifier</h4>
                                <p><strong>Waste Source:</strong> Industrial Effluent.</p>
                                <p><strong>Installation Service:</strong> Yes.</p>
                                <p><strong>Color:</strong> White.</p>
                                <p><strong>Usage/Application:</strong> Water Treatment Plant.</p>
                                <p><strong>Automation Grade:</strong> Automatic.</p>
                                <p><strong>Capacity:</strong> 5000 m3/hr.</p>
                                <p><strong>Body:</strong> Material Stainless Steel.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="items">
                    <div class="row g-0">
                        <div class="col-lg-6 col-sm-12">
                            <img src="images/products/etp/machanical.jpg" alt="image">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="items-detail">
                                <h4>Machanical-Bar</h4>
                                <p><strong>Brand/make:</strong> Lackeby.</p>
                                <p><strong>Width:</strong> 300~1500mm.</p>
                                <p><strong>Height:</strong> 1~10m.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="items">
                    <div class="row g-0">
                        <div class="col-lg-6 col-sm-12">
                            <img src="images/products/etp/flo.jpg" alt="image">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="items-detail">
                                <h4>Flow-Meter</h4>
                                <p><strong>Model Name/Number:</strong> MagTech 2.0.</p>
                                <p><strong>Brand:</strong> Brothers.</p>
                                <p><strong>Usage/Application:</strong> measures the rate of fluid (liquid or gas) flow in pipelines.</p>
                                <p><strong>Connection:</strong> Wired and wireless with GSM Modem with Datalogger.</p>
                                <p><strong>Type:</strong> Integral & Remote Both are Available.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="items">
                    <div class="row g-0">
                        <div class="col-lg-6 col-sm-12">
                            <img src="images/products/etp/air-blo.jpg" alt="image">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="items-detail">
                                <h4>Air Blower</h4>
                                <p><strong>Brand:</strong> ANLET CO. LTD.</p>
                                <p><strong>Types:</strong> Root type, Dry Root type.</p>
                                <p><strong></strong></p>
                                <p><strong></strong></p>
                                <p><strong></strong></p>
                                <p><strong></strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="items">
                    <div class="row g-0">
                        <div class="col-lg-6 col-sm-12">
                            <img src="images/products/etp/sludge.jpg" alt="image">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="items-detail">
                                <h4>Sludge Dewatering Press</h4>
                                <p><strong>Capacity:</strong> 5 Kg dry solid to 1050 Kg dry solid.</p>
                                <p><strong>Installation Service:</strong> Yes.</p>
                                <p><strong>Brand:</strong> AMCON Inc. – SBSEnviro.</p>
                                <p><strong>Material:</strong> SS304.</p>
                                <p><strong>Efficiency:</strong> More than 95%.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="items">
                    <div class="row g-0">
                        <div class="col-lg-6 col-sm-12">
                            <img src="images/products/etp/decolor.jpg" alt="image">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="items-detail">
                                <h4></h4>
                                <p><strong></strong></p>
                                <p><strong></strong></p>
                                <p><strong></strong></p>
                                <p><strong></strong></p>
                                <p><strong></strong></p>
                                <p><strong></strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="items">
                    <div class="row g-0">
                        <div class="col-lg-6 col-sm-12">
                            <img src="images/products/etp/zero.jpg" alt="image">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="items-detail">
                                <h4></h4>
                                <p><strong></strong></p>
                                <p><strong></strong></p>
                                <p><strong></strong></p>
                                <p><strong></strong></p>
                                <p><strong></strong></p>
                                <p><strong></strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="items">
                    <div class="row g-0">
                        <div class="col-lg-6 col-sm-12">
                            <img src="images/products/etp/fine-bu.jpg" alt="image">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="items-detail">
                                <h4>Fine-Bubble-Diffuser</h4>
                                <p><strong>Material:</strong> EPDM/Silicon.</p>
                                <p><strong>Brand:</strong> AIRFIN.</p>
                                <p><strong>Origin:</strong> INDIA.</p>
                                <p><strong>Type Of Aerator:</strong> Diffused Aerations.</p>
                                <p><strong>Usage/Application:</strong> Pond.</p>
                                <p><strong>Treatment Technique:</strong> Fluidized Aerated Reactor.</p>
                                <p><strong>Air Flow Range:</strong> 2-15 m3/h.</p>
                                <p><strong>Type Of Bubble:</strong> Fine Bubble.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="items">
                    <div class="row g-0">
                        <div class="col-lg-6 col-sm-12">
                            <img src="images/products/etp/pumps.jpg" alt="image">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="items-detail">
                                <h4>Pumps</h4>
                                <p><strong>Types:</strong></p>
                                <p>1: Submersible</p>
                                <p>2: Centrifugal</p>
                                <p>3: Dosing pump for swimming pool</p>
                                <p><strong>Origin:</strong> Japan.</p>
                                <p><strong>Brand:</strong> Tsurumi (Distributor), Granfus, pedrollo (Can be managed).</p>
                                <p><strong>Use:</strong> Sewage, water pump.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
<?php include 'global/footer.php'; ?> 