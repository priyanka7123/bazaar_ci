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
                   <img src="https://www.ikea.com/in/en/images/products/millberget-swivel-chair-bomstad-black__0724719_PE734602_S5.JPG" class="w-100 border border-muted" alt="">
                   <div class="card-body">
                        <h2 class="lead">this is title</h2>
                        <p class="small">furniture</p>
                        <h2>rs 500/-</h2>
                   </div>
              </div>
          </div>
       <?php endforeach;?>
       </div>
     </div>

    </div>
</div>