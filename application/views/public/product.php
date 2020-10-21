<div class="container-fluid p-0">
    <div class="row no-gutters">
     <div class="col-lg-2" style="position:fixed; height:95vh; overflow-y:scroll">
                <?php include_once(APPPATH."views/public/side.php");?>

     </div>
     <div class="col-lg-10 p-4" style="position:absolute;right:0">
       <div class="row">
          <div class="col-lg-12">
          <div class="row">
             <div class="col-lg-3">
                  <img src="<?= base_url('assets/'.$product->image);?>" class="w-100 border border-muted" alt="">

             </div>
               <div class="col-lg-9">
                
            
                   <div class="card border-0">
                        <div class="card-body">
                             <h2 class="lead"><?= $product->title;?></h2>
                             <p class="small"><?= $product->category;?></p></p>
                             <h2>Rs. <?= $product->discount_price;?> <small><del><?= $product->price;?>/-</del></small></h2>
                             <a href="" class="btn btn-success">Add to cart</a>
                        </div>
                   </div>
                </div>
          </div>
       </div>
     </div>
          </div>

    </div>
</div>