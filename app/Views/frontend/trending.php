
    <!-- ================ trending product section start ================= -->  
    <section class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
          <p>Newest Stuff</p>
          <h2>Grab it <span class="section-intro__style">Fast</span></h2>
        </div>
        <div class="row">
          <?php foreach($item as $row){?>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="<?php echo base_url('upload').'/'.$row['image']?>" alt="">
                <ul class="card-product__imgOverlay">
                  <li>Due date : <?= $row['expired_date']; ?></li>
                  <!-- <li><button><i class="ti-shopping-cart"></i></button></li>
                  <li><button><i class="ti-heart"></i></button></li> -->
                </ul>
              </div>
              <div class="card-body">
                <p><?= $row['category'];?></p>
                <h4 class="card-product__title"><a href="<?= base_url('product/getproduct').'/'.$row['item_id'];?>"><?= $row['item_name'];?></a></h4>
                <p class="card-product__price"></p>
              </div>
            </div>
          </div>
        <?php }?>
          
        </div>
      </div>
    </section>
    <!-- ================ trending product section end ================= -->  
