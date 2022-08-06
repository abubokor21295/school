@extends('layout.erp.app')
@section('title','payment')


@section('page')
<style>
  #trht tr {
    border-collapse: collapse;
    border: 1px solid black;
  }
</style>
<div class="content-wrapper">
  <div id="printableArea" class="card" style="margin:0 auto;width:700px;padding-left:20px ;border: 2px solid gray;">
    <div class="card-body">
      <div class="container mb-5 mt-3">
        <div class="row d-flex align-items-baseline">
          <div class="col-xl-9">
            <img src="{{asset('img/logo-4.png')}}" width="80" alt="">
          </div>
          <div class="col-xl-3 float-end">
            <!-- <a class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark"><i class="fas fa-print text-primary"></i> Print</a>
                    <a class="btn btn-light text-capitalize" data-mdb-ripple-color="dark"><i class="far fa-file-pdf text-danger"></i> Export</a> -->
          </div>
          <hr>
        </div>

        <div class="container">
          <div class="col-md-12">
            <div class="text-center">
              <div style="font-size:20px;color:Teal;font-weight: bold;">MotherHood Public School</div>
              <span style="color:Teal;font-weight: bold;"> Janatabug, Kadamtoli, Dhaka-1236</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="text-center">
              <div style="font-size:20px;color:gray;font-weight: bold;margin-top:20px">Money Receipt</div>

            </div>
          </div>
          <br>
          <br>

          <div class="row">
            <div class="col-xl-7">
              <div class="col-xl-6">
                
                <?php
                foreach ($payment as $value) {
                  $name = $value->name;
                  $date = $value->created_at;
                  $id = $value->id;
                  $remark = $value->remark;
                  $amount=$value->amount;
                  $roll=$value->roll;
                  $section=$value->section;
                  $sessions=$value->sessions;
                 } ?>
              </div>
              <div id="student-info">
                <table>
                  <tr><th>Student's Name </th><td><?php echo $name; ?></td></tr>
                  <tr><th>Section </th><td><?php echo $section; ?></td></tr>
                  <tr><th>Session </th><td><?php echo $sessions; ?></td></tr>
                  <tr><th>Roll </th><td><?php echo $roll; ?></td></tr>
                </table>
              </div>
            </div>
            <div class="col-xl-5">

              <ul class="list-unstyled">
                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span class="fw-bold">Payment ID :  </span><?php echo $id ?></li>
                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span class="fw-bold">Date: </span><?php echo $date ?></li>
              </ul>
            </div>
          </div>

          <div class="row my-2 mx-1 justify-content-center">
            <table class="table table-striped table-borderless">
              <thead class="text-dark" id="trht">
                <tr>
                  <th scope="col">SL</th>
                  <th scope="col">Service Description</th>
                  <th scope="col">Fee</th>
                  <th scope="col">Qty</th>
                  <th scope="col">Sub-total</th>
                </tr>

              </thead>
              <tbody id="trht">
                <?php
                $i = 1;
                $subtotal = 0;
                $total = 0;
                foreach ($details as $detail) {
                  $subtotal = $detail->fee * $detail->qty;
                  $total += $subtotal;
                ?>
                  <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $detail->service ?></td>
                    <td><?php echo $detail->fee ?></td>
                    <td><?php echo $detail->qty ?></td>
                    <td><?php echo $subtotal ?></td>






                  </tr>
                <?php } ?>

              </tbody>
              <tfoot>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th colspan="4" class="text-black float-right">Total Amount (taka)</th>
                  <th><?php echo $total; ?></th>
                </tr>
              </tfoot>
            </table>
          </div>
          <div class="row">
            Remark : <br>
            <?php echo $remark ?>
          </div>
          <hr>
          <div class="row">
            <div class="col-xl-10">
              <p>Preserve the Student copy as your document</p>
            </div>
            <div class="col-xl-2">
              <button type="button" id="btnPrint" onclick="printDiv('printableArea')" class="btn btn-primary text-capitalize" style="background-color:#60bdf3 ;">Print</button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>



<script>
  function printDiv(printableArea) {
    var printContents = document.getElementById(printableArea).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
  }
</script>
@endsection