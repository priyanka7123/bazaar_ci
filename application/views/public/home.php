<div class="container-fluid p-0">
    <div class="row no-gutters">
     <div class="col-lg-2" style="position:fixed; height:95vh; overflow-y:scroll">
        <?php include_once(APPPATH."views/public/side.php");?>
     </div>
     <div class="col-lg-10 p-4" style="position:absolute;right:0">
       <div class="row">
       <?php foreach($product as $item):?>
          <div class="col-lg-3">
              <div class="card border-0">
              <a href="<?= base_url('home/product/'.$item->id);?>" class="stretched-link"></a>
                  <img src="<?= base_url('assets/'.$item->image);?>" class="w-100 border border-muted" alt="">
              </a>
                   <div class="card-body">
                        <h2 class="lead"><?= $item->title;?></h2>
                        <p class="small"><?= $item->category;?></p>
                        <h2>Rs. <?= $item->discount_price;?><small><del><?= $item->price;?>/-</del></small></h2>
                   </div>
              </div>
          </div>
       <?php endforeach;?>
       </div>
     </div>

    </div>
</div>