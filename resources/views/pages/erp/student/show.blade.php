@extends("layout.erp.app")

@section("page")

<section class="vh-100" style="background-color: #9de2ff;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-md-11 col-lg-9 col-xl-7">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-3">
            <div class="d-flex text-black">
              <div class="flex-shrink-0 me-3 h-80">
                <img src="{{asset('img/student')}}/{{$student->photo}}" alt="Generic placeholder image" class="img-fluid" style="width: 200px; border-radius: 10px;">
              </div>
              <div class="flex-grow-1 p-3  ms-3">
                <div class="col-lg-12">
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-5">
                          <p class="mb-0">Name</p>
                        </div>
                        <div class="col-sm-7">
                          <p class="text-muted mb-0"><?php echo $student['name'] ?></p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-5">
                          <p class="mb-0">Father's Name</p>
                        </div>
                        <div class="col-sm-7">
                          <p class="text-muted mb-0"><?php echo $student['fathers_name'] ?></p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-5">
                          <p class="mb-0">Mother's Name</p>
                        </div>
                        <div class="col-sm-7">
                          <p class="text-muted mb-0"><?php echo $student['mothers_name'] ?></p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-5">
                          <p class="mb-0">Phone</p>
                        </div>
                        <div class="col-sm-7">
                          <p class="text-muted mb-0"><?php echo $student['phone'] ?></p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-5">
                          <p class="mb-0">Address</p>
                        </div>
                        <div class="col-sm-7">
                          <p class="text-muted mb-0"><?php echo $student['address'] ?></p>
                        </div>
                      </div>
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