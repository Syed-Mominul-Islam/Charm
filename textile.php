<?php include 'global/header.php'; ?> 
<div class="container-fluid py-5 bg-head">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center content">
            <h1 class="display-4 text-white animated zoomIn">Textile Effluent Decoloring</h1>
            <a href="home.php" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h5 text-white">Decoloring</a>
        </div>
    </div>
</div>
<style>
/* ================= Deader banner start =============== */
.bg-head {
        position: relative;
        background-image: url('images/Banner/Decoloring.jpg');
        height: 600px;
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
}
.bg-head::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: rgba(0, 0, 0, 0.5); /* Dark shade with 50% opacity */
        z-index: 1;
}
.bg-head .content {
        position: relative;
        z-index: 2; /* Ensure content appears above the overlay */
}
/* ================= Deader banner end =============== */
</style>
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

    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-12">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <!-- <img class="img-fluid w-100 rounded mb-5" src="images/500-350.jpg" alt=""> -->
                        <h1 class="mb-4">What is De-coloring?</h1>
                        <p>Decoloring, or decolorization, is the process of removing color from liquids, especially wastewater, to make it clear and safe for reuse or disposal. This is a critical step in industries like textiles, paper, leather, and chemicals, where colored wastewater is often produced as a byproduct. </p>
                        <p>Color in textile wastewater is the observatory contamination having less pollutant effect on the environment but the most powerful pollutant impact on our mind! It has, therefore, become an essential task to remove color from the effluent of textiles.</p>
                        <p>Also, if we think about the reuse of textile wastewater, we have no alternative but to remove its color. Removing color from textile effluent is challenging and costly. To mitigate the challenges of the color-removing process, Charm Limited evolved and applied different technologies over 5 years. Our continuous endeavor in this field finally made us successful in announcing a complete and viable solution to all. We believe our solution will create a lot of differences in the presence norm of discharging treated but colored effluent in the environment.</p>
                    </div>
                    <!-- Blog Detail End -->
                </div>
    
                <div class="col-lg-12">
                    <div class="section-title position-relative pb-3 mb-5">
                        <!-- <h5 class="fw-bold text-primary text-uppercase">ABC</h5> -->
                        <h1 class="mb-0">Decoloring Wastewater in Bangladesh: Common Methods and Technologies</h1>
                        <p>In Bangladesh, industries like textiles, dyeing, and manufacturing face a major challenge: removing color from wastewater. We usually apply different kinds of organic and inorganic chemicals to reduce or remove the color of effluent. Normally the chemicals we use itself can be hazardous and noncompliant. To solve this, different technologies are used based on cost, effectiveness, and the type of dyes being treated. Here’s a look at the most common methods:</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="wow slideInUp mb-4 h-100" data-wow-delay="0.1s">
                        <div class="bg-light text-start h-100">
                            <img class="img-fluid w-100 rounded mb-2" src="images/500-350.jpg" alt="">
                           <div style="padding: 0 10px 0 10px;">
                                <h3>Activated Carbon Adsorption</h3>
                                <p><strong>How it works:</strong> Wastewater is passed through activated carbon, which acts like a sponge to absorb dye molecules.</p>
                                <p><strong>Why it’s used:</strong> It’s simple, effective, and works for many types of dyes.</p>
                                <p><strong>Where it’s used:</strong> Textile and dyeing industries.</p>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="wow slideInUp mb-4 h-100" data-wow-delay="0.1s">
                        <div class="bg-light text-start h-100">
                            <img class="img-fluid w-100 rounded mb-2" src="images/500-350.jpg" alt="">
                           <div style="padding: 0 10px 0 10px;">
                                <h3>Coagulation-Flocculation</h3>
                                <p><strong>How it works:</strong>  Chemicals are added to the wastewater to make dye particles clump together, so they can be easily removed.</p>
                                <p><strong>Why Why it’s used:</strong> It’s affordable and great for treating large amounts of wastewater.</p>
                                <p><strong>Where it’s used:</strong> Small and medium-sized industries.</p>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="wow slideInUp mb-4 h-100" data-wow-delay="0.1s">
                        <div class="bg-light text-start h-100">
                            <img class="img-fluid w-100 rounded mb-2" src="images/500-350.jpg" alt="">
                            <div style="padding: 0 10px 0 10px;">
                                <h3>Biological Treatment</h3>
                                <p><strong>How it works:</strong> How it works: Microorganisms like bacteria or fungi break down organic dyes naturally.</p>
                                <p><strong>Why it’s used:</strong> Why it’s used: It’s eco-friendly and cost-effective for long-term use.</p>
                                <p><strong>Where it’s used:</strong>  Industries focused on sustainability.</p>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="wow slideInUp mb-4 h-100" data-wow-delay="0.1s">
                        <div class="bg-light text-star h-100">
                            <img class="img-fluid w-100 rounded mb-2" src="images/500-350.jpg" alt="">
                            <div style="padding: 0 10px 0 10px;">
                                <h3>Membrane Filtration</h3>
                                <p><strong>How it works:</strong> Wastewater is filtered through special membranes that trap dye particles.</p>
                                <p><strong>Why it’s used:</strong> It’s very effective but can be expensive, so it’s used in advanced facilities.</p>
                                <p><strong>Where it’s used:</strong> Large industries with bigger budgets.</p>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="wow slideInUp mb-4 h-100" data-wow-delay="0.1s">
                        <div class="bg-light text-start h-100">
                            <img class="img-fluid w-100 rounded mb-2" src="images/500-350.jpg" alt="">
                            <div style="padding: 0 10px 0 10px;">
                                <h3>Advanced Oxidation Processes (AOP)</h3>
                                <p><strong>How it works:</strong> Chemicals like ozone or hydrogen peroxide break down complex dyes.</p>
                                <p><strong>Why it’s used:</strong> It’s powerful and can handle dyes that other methods can’t.</p>
                                <p><strong>Where it’s used:</strong> Industries dealing with tough wastewater problems.</p>
                           </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar End -->
            </div>
            <h2 style="margin-top:30px;">Which Decoloring Technology CHARM Ltd. Use?</h2>
            <img class="w-100" src="images/1660-600.jpg" alt="image">
            <p style="margin-top:20px;">Charm Ltd. works on providing <strong> sustainable and eco-friendly wastewater solutions in Bangladesh. </strong> Now, they are introducing a new <strong>decoloring technology in Bangladesh.</strong> The name of this technology is the <strong>Integrated Color Redemption System by Ozone (ICRSO3ONE),</strong> which combines specialized equipment from Finland with some local integrations.</p>
            <p>Ozone-based decoloring systems are advanced wastewater treatment solutions that utilize ozone (O₃) as a powerful oxidizing agent to remove dyes and organic pollutants from industrial effluents, particularly in the textile industry. These systems are highly efficient, environmentally friendly, and do not produce secondary sludge, making them a sustainable alternative to conventional treatment methods.</p>
            <p>The ICRSO3ONE system is quite an impressive method so far found for the removal of effluent color. But there are still many possibilities left to improve the performance of this technology. We are into its further improvement and hope to provide a sustainable decoloring solution to all.</p>

            <h2>What is Integrated Color Redemption System by Ozone (ICRSO3ONE)?</h2>
            <p>Integrated Color Redemption System by Ozone (ICRSO3ONE) is a combination of special apparatus from Finland and some local integrations. The method is derived with continuous Ozone (O3) dissolving and mixing with an optimal color saturation process. The O3 injection process in this system ensures almost all of the O3 is dissolved in water and is less released to the environment.</p>
            <p>The method is derived with continuous Ozone (O3) dissolving and mixing with an optimal color saturation process. The O3 injection process in this system ensures almost all of the O3 is dissolved in water and is less released to the environment.</p>

            <h2>Basic System Flow Diagram of ICRSO3ONE</h2>
            <img class="w-100" src="images/1-01-1536x560.png" alt="">

            <h2 style="margin-top:30px;">Working Principle of ICRSO3NE Decoloring Systems</h2>
            <p><strong> The ozone-based decoloring process involves the following steps:</strong></p>

            <p><strong>Ozone Genera on:</strong> Ozone is produced from oxygen (O₂) in the environment using a corona discharge or arc generator device, available in local and international markets, and is then transported to the treatment system through specialized pipelines.</p>
            <p><strong>Ozone Injection on & Mixing with OX-Tube:</strong> Ozone gas can be injected into wastewater using diffusers, venturi injectors, or agitators to ensure efficient mixing, with a specialized device from Finland called the OX tube—a combination of venturi and vortex mixing—being used to achieve maximum and efficient mixing, while factors such as contact time, ozone concentration, and wastewater composition (pH, temperature) are critical for effective treatment.</p>
            <p><strong>Oxidation and Decolorization:</strong> Ozone reacts with dye molecules by breaking double bonds (-C=C-, -N=N-) and disrupting the conjugated systems responsible for color, and through the oxidation process, it converts dyes into simpler, non-toxic compounds such as carboxylic acids, aldehydes, and carbon dioxide (CO₂).</p>
            <p><strong>Residual O3 recirculation or destruction:</strong> Residual O₃ is trapped inside retention or buffer tanks, with the maximum portion being recirculated using the OX-tube, while the remaining portion is destroyed or absorbed using a catalytic decomposer or an absorption device that combines degassing and absorption technology, with all steps carefully monitored using an ambient O₃ monitor.</p>
            <p><strong>Final Treatment and Discharge:</strong> After ozone treatment, the wastewater undergoes further biological treatment or filtration to remove any remaining organic compounds, and the treated water is then tested for compliance with environmental standards before discharge.</p>
       
            <h2>Advantages of ICRS Technology:</h2>
            <p><i class="fas fa-window-minimize"></i> High efficiency in removing a wide range of dyes and organic pollutants.</p>
            <p><i class="fas fa-window-minimize"></i> No secondary pollution, as ozone decomposes into oxygen.</p>
            <p><i class="fas fa-window-minimize"></i> Compact design and versatility for various industrial applications.</p>
            <p><i class="fas fa-window-minimize"></i>Very minimal operational efforts are required.</p>
            <p><i class="fas fa-window-minimize"></i> Operational costs can be further minimizable by using solar energy.</p>
            <p><i class="fas fa-window-minimize"></i> Operational regularity and system longevity can be achieved without any complicacy.</p>
            <p><i class="fas fa-window-minimize"></i> Using ICRSO3ONE can also help to optimize the other discharge parameters especially by increasing DO and decreasing vola le elements from water.</p>
            <p><i class="fas fa-window-minimize"></i> Since there is no SS produced, the opera on cost also reduces in comparison to the other chemical-based decoloring methods.</p>
        
            <h2>Feasibility Stands of ICRSO3ONE</h2>
            <p><strong>Commercial:</strong></p>
            <p><strong>CAPEX:</strong> The ICRSO3ONE can be integrated in the initial cost for a 150 m3/hr ICRSO3ONE decoloring system is around USD 2,61,315.60.</p>
            <p><strong>OPEX:</strong> After several pilots and experiments with different color-concentrated effluent, it was determined that to decolor 1 m3 colored effluent cost 1 BDT to 3 BDT.</p>
        
            <p><strong>Technical:</strong></p>
            <p><i class="fas fa-window-minimize"></i> Minimal operational efforts are needed.</p>
            <p><i class="fas fa-window-minimize"></i> Solar energy can further reduce operational costs.</p>
            <p><i class="fas fa-window-minimize"></i> Ensures operational regularity and system longevity without complications.</p>
            <p><i class="fas fa-window-minimize"></i> ICRSO3ONE optimizes discharge parameters, increasing DO and reducing volatile elements in water.</p>
            <p><i class="fas fa-window-minimize"></i> No SS production lowers costs compared to chemical-based decoloring methods.</p>

            <h2>Why Decoloring is Important for Environment?</h2>
            <p><strong>Environmental Compliance:</strong> Wastewater that’s colored needs to meet strict government rules before it can be safely released back into the environment.</p>
            <p><strong>Visual Pollution:</strong> Even after treatment, colored water can make people feel that an area is unclean or unsafe, which can affect public perception.</p>
            <p><strong>Water Reuse:</strong> For industries to recycle and reuse wastewater effectively, they need to remove the color, ensuring the water is safe and usable again.</p>
            <p>However, <strong>decoloring wastewater</strong> can be tough and costly, especially for industries like textiles, where dyes can be complicated and hard to break down.</p>
        
            <div class="row">
                <div class="col-md-6">
                    <img class="w-100" src="images/400-300.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <h2 class="mt-4">Why decoloring is important for Bangladesh?</h2>
                    <p>Decoloring is super important for Bangladesh because it helps keep our environment clean and safe. Many industries, like textiles and dyeing, release wastewater filled with bright colors into rivers and lakes. This dirty water can harm fish, plants, and even people who depend on these water sources for drinking, farming, and fishing.</p>
                    <p>By removing color from wastewater, we can protect our rivers, follow environmental rules, and make sure water stays clean for the future. Plus, decoloring lets industries reuse water, saving money and resources while cutting down on pollution. In a country like Bangladesh, where clean water is so valuable, decoloring is a big step toward a healthier and greener tomorrow.</p>
                </div>
            </div>

            <h2 class="mt-4">The Future of ICRSO3NE Decoloring in Bangladesh</h2>
            <p>ICRSO3NE systems offer a sustainable and efficient solution for treating textile wastewater. By effectively breaking down dye molecules, reducing organic pollutants, and minimizing sludge production, these systems provide an environmentally friendly alternative to conventional treatment methods. Proper handling of residual ozone and adherence to regulatory standards ensure safe and compliant operation.</p>
            <p>By investing in these technologies, Bangladesh can reduce pollution, protect its water resources, and build a cleaner, greener future for everyone. By choosing Charm Ltd., you get modern, reliable, and eco-friendly wastewater solutions tailored to your needs. Contact us today to learn more about our products and services.</p>
        </div>
    </div>
    <!-- Blog End -->

<?php include 'global/footer.php'; ?> 