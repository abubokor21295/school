@extends("layout.erp.app")

@section("page")

<section class="vh-100" style="background-color: #9de2ff;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-md-11 col-lg-9 col-xl-7">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-3">
            <div class="d-flex text-black">
              <div class="flex-grow-1 p-3  ms-3">
                <h5 class="mb-1">  <?php //echo $user['full_name'] ?></h5>
                <p class="mb-2 pb-1" style="color: #2b2a2a;">Role : <?php //echo $user['role_id'] ?></p>
                <div class="col-lg-12">
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">ID</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0"><?php echo $clas['id'] ?></p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Class Name</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0"><?php echo $clas['name'] ?></p>
                        </div>
                      </div>
                      <!-- <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0"><?php //echo $user['email'] ?></p>
                        </div>
                      </div>
                      <hr> -->
                      <!-- <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Phone</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0"><?php //echo $user['mobile'] ?></p>
                        </div>
                      </div> -->
                      <hr>
                      <!-- <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Address</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>
                <div class="d-flex pt-1">
                  <button type="button" class="btn btn-outline-primary me-1 flex-grow-1">Chat</button>
                  <button type="button" class="btn btn-primary flex-grow-1">Follow</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection