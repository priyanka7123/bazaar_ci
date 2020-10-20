<div class="container">
   <div class="row">
      <div class="col-lg-3">
      
           <div class="list-group">
               <a href="" class="list-group-item list-group-item-action">Home</a>
               <a href="" class="list-group-item list-group-item-action">Product</a>
               <a href="" class="list-group-item list-group-item-action">Category</a>
               <a href="" class="list-group-item list-group-item-action">Coupons</a>
               <a href="" class="list-group-item list-group-item-action">Orders</a>
               <a href="" class="list-group-item list-group-item-action">Users</a>
               <a href="" class="list-group-item list-group-item-action">Logout</a>
           </div>
      </div>
      <div class="col-lg-9">
          <div class="card">
              <div class="card-body">
                 <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" value="<?= set_value('title');?>">
                            <?= form_error('title');?>
                        </div>
                        <div class="form-group">
                            <label for="">price</label>
                            <input type="text" name="price" class="form-control" value="<?= set_value('price');?>">
                            <?= form_error('price');?>
                        </div>
                        <div class="form-group">
                            <label for="">discount_price</label>
                            <input type="text" name="discount_price" class="form-control" value="<?= set_value('discount_price');?>">
                            <?= form_error('discount_price');?>
                        </div>
                        <div class="form-group">
                            <label for="">brand</label>
                            <input type="text" name="brand" class="form-control" value="<?= set_value('brand');?>">
                            <?= form_error('brand');?>
                        </div>
                        <div class="form-group">
                            <label for="">model</label>
                            <input type="text" name="model" class="form-control" value="<?= set_value('model');?>">
                            <?= form_error('model');?>
                        </div>
                        <div class="form-group">
                            <label for="">category</label>
                            <select name="category" class="form-control">
                            <?php foreach($category as $cat):?> 
                                <option value="<?= $cat->id;?>"><?= $cat->title;?></option>
                            <?php endforeach; ?>
                            </select>
                            <?= form_error('category');?>
                        </div>
                        <div class="form-group">
                            <label for="">image</label>
                            <input type="file" name="image" class="form-control">
                            <?= form_error('image');?>
                        </div>
                        <div class="form-group">
                            <label for="">description</label>
                            <textarea type="text" name="description" class="form-control"><?= set_value('description');?></textarea>
                            <?= form_error('description');?>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success float-right">
                        </div>
                    </form>
              </div>
          </div>
      </div>
   </div>
</div>