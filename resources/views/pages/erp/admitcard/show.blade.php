@extends("layout.erp.app")

@section("page")

<?php
// if (isset($_POST["btnDetails"])) {
// 	$admitcard = Admitcard::find($_POST["txtId"]);
// 	$stu = Student::find($admitcard->student_id);
// 	$cl = Classe::find($admitcard->class_id);
// 	//$section=Section::find($admission->section_id);


//}
?>



<div class="content-wrapper">
  <div class="p-4">

    <a class="btn btn-success" href="admitcards">Manage Admitcard</a>

    <div class="container shadow demo-wrap">

      <div class='demo-content' id=printableArea>
        <table class='table'>
          <thead>
            <tr>
              <td align="right" style="float:left;margin-left:20px"><img src="{{asset('img/logo-4.png')}}" width="80" alt="" style="padding-left:0"></td>
              <td align="center">

                <div style="float:left;margin-left:30px">
                  <span style=" font-size: 25pt;font-style: normal;font-weight: bold;"><strong>MotherHood Public School</strong></span>
                  <span style=" font-size: 11pt;font-style: normal;font-weight: bold;"></br>Janatabug, Kadamtoli, Dhaka-1236</span>
                  <h2>Admit Card</h2>
                </div>
              </td>
              <td></td>
            </tr>
          </thead>


          <tbody>
            <tr>
              <th>Id : </th>
              <td></td>
            </tr>
            <tr>
              <th>Name : </th>
              <td></td>
            </tr>
            <tr>
              <th>Class : </th>
              <td></td>
            </tr>
            <tr>
              <th>Academic Year : </th>
              <td></td>
            </tr>
            <tr>
              <th>Depart : </th>
              <td></td>
            </tr>
            <tr>
              <th>Roll : </th>
              <td></td>
            </tr>
          </tbody>

          <tfoot>
            <tr>
            <th></th>
            <th></th>
            </tr>
            <tr>
            <th>signature of class teacher</th>
            <th>signature of head teacher</th>
            </tr>

          </tfoot>

        </table>
      </div>
    </div>
  </div>

  <input type="button" style="margin: 10px 30px;padding:20px" class="btn btn-info fs-4" onclick="printDiv('printableArea')" value="Print" name="print" />
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