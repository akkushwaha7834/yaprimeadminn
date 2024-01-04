
<!DOCTYPE html>
<html lang="en">
  
  <body>

<section class="liquidity_banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12 admin_banner_left">
          <h4 class="liquidity_h4">
            Start broker
          </h4>
          <h1 class="liquidity_h1">
          Create Your Prime Account
          </h1>
        </div>
      </div>
    </div>
  </section>

<section class="request_demo_content">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="<?=base_url()?>public/web/images/illustrations.png" width="100%">
      </div>
      <div class="col-md-6">
      <form method="POST" action="<?= base_url('admin/start_broker/start_broker_submit_data'); ?>" enctype="multipart/form-data"class="row g-2 needs-validation form-style" novalidate>
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                <div class="form-row form-group">
                  <div class="col-md-6">
                      <label for="formGroupExampleInput">Full Name</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" required="" name="name" data-gtm-form-interact-field-id="1">
                  </div>
                  <div class="col-md-6">
                      <label for="formGroupExampleInput2">Email Address</label>
                      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email Address" required="" name="email" data-gtm-form-interact-field-id="2">
                  </div>
                </div>
                <div class="form-row form-group">
                  <div class="col-md-6">
                    <label for="inputState">Enter Contact Number</label>
                    <input type="text" placeholder="Enter Contact Number" name="contact_number" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label for="inputState">Your Country</label>
                    <input type="text" placeholder="Your Country" name="country" class="form-control">
                  </div>
                </div>
                <div class="form-row form-group">
                  <div class="col-md-12">
                      <label for="inputState">Are You A ?</label>
                      <select class="form-control" id="areyoua" name="areyoua" required="">
                          <option value="">Select</option>
                          <option value="Start Up">Start Up</option>
                          <option value="Introducing Broker">Introducing Broker</option>
                          <option value="Existing Broker">Existing Broker</option>
                          <option value="Others">Others</option>
                      </select>
                  </div>
                </div>
                <div class="form-row form-group">
                  <div class="col-md-12">
                    <label for="inputState">What are the product or services you looking for?</label>
                      <select class="form-control" id="products" name="products" required="">
                          <option disabled="" value="" selected="">Select Products</option>
                          <option value="Traders Room">Traders Room</option>
                          <option value="Forex Brokerage">Forex Brokerage</option>
                          <option value="MT5 White Label">MT5 White Label</option>
                          <option value="MT5 ">MT5 </option>
                          <option value="Forex Websites Broker">Forex Websites Broker</option>
                          <option value="Forex CRM">Forex CRM</option>
                          <option value="Forex Liquidity">Forex Liquidity</option>
                          <option value="MAM">MAM</option>
                          <option value="MAM/PAMM Support">MAM/PAMM Support</option>
                          <option value="PAMM">PAMM</option>
                          <option value="Merchant Services">Merchant Services</option>
                          <option value="Deposits And Withdrawals With Bitcoin-ETH-USDT">Deposits And Withdrawals
                              With
                              Bitcoin-ETH-USDT</option>
                          <option value="IB &amp; Affiliate Area">IB &amp; Affiliate Area</option>
                          <option value="All The Above">All The Above</option>
                      </select>
                  </div>
                </div>
                <div class="form-row form-group">
                  <div class="col-md-12">
                    <label for="inputState">Do you need a quote ?</label>
                      <select class="form-control" id="qoute" name="qoute" required="">
                          <option value="">Select</option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                      </select>
                  </div>
                </div>
                  <div class="form-group">
                      <label for="exampleFormControlTextarea1">Give me a brief about your requirement</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1"rows="1" cols="50" placeholder="Message" name="message"></textarea>
                  </div>
                  <button type="submit" class="unique_anchor_one btn btn-primary">Submit</button>
              </form>
      </div>
    </div>
  </div>
</section>

<!-- YaPrime Pointers Start-->

  <section class="why_ya_prime_pointer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="pointer_heading">
            Why YaPrime
          </h2>
          <p class="pointers_para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="row poimters_row_two">
        <div class="col-md-6">
          <div class="image-box-pointers">
            <img src="<?=base_url()?>public/web/images/dollar.png" class="pointers_image">
            <p class="image_box_para">
              Elevate your forex game with admin consultation bliss!
            </p>
          </div>
          <div class="image-box-pointers">
            <img src="<?=base_url()?>public/web/images/dollar.png" class="pointers_image">
            <p class="image_box_para">
              Elevate your forex game with admin consultation bliss!
            </p>
          </div>
          <div class="image-box-pointers">
            <img src="<?=base_url()?>public/web/images/dollar.png" class="pointers_image">
            <p class="image_box_para">
              Elevate your forex game with admin consultation bliss!
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <img src="<?=base_url()?>public/web/images/FreeService-Hero.png" width="100%">
        </div>
      </div>
     <!--  <div class="row poimters_row_two">
        <div class="start_broker">
            <a class="mt4_anchor" href="request-demo.php">Start Broker</a>
          </div>
      </div> -->
    </div>
  </section>

<!-- Yaprime Pointers End -->

