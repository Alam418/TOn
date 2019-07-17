<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard · NatureS</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fa/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dashboard.css">

  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">NatureS Admin Dashboard</a>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="<?php echo site_url('admin/c_admin/logout'); ?>">Logout</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/TokoOnline/index.php/admin/c_admin">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="http://localhost/TokoOnline/index.php/admin/products">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/TokoOnline/index.php/laporanpdf">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Products</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
      </div>

      <div class="card mb-3">
      <div class="card-header">
        <a href="<?php echo site_url('admin/products/add') ?>"><i class="fas fa-plus"></i> Add New</a>
      </div>
      <div class="card-body">

        <div class="table-responsive">
          <table class="table table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-dark">
              <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Photo</th>
                <th>Description</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($products as $product): ?>
              <tr>
                <td width="150">
                  <?php echo $product->name ?>
                </td>
                <td>
                  <?php echo $product->price ?>
                </td>
                <td>
                  <img src="<?php echo base_url('upload/product/'.$product->image) ?>" width="64" />
                </td>
                <td class="small">
                  <?php echo substr($product->description, 0, 120) ?>...</td>
                <td width="250">
                  <a href="<?php echo site_url('admin/products/edit/'.$product->product_id) ?>"
                    class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                  <a onclick="deleteConfirm('<?php echo site_url('admin/products/delete/'.$product->product_id) ?>')"
                    href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                </td>
              </tr>
              <?php endforeach; ?>

            </tbody>
          </table>
        </div>

        <?php $this->load->view("admin/modal.php") ?>
    </main>
  </div>
</div>

        
        <script src="dashboard.js"></script>
        <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script>
          function deleteConfirm(url){
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
          }
        </script>
  </body>
</html>
