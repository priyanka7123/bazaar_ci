<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bazaar</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
   <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
          </button>
         <a class="navbar-brand" href="#">
              <img src="<?= base_url('assets/logo.png');?>" alt="" class="w-100">
           </a>
         <form class="form-inline my-2 my-lg-2 mx-auto">
             <input class="form-control mr-sm-2 " type="search" size="50" placeholder="Search" aria-label="Search">
             <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
         </form>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">about</a>
           </li>
     
            <li class="nav-item">
              <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true">carts <sup><span class="badge badge-danger badge-pill">0</span></sup></a>
            </li>

              <?php if($this->session->userdata('admin')):?>
            <li class="nav-item">
              <a class="btn btn-danger" href="#" tabindex="-1" aria-disabled="true">Logout</a>
            </li>
              <?php endif; ?>
         </ul>
    
       </div>
   </div>
  
</nav>
<br>
<br>
<body>
    
