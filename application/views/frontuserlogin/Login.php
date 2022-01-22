
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Fast | Login Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url()?>public/admin/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>public/admin/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url()?>public/admin/plugins/summernote/summernote-bs4.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Fast</b></a>
  </div>

  

  <div class="card">
    <div class="card-body login-card-body">
      <div class="text-danger text-center p-3">
        <b><?php echo $this->session->flashdata('mess');?></b>
      </div>
    <div class="text-center p-3">
      <img src="https://source.unsplash.com/304x236/?about,apple" class="rounded-circle" alt="Cinque Terre" width="150" height="100"> 
    </div>
      
      <form method="post" action="<?php echo site_url('frontuserlogin/Register/userlogin'); ?>">
        <div class="input-group mb-3">
          <input type="username" class="form-control" name="username" id="username" placeholder="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" id="password" placeholder="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">SIGN IN</button>
          </div>
        </div>
      </form>

      <br>
        <div class="row">
          <div class="col-12">
            <a href="<?php echo site_url('frontuserlogin/Register/insertuser'); ?>"><button class="btn btn-danger btn-block">SIGN UP</button></a>
          </div>
        </div>
    </div>
  </div>
</div>
<script src="<?php echo base_url()?>public/admin/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url()?>public/admin/dist/js/adminlte.min.js"></script>

</body>
</html>
