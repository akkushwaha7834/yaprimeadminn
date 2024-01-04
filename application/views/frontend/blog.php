
  </head>
   
  <body>

         <!--End of  Header Section -->
         <!-- Banner Start-->
  <section class="mt_4_banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4 class="mt4_h4">
            Our blogs
          </h4>
          <h1 class="mt4_h1">
            Learn how to think better by<br>
taking notes
          </h1>
          <p class="mt4_p">
            YaPrime blogs are about financial-related trading topics for in-depth knowledge before trading. We will <br>cover all the topics like stocks, commodities, forex, cryptocurrency, and various aspects of the financial<br> market.
          </p>
          <div class="start_broker">
            <a class="mt4_anchor" href="../start_broker">Start Broker </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Banner End -->
  <!-- Blog Grids -->
  <section class="our_blog_grid">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-3 g-3 blog-grid-row">
        <?php 
     
        foreach($blog_detail_view as $row):?>

        <div class="col">
          <a href="<?=base_url()?>blog/<?=str_replace(' ','-',strtolower($row->seo_title));?>">
            <div class="card blog-card ">
              <img src="<?=base_url('uploads/').$row->blog_image;?>" class="card-img-top" alt="...">
            <div class="card-body blog-content">
              
              <h3 class="card-title"><b><?=$row->blog_name?></b></h3>
              <hr style="border: 1px solid #ccc;">
            <b><?= date('d-m-Y', strtotime($row->blog_date))?>
            </b>
            </div>
          </div>
          </a>
        </div>
        <?php endforeach?>
      </div>

    </div>
  </section>
  <!-- End Of Blog Grid  -->

</body>
</html>
