<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NatureS</title>
</head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-success border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal text-light">NatureS</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-light" href="http://localhost/TokoOnline/">Home</a>
    <a class="p-2 text-light" href="#">Products</a>
    <a class="p-2 text-light" href="#">Support</a>
    <a class="p-2 text-light" href="#">Cart</a>
  </nav>
  <a class="btn btn-outline-light bg-success login-btn" href="<?php echo base_url(); ?>index.php/login">Login</a>
</div>

  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-success">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="lead font-weight-normal text-white">Selamat datang  (￣▽￣)ノ</h1>
  </div>
</div>

<div class="container mx-auto" style="padding: 0px 0px 0px 70px;">
  <div class="row">
    <?php foreach ($products as $product): ?>
        
      <div class="card shadow .p-5" style="width: 220px; margin-right: 50px; margin-top: 100px;">
      <img class="card-img-top" style="margin: 25px 0px 15px 30%; width: 40%;" src="<?php echo base_url('upload/product/'.$product->image) ?>" width="80">
        <div card="card-body">
          <h5 class="card-title align-middle" style="margin: 0px 0px 0px 25%;"><?php echo $product->name ?></h5>
          <p class="card-text" style="margin: 40px 0px 0px 10%;">IDR <?php echo $product->price ?></p>
        </div>
        <div class="card-footer" style="margin: 20px 0px 0px 0px;">
          <button href="<?php echo site_url('admin/products/delete/'.$product->product_id) ?>" class="btn btn-success">Beli</button>
        </div>
      </div>
          
    <?php endforeach; ?>
  </div>
</div>

<footer class="container bg-light py-5" style="margin-top: 100px;">
  <div class="row">
    <div class="col-12 col-md">
      <h5>by Fachry Syah Alam</h5>
      <small class="d-block mb-3 text-muted"> with a bit of copy pasting</small>
      <small class="d-block mb-3 text-muted">&copy; 2019</small>
    </div>
    <div class="col-6 col-md">
      <h5>Contact us</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted">fachrysyahalam@gmail.com</a></li>
        <br>
        <li><a class="text-muted">fachrysyahalam@yahoo.co.id</a></li>
        <br>
        <li><a class="text-muted">+62 812-8869-5352</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Support Us!</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted">We need advice</a></li>
      </ul>
    </div>
  </div>
</footer>
</body>
</html>