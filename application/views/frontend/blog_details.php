<?php 
        foreach($blog_detail_view as $row): ?>
<section class="mt_4_banner blog-detail-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4 class="mt4_h4">
            Discover the YaPrime
          </h4>
          <h3 class="mt4_h1">
            <?=$row->blog_name?>
          </h3>
        </div>
      </div>
    </div>
  </section>
        <!-- Details Hero  -->
        
       
        <!-- End of Details Hero  -->
        <!--Blogs Description  -->
        <section class="blog-description blog-description-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8" style="color:black;">
                    <h2><?=$row->blog_name?></h2>
                    <p><?=$row->blog_desc?></p><br>
                    <img src="<?=base_url('uploads/').$row->blog_image;?>" width="100%" /><br>
                      <br><?=$row->long_desc?>
                    </div>
                    <div class="col-md-4 ">
          <div class="row row-cols-1 row-cols-md-1 g-1 blogs-des-cards " id="sidebar">
          <?php foreach ($blogs as $blog): ?>
            <div class="col ">
              <a href="<?= str_replace(' ', '-', strtolower($blog->seo_title)); ?>">
                <div class="card blog-card ">
                  <img src="<?= base_url('uploads/') . $blog->blog_image; ?>" class="card-img-top" alt="...">
                  <div class="card-body blog-content">
                    <h3 class="card-title"><b><?= $blog->blog_name ?></h3></b>
                    <hr style="border:1px solid #000; padding:0px 0px 0px 0px;">
                    <b><?= date('d-m-Y', strtotime($blog->blog_date)) ?></b>
                   
                  </div>
                </div>
              </a>

            </div>
            <?php endforeach;?>
          </div>
        </div>

                </div>
            </div>
        </section>
        <?php endforeach?>
         <!-- End Of Blogs Description  -->
          <!-- FOOTER -->

  <!-- FOOTER -->
</body>
</html>
