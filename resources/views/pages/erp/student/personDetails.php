<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Persons Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Persons</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
   
    <section style="background-color: #eee;">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-md-9 col-lg-7 col-xl-5">
            <div class="card text-black ">
              <div class="text-center d-flex justify-content-center pt-3 pb-1 px-3">
                <img src="<?php echo base_url()."/public/img/{$row['photo']}"?>" width="200"  alt="image of <?php echo $row["name"]; ?>" />
              </div>
              
              <div class="card-body">
                <div class="text-center d-flex justify-content-center">
                  <h5 class="card-title"><span class="font-weight-bold"><?php echo $row["name"]; ?></span></h5>
                </div>
                <div><br>
                  <div class="d-flex justify-content-between">
                    <span class="font-weight-bold">Id</span><span><?php echo $row["id"]; ?></span>
                  </div>
                  <div>
                  <div class="d-flex justify-content-between">
                  <span class="font-weight-bold">Position</span><span><?php echo $row["position"]; ?></span>
                  </div>
                  <div class="d-flex justify-content-between">
                    <span class="font-weight-bold">Mobile</span><span><?php echo $row["mobile"]; ?></span>
                  </div>
                  <div class="d-flex justify-content-between">
                    <span class="font-weight-bold">Email</span><span><?php echo $row["email"]; ?></span>
                  </div>
                </div>
                <div class="d-flex justify-content-between total  mt-4">
                  <span class="font-weight-bold">Address</span><span>Madinabug, Kadamtoli, Dhaka-1236</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Main content -->
</div>