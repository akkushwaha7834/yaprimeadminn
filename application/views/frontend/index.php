
  <body>
   <!-- <style> 
   a.nav-link.dropdown-toggle.yaprimeheader-size {
    font-size: 20px;
}.reputed-section {
    background-color: #F9FAFB;
    background-image: -webkit-linear-gradient(93deg, rgb(225 225 226) 93%, rgb(249, 250, 251) 50%);
    background-repeat: no-repeat;
    background-size: cover;
    padding: 80px;
    text-align: center;
    background-color: transparent;
}.pricing_sec {
    background-image: -webkit-linear-gradient(93deg, rgb(108 108 108) 93%, rgba(249, 250, 251, 0) 50%);
    background-repeat: no-repeat;
    background-size: cover;
    padding: 100px;
    text-align: center;
    background-color: transparent;
}
   </style> -->
  <!-- <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php
        $active = 'class="active"';
        foreach ($slider_view as $key => $row) {
            echo '<li data-target="#carouselExampleCaptions" data-slide-to="' . $key . '" ' . $active . '></li>';
            $active = ''; // Only add 'active' to the first indicator
        }
        ?>
    </ol>
    <div class="carousel-inner">
        <?php foreach ($slider_view as $key => $row) : ?>
            <div class="carousel-item <?php echo $key === 0 ? 'active' : ''; ?>">
                <img src="<?= base_url('uploads/') . $row->slider_image; ?> " style="height:580px;"  class="d-block w-100 index_banner_height"
                     alt="...">
                <div class="carousel-caption d-md-block">
                    <h2 class="index_banner">Start your own
                        <br>
                        profitable forex broker
                    </h2>
                    <p class="index_banner_para">Are you ready to venture into the dynamic and potentially lucrative world
                        of Forex brokerage?</p>
                    <button type="button" class="unique_anchor_one" data-toggle="modal" data-target="#exampleModal">Request
                        a Demo
                    </button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
</div> -->

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?=base_url()?>public/web/images/yaprime-banner.png" class="d-block w-100 index_banner_hieght" alt="...">
              <div class="carousel-caption d-md-block">
                <h2 class="index_banner">BEST LIQUIDITY SOLUTIONS FOR <br>YOUR FOREX BROKERAGE
                </h2>

                <p class="index_banner_para">Are you ready to venture into the dynamic and potentially lucrative world of Forex brokerage?</p>
                <!-- <a class="unique_anchor_one" href="request-demo.php">Request a Demo </a> -->
                <button type="button" class="unique_anchor_one" data-toggle="modal" data-target="#exampleModal">Find out more</button>
              </div>
            </div>
          <!-- <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </button> -->
        </div>

           <!-- Statistic Section -->

           <section class="statistic2">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 statistic_card">
                        <h2>30+</h2>
                        <h4>Forex brokers</h4>
                        <p>Happy Customers serving their Fullfledged Service to Connect traders.</p>
                    </div>
                    <div class="col-md-3 statistic_card">
                        <h2>1.2+</h2>
                        <h4>Million FX traders</h4>
                        <p>More than Million traders booking their trades Peacefully.</p>
                    </div>
                    <div class="col-md-3 statistic_card">
                        <h2>2+</h2>
                        <h4>Awards won</h4>
                        <p>Know Why YaPrime, Technology Pioneer-Technically, Best in the market.</p>
                    </div>
                    <div class="col-md-3 statistic_card">
                        <h2>300+</h2>
                        <h4>Billion trade volume</h4>
                        <p>More than Million traders booking their trades Peacefully.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--End Of Statistic Section -->

        <!-- Live Data -->

<!-- <?php include 'includes/trading-spreads.php';?> -->

<!-- Live Data -->
            <!-- skills section -->
            <section class="skill-section">
              <div class="container">
                <div class="row">
                  <div class=" col-lg-6 col-md-6 col-sm-12  Skill-text">
                    <h3>Start Your Own Forex Brokerage with YaPrime</h3>
                      <p>YaPrime believes in setting the industry standard for liquidity and market access solutions. We recognize that our global customer base has varied requirements and priorities, and our solutions are designed around this understanding.</p>
                      <p>We offer direct access to Liquidity from Institutional Liquidity pools – through our partnership with a regulated Liquidity Provider, and use our Data Feeds to enjoy the low latency price streams for more than 300 instruments.</p>
                                        
                  
                    </div>
                  <div class="  col-lg-6 col-md-6 col-sm-12 skill-cards">
                    <div class="card  skill-card">
                      <div class="card-body ">
                        <div class="skill-card-header">
                            <img src="<?=base_url()?>public/web/images/Frame 1000002727.jpg"/>
                            <i class="fa fa-check-square" aria-hidden="true"></i>
                        </div>
                        <h5 class="card-title">Liquidity Solutions</h5>
                        <p class="card-text">Best in Industry Forex Liquidity Solutions</p>
                      </div>
                    </div>
                    <div class="skill-image">
                      <img src="<?=base_url()?>public/web/images/Or.png"/>
                    </div>
                    <div class="card  skill-card1">
                      <div class="card-body">
                        <div class="skill-card-header">
                            <img src="<?=base_url()?>public/web/images/briefcase.jpg"/>
                            <i class="fa fa-check-square" aria-hidden="true"></i>
                        </div>
                        <h5 class="card-title">Broker Solutions</h5>
                        <p class="card-text">All Round Forex Brokerage Solutions</p>
                       
                      </div>
                    </div>
                  </div>
    
                </div>
              </div>
            </section>
            <!-- end of skills section -->
     
   
    
        <!-- unique feature -->
   <section class="unique-section uni_marging_btm">
    <div class="container">
       
            <h1>Unique features</h1>
            <br>
            <p>Our array of Forex broker products & services ready to start quickly</p>
        <div class="row">
            <div class="col-md-4 featured-sidebar">
                <div class="row featured-card-wrapper">
                    <div class="col-md-12">
                        <div class="card  featured-card one">
                            <div class="card-body ">
                              <div class="feqatured-card-header">
                                  <img src="<?=base_url()?>public/web/images/artificial-intelligence 1.jpg"/>
                                  <h5 class="card-title">Reliable technology</h5>
                              </div>
                       <br>
                              <p class="card-text">We underpin and adorn the most accurate technology. We offer you stable, fast and most Reliable technology for your platform and Business.</p>
                             
                            </div>
                          </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card  featured-card two">
                            <div class="card-body ">
                              <div class="feqatured-card-header">
                                  <img src="<?=base_url()?>public/web/images/customer-service 1.jpg"/>
                                  <h5 class="card-title">CRM & BACK OFFICE</h5>
                              </div>
                              


                              <br>
                              <p class="card-text">A fully automated client service is in the spotlight. A new generation of professional trader’s room for stepping up into the competitive Forex Market</p>
                             
                            </div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="row featured-card-wrapper">
                    <div class="col-md-12">
                        <div class="card  featured-card one">
                            <div class="card-body ">
                              <div class="feqatured-card-header">
                                  <img src="<?=base_url()?>public/web/images/shuttle 1.jpg"/>
                                  <h5 class="card-title">Quick start up </h5>
                              </div>
                       <br>
                              <p class="card-text">Our express start-up package will provide you with an award-winning trading platform and easy to use back office system.</p>
                             
                            </div>
                          </div>
                    </div>
                    <div class="col-md-12 featured-card text-center">
                        <img src="<?=base_url()?>public/web/images/uniqui-feature.png" alt="" width="100%">
                    </div>
                    <div class="col-md-12">
                        <div class="card  featured-card two">
                            <div class="card-body ">
                              <div class="feqatured-card-header">
                                  <img src="<?=base_url()?>public/web/images/Frame 1000002854.jpg"/>
                                  <h5 class="card-title">Forex Liquidity </h5>
                              </div>
                       <br>
                              <p class="card-text">Choose YaPrime for unparalleled liquidity solutions, bespoke services, and a trusted partnership that drives your financial success .We offer a range of integration options, including APIs and FIX connectivity, to make it easy to integrate with existing systems</p>
                             
                            </div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 featured-sidebar">
                <div class="row featured-card-wrapper">
                    <div class="col-md-12">
                        <div class="card  featured-card one">
                            <div class="card-body ">
                              <div class="feqatured-card-header">
                                  <img src="<?=base_url()?>public/web/images/customer-service (1) 1.jpg"/>
                                  <h5 class="card-title">Prime Account</h5>
                              </div>
                       <br>
                              <p class="card-text">
An exclusive account for high volume traders looking for competitive pricing and extra benefits.</p>
                             
                            </div>
                          </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card  featured-card two">
                            <div class="card-body ">
                              <div class="feqatured-card-header">
                                  <img src="<?=base_url()?>public/web/images/profits 1.jpg"/>
                                  <h5 class="card-title">Profitable booking</h5>
                              </div>
                              


                              <br>
                              <p class="card-text">We offer Flexible system of trading settings with Convenient filters and reports. Apart from this we provide Client transfer from A-booking to B-booking and back with just one click.</p>
                             
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </section>
   <!-- end of  unique feature -->
  
             <!-- Reputed Section -->
             <section class="reputed-section">
               <div class="container">
                
                    <h1>Interbank FX  Rates</h1>
                    <br>
                    <p>Competitive price feeds from best liquidity provider </p>
                        <br>
                    
               
                <!-- <div class="row whitelabel-card">
                  
                <div class="col-md-3 col-sm-12 book-bg">

                    <img src="<?=base_url()?>public/web/images/book.png"/>
                </div>
                    <div class="col-md-4 col-sm-12 whitelabel-mt4">
                        <h5>Whitelabel</h5>
    
                        <span>MetaTrader 4</span>
                        <p>Metatrader 4 bears exquisite functions that will showcase your Forex business with its own Trading Software.</p>
                 
                        <a href="contact_us" class="btn btn-primary submit-btn"  type="submit">Buy Now</a>
                  
                    </div>
                    <div class="col-md-4 col-sm-12 whitelabel-mt4">
                        <span>MetaTrader 5</span>
                        <p>The unique needs of every start-up. The package is designed to fulfill all the trading needs. Efficient package for all.</p>
                        <a href="contact_us" class="btn btn-primary submit-btn"  type="submit">Buy Now</a>
                    </div>
                </div> -->
                 
                <!-- <div class="row whitelabel-card">
                  
                    <div class="col-md-3 book-bg">
    
                        <img src="<?=base_url()?>public/web/images/book.png"/>
                    </div>
                        <div class="col-md-4 whitelabel-mt4">
                            <h5>CRM and API Solutions</h5>
        
                            <span>API Integration</span>
                            <p>Our CRM and API solutions offer unique features and benefits designed specifically for forex brokerages.</p>
                     
                            <a href="contact_us" class="btn btn-primary submit-btn" type="submit">Buy Now</a>
                      
                        </div>
                        <div class="col-md-4 quotes-price">
                            <h5>Are you interested in a quoted price?</h5>
                            <p>If your project doesn’t fit in the above plans, or if you’d like to discuss before making.</p>
                            <a href="tel:+35722030234" class="submit-bttn" type="submit">Call Us Today!</a>
                        </div>
                    </div>
                </div>
               
                    </div> -->
                    <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
  {
  "width": "100%",
  "height": "100%",
  "currencies": [
    "EUR",
    "USD",
    "JPY",
    "GBP",
    "CHF",
    "AUD",
    "CAD",
    "NZD",
    "CNY",
    "TRY",
    "SEK",
    "NOK"
  ],
  "isTransparent": false,
  "colorTheme": "light",
  "locale": "in"
}
  </script>
</div>
<!-- TradingView Widget END -->
              
               </div>
             </section>
             <!--End Of Reputed Section -->
             <!-- Partners Section -->
             <section class="partners-section">
             <div class="container partners_logo">
             <div class="container partners_logo">
<h1>Our Partners</h1>

</div>
<nav id="partners">
             <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link partners active" id="nav-forex-tab" data-bs-toggle="tab" data-bs-target="#nav-forex"
                type="button" role="tab" aria-controls="nav-forex" aria-selected="true">Liquidity Partners</button>
              <button class="nav-link partners" id="nav-crypto-tab" data-bs-toggle="tab" data-bs-target="#nav-crypto"
                type="button" role="tab" aria-controls="nav-crypto" aria-selected="false">Technology Partners</button>
              <button class="nav-link partners" id="nav-metals-tab" data-bs-toggle="tab" data-bs-target="#nav-metals"
                type="button" role="tab" aria-controls="nav-metals" aria-selected="false">Trading Platform Partners</button>
             
            </div>
</nav>
            <div class="tab-content tab-border" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-forex" role="tabpanel" aria-labelledby="nav-forex-tab">
          <div class="row">
            <div class="col-6 col-lg-2 liquidity_partners">
              <div class='partners_card'>
                <img src="<?=base_url()?>public/web/./images/cfh-claering.png" alt="">
              </div>
            </div>
            <div class="col-6 col-lg-2 liquidity_partners">
              <div class='partners_card'>
                <img src="<?=base_url()?>public/web/./images/lmax.png" alt="">
              </div>
            </div>
            <div class="col-6 col-lg-2 liquidity_partners">
              <div class='partners_card'>
                <img src="<?=base_url()?>public/web/./images/match-trade.png" alt="">
              </div>
            </div>
            <div class="col-6 col-lg-2 liquidity_partners">
              <div class='partners_card'>
                <img src="<?=base_url()?>public/web/./images/finalto.png" alt="">
              </div>
            </div>
            <div class="col-6 col-lg-2 liquidity_partners">
              <div class='partners_card'>
                <img src="<?=base_url()?>public/web/./images/match-prime.png" alt="">
              </div>
            </div>
          </div>
            </div>
            <div class="tab-pane fade" id="nav-crypto" role="tabpanel" aria-labelledby="nav-crypto-tab">
            <div class="row">
            <div class="col-6 col-lg-3">
              <div class='partners_card'>
                <img src="<?=base_url()?>public/web/./images/fortex.png" alt="">
              </div>
            </div>
            <div class="col-6 col-lg-3">
              <div class='partners_card'>
                <img src="<?=base_url()?>public/web/./images/one-zero.png" alt="">
              </div>
            </div>
            <div class="col-6 col-lg-3">
              <div class='partners_card'>
                <img src="<?=base_url()?>public/web/./images/brokeree.png" alt="">
              </div>
            </div>

          </div>

            </div>
            <div class="tab-pane fade" id="nav-metals" role="tabpanel" aria-labelledby="nav-metals-tab">
            <div class="row">
            <div class="col-6 col-lg-3">
              <div class='partners_card'>
                <img src="<?=base_url()?>public/web/./images/metaquotes.png" alt="">
              </div>
            </div>
            <div class="col-6 col-lg-3">
              <div class='partners_card'>
                <img src="<?=base_url()?>public/web/./images/ctrader.png" alt="">
              </div>
            </div>
            <div class="col-6 col-lg-3">
              <div class='partners_card'>
                <img src="<?=base_url()?>public/web/./images/match-trade.png" alt="">
              </div>
            </div>
            <div class="col-6 col-lg-3">
              <div class='partners_card'>
                <img src="<?=base_url()?>public/web/./images/vertex.png" alt="">
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
</section>
             <!-- end of partners section -->
              <!-- Pricing Start -->
  <?php include 'includes/dark_pricing.php';?>

  <!-- Pricing End   -->
  <!-- Our Blogs Section -->
    <!-- <section class="our_blog_section">
      <div class="container">
        <div class="blogs-heading">
          <span>Blog</span>
          <h1>Our blog</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-3">
          <div class="col">
              <a href="blog/start-your-own-forex-brokerage.php">
                <div class="card blog-card ">
                  <img src="<?=base_url()?>public/web/images/the-secrets-formula-for-starting-your-own-forex-trading-brokerage.png" class="card-img-top" alt="...">
                <div class="card-body blog-content">
                  <h3 class="card-title">The Secret Formula for Starting Your Own Forex Trading Brokerage</h3>
                  <br>
                  <a href="blog/start-your-own-forex-brokerage.php" class="btn btn-primary blog-btn">2,600 Views . Oct 23, 2023</a>
                </div>
              </div>
              </a>
          </div>
          <div class="col">
          <a href="blog/forex-liquidity-provider.php">
            <div class="card blog-card ">
              <img src="<?=base_url()?>public/web/images/forex-liquidity-provider.png" class="card-img-top" alt="...">
            <div class="card-body blog-content">
              <h3 class="card-title">The Complete Forex Brokerage Business Plan Guide - YaPrime</h3>
              <br>
              <a href="blog/forex-liquidity-provider.php" class="btn btn-primary blog-btn">2,100 Views . Oct 30, 2023</a>
            </div>
          </div>
          </a>
        </div>
           <div class="col">
          <a href="the-secrets-formula-for-starting-your-own-forex-trading-brokerage.php">
            <div class="card blog-card ">
              <img src="<?=base_url()?>public/web/images/the-secrets-formula-for-starting-your-own-forex-trading-brokerage.png" class="card-img-top" alt="...">
            <div class="card-body blog-content">
              <h3 class="card-title">The Secret Formula for Starting Your Own Forex Trading Brokerage</h3>
              <br>
              <a href="the-secrets-formula-for-starting-your-own-forex-trading-brokerage.php" class="btn btn-primary blog-btn">2,600 Views . Oct 23, 2023</a>
            </div>
          </div>
          </a>
        </div>
          
        </div>
      </div>
    </section> -->
  <!-- End Of Our Blogs Section -->
   

</body>
</html>
