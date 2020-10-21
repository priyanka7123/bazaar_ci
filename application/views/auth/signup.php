<div class="container mt-5">
    <div class="row">
        <div class="col-lg-4 mx-auto">
          <div class="card">
             <div class="card-body">
             <?= form_open("auth/signup");?>
        
                     <div class="form-group">
                         <label for=""  m-0 p-0">Name</label>
                         <input type="text" class="form-control" name="name">
                     </div>
                     <div class="form-group">
                             <label for=""  m-0 p-0">Contact</label>
                         <input type="text" class="form-control" name="contact">
                     </div>
                     <div class="form-group">
                         <label for=""  m-0 p-0">Email</label>
                         <input type="text" class="form-control" name="email">
                     </div>
                      <div class="form-group">
                          <label for=""  m-0 p-0">Password</label>
                          <input type="text" class="form-control" name="password">
                      </div>
                     <div class="form-group">
                         <input type="submit" class="btn btn-success" name="send">
                     </div>
              <?= form_close();?>
             </div>
          </div>  
        </div>
    </div>
</div>