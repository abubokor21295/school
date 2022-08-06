@extends("layout.erp.app")

@section("page")
<div class="content-wrapper">
  <?php

  foreach ($accounts as $account) {
    $fathers_name = $account->fathers_name;
    $mothers_name = $account->mothers_name;
    $name = $account->name;
    $photo = $account->photo;
    $phone = $account->phone;
    $birth_date = $account->birth_date;
    $amount = $account->amount;
  }
  ?>

  <section class="" style="background-color: #9de2ff;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-md-11 col-lg-9 col-xl-7">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-3">
              <div class="d-flex text-black">

                <div class="flex-grow-1 p-3  ms-3">
                  <div class="col-lg-12">
                    <div class="card mb-4">
                      <div class="card-body">
                        <div class="row d-flex justify-content-center align-items-center">

                            <img src="{{asset('img/admission')}}/<?php echo $photo ?>" alt="Generic placeholder image" class="img-fluid" style="border-radius: 10px;width: 200px;">
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-5">
                            <p class="mb-0">Name</p>
                          </div>
                          <div class="col-sm-7">
                            <p class="text-muted mb-0"><?php echo $name ?></p>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-5">
                            <p class="mb-0">Father's Name</p>
                          </div>
                          <div class="col-sm-7">
                            <p class="text-muted mb-0"><?php echo $fathers_name ?></p>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-5">
                            <p class="mb-0">Mother's Name</p>
                          </div>
                          <div class="col-sm-7">
                            <p class="text-muted mb-0"><?php echo $mothers_name ?></p>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-5">
                            <p class="mb-0">Phone</p>
                          </div>
                          <div class="col-sm-7">
                            <p class="text-muted mb-0"><?php echo $phone ?></p>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-5">
                            <p class="mb-0">Date Of Birth</p>
                          </div>
                          <div class="col-sm-7">
                            <p class="text-muted mb-0"><?php echo $birth_date ?></p>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                        <style>
                            #table1{
                              border: 1px dotted greenyellow;
                              width: 100%;

                            }
                            
                        </style>
                        <table id="table1">
                            <tr ><th>Date</th><th>Remark</th><th>Amount</th></tr>
                            <?php  
                            $total=0;
                            foreach ($accounts as $account) {
                           echo "<tr>
                           <td>$account->created_at</td>
                           <td>$account->remark</td>
                           <td>$account->amount</td>
                           
                           
                           </tr>";
                           $total+=$account->amount;
                            }
                            ?>
                            <tr><th colspan="2">Payable Amount</th><td><?php echo $total ?></td></tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection