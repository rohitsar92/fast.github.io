<?php
    echo ='<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
   
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
    <!-- Main content ------------------------------------------------------>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label >Title Of Images</label>
                    <input type="text" name="text" class="form-control" id="text" placeholder="Enter Your Image Title">
                  </div>

                  <div class="form-group mb-3">
                    <label>Image</label> <br>
                    <input type="file" name="image" id="image" class="">
                   
                  </div>
                  
                  <div class="custom-control custom-radio float-left">
                    <input class="custom-control-input" value="1" type="radio" id="statusActive" name="status" checked="">
                    <label for="statusActive" class="custom-control-label">Active</label>
                  </div>

                  <div class="custom-control custom-radio float-left ml-3">
                      <input class="custom-control-input" value="0" type="radio" id="statusBlock" name="status">
                      <label for="statusBlock" class="custom-control-label">Block</label>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>
          <div class="col-md-6">

          </div>
        </div>
      </div>
    </section>

    <!------------------------------------------------------------------------------------------>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>';

?>

