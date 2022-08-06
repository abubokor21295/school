@extends('layout.erp.app')
@section('title','result')


@section('page')
<div class="content-wrapper">

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <div class="row">
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
                    <div class="col-md-12">
                        <div class="text-center">
                            <div style="font-size:20px;color:Teal;font-weight: bold;">MotherHood Public School</div>
                            <span style="color:Teal;font-weight: bold;"> Janatabug, Kadamtoli, Dhaka-1236</span>
                        </div>
                    </div>
                </div>
                <br><br>
                <!-- modal Start -->
                <div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Search By Class
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Search Result by Class</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="col-xl-6">
                                                Class's Name: <br>
                                                <select name="cmbClass" class="form-control" id="cmbClass">
                                                    <?php foreach ($clas as $clase) { ?>

                                                        <option value="<?php echo $clase['id'] ?>"><?php echo $clase['name'] ?></option>


                                                    <?php }; ?>
                                                </select>
                                                <div id="clas-info">

                                                </div>
                                            </div><br>

                                            <div class="col-xl-6">
                                                Subject's Name: <br>
                                                <select name="cmbSubject" class="form-control" id="cmbSubject">
                                                    <?php foreach ($subjects as $subject) { ?>
                                                        <option value="<?php echo $subject['id'] ?>"><?php echo $subject['name'] ?></option>
                                                    <?php }; ?>
                                                </select>
                                                <div id="subject-info">

                                                </div>
                                            </div><br>


                                        </div>
                                        <div class="col-xl-6">
                                            <div class="col-xl-6">
                                                Department: <br>
                                                <select name="cmbDepartment" class="form-control" id="cmbDepartment">
                                                    <?php foreach ($departments as $department) { ?>
                                                        <option value="<?php echo $department['id'] ?>"><?php echo $department['name'] ?></option>
                                                    <?php }; ?>
                                                </select>
                                                <div id="department-info">

                                                </div>
                                            </div><br>
                                            <div class="col-xl-6">
                                                Exam Type: <br>
                                                <select name="cmbExamType" class="form-control" id="cmbExamType">
                                                    <?php foreach ($examTypes as $examtype) { ?>
                                                        <option value="<?php echo $examtype['id'] ?>"><?php echo $examtype['name'] ?></option>
                                                    <?php }; ?>
                                                </select>
                                                <div id="room-info">

                                                </div>
                                            </div><br>


                                        </div>
                                        <div class="col-xl-6">
                                            <div class="col-xl-6">
                                                Section: <br>
                                                <select name="cmbSection" class="form-control" id="cmbSection">
                                                    <?php foreach ($sections as $section) { ?>
                                                        <option value="<?php echo $section['id'] ?>"><?php echo $section['name'] ?></option>
                                                    <?php }; ?>
                                                </select>
                                                <div id="room-info">

                                                </div>
                                            </div><br>


                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cencel</button>
                                    <button type="submit" id="btnSearch" data-dismiss="modal">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal end -->
                <br>
                <!-- modal 2 Start -->
                <!-- nested modal -->
                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalToggleLabel"> Search By Admission ID</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="col-xl-6">
                                            Admission Id: <br>
                                            <input type="text" id="cmbAdmission" name="cmbAdmission">
                                        </div><br>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="col-xl-6">
                                            Exam Type: <br>
                                            <select name="cmbExamType2" class="form-control" id="cmbExamType2">
                                                <?php foreach ($examTypes as $examtype) { ?>
                                                    <option value="<?php echo $examtype['id'] ?>"><?php echo $examtype['name'] ?></option>
                                                <?php }; ?>
                                            </select>
                                            <div id="room-info">

                                            </div>
                                        </div><br>


                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" id="btnSearch2" data-bs-dismiss="modal">Search</button>
                            </div>
                            <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cencel</button>
                                    <button type="submit" id="btnSearch2" data-dismiss="modal">Search</button>
                                </div> -->
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalToggleLabel2">Marksheet</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" id="printableArea">
                                <section class="" style="background-color: #9de2ff;">
                                    <div class="container py-5 h-100">
                                        <div class="row d-flex justify-content-center align-items-center h-100">
                                            <div class="col col-md-12 col-lg-12 col-xl-12">
                                                <div class="card" style="border-radius: 15px;">
                                                    <div class="card-body p-3">
                                                        <div class="d-flex text-black">

                                                            <div class="flex-grow-1 p-3  ms-3">
                                                                <div class="col-lg-12">
                                                                    <div class="card mb-4">
                                                                        <div class="card-body">
                                                                            <div class="row d-flex justify-content-center align-items-center">

                                                                                <!-- <img src="{{asset('img/admission')}}/<?php //echo $photo 
                                                                                                                            ?>" alt="Generic placeholder image" class="img-fluid" style="border-radius: 10px;width: 200px;"> -->
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-sm-5">
                                                                                    <p class="mb-0">Name</p>
                                                                                </div>
                                                                                <div class="col-sm-7">
                                                                                    <p class="text-muted mb-0" id="ModalName"></p>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-sm-5">
                                                                                    <p class="mb-0">Father's Name</p>
                                                                                </div>
                                                                                <div class="col-sm-7">
                                                                                    <p class="text-muted mb-0" id="fName"></p>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-sm-5">
                                                                                    <p class="mb-0">Mother's Name</p>
                                                                                </div>
                                                                                <div class="col-sm-7">
                                                                                    <p class="text-muted mb-0" id="mName"></p>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-sm-5">
                                                                                    <p class="mb-0">Registration No</p>
                                                                                </div>
                                                                                <div class="col-sm-7">
                                                                                    <p class="text-muted mb-0" id="reg"></p>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-sm-5">
                                                                                    <p class="mb-0">Date Of Birth</p>
                                                                                </div>
                                                                                <div class="col-sm-7">
                                                                                    <p class="text-muted mb-0" id="dob"></p>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <style>
                                                                                    #table1 {
                                                                                        border: 1px dotted greenyellow;
                                                                                        width: 100%;

                                                                                    }
                                                                                </style>
                                                                                <table id="table1">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th id="examType"></th>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>SL NO</td>
                                                                                            <td>Subject</td>
                                                                                            <td>marks</td>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody id="ModalId">

                                                                                    </tbody>
                                                                                    <tfoot>
                                                                                        <th></th>
                                                                                        <th>Total Marks</th>
                                                                                        <th id="total_marks"></th>
                                                                                    </tfoot>



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
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                <button type="button" id="btnPrint" onclick="printDiv('printableArea')" class="btn btn-primary text-capitalize" style="background-color:#60bdf3 ;">Print</button>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Search By Registration ID</a>
                <!-- modal 2 end -->


                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>exam</th>
                                <td id="examtype"></td>
                            </tr>
                            <tr>
                                <th>class</th>
                                <td id="clas"></td>
                            </tr>
                            <tr>
                                <th>section</th>
                                <td id="section"></td>
                            </tr>

                            <tr>


                                <th>Student</th>
                                <th>marks</th>

                            </tr>

                        </thead>
                        <tbody class="form-check" id="student">


                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {



        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#btnSearch2").on("click", function() {

            let exam_type = $("#cmbExamType2").val()
            let admission = $("#cmbAdmission").val()

            $.ajax({
                url: "{{url('index.php/api/myResult')}}",
                type: "post",
                data: {
                    "exam_type": exam_type,
                    "admission": admission
                },
                success: function(res) {
                    //console.log(res)
                    let data = JSON.parse(res)
                    //console.log(data.results)
                    let i = 1;
                    let html = ``;
                    let name = ``;
                    let fName = ``;
                    let mName = ``;
                    let dob = ``;
                    let admission = ``;
                    let total_marks = ``;

                    data.results.forEach(result => {
                        name = `${result.name}`
                        fName = `${result.fathers_name}`
                        mName = `${result.mothers_name}`
                        dob = `${result.birth_date}`
                        admission = `${result.admission_id}`
                        total_marks += `${result.obt_marks}`
                        html += `
                          <tr>
                            <td>${i++}</td>
                            <td>${result.subjects}</td>
                            <td>${result.obt_marks}</td>
                            
                          </tr>`;


                        //   console.log(result.id)
                    });


                    $("#ModalId").html(html)
                    $("#ModalName").html(name)
                    $("#fName").html(fName)
                    $("#mName").html(mName)
                    $("#dob").html(dob)
                    $("#reg").html(admission)
                    $("#total_marks").html(total_marks)

                }
            })
        })

        $("#btnSearch").on("click", function() {


            let exam_type = $("#cmbExamType").val()
            let clas = $("#cmbClass").val()
            let subject = $("#cmbSubject").val()
            let department = $("#cmbDepartment").val()
            let section = $("#cmbSection").val()


            $.ajax({
                url: "{{url('index.php/api/ClassResult')}}",
                type: "post",
                data: {
                    "exam_type": exam_type,
                    "clas": clas,
                    "subject": subject,
                    "department": department,
                    "section": section
                },
                success: function(res) {
                    //console.log(res)
                    let data = JSON.parse(res)
                    // console.log(data.results)
                    let r = ``;
                    let examtype = ``;
                    let clas = ``;
                    let section = ``;
                    let student = ``;
                    let marks = ``;
                    data.results.forEach(result => {

                        examtype = `${result.examtype}`
                        clas = `${result.class}`
                        section = `${result.section}`
                        r += `<tr> <td>${result.student}</td>
                        <td>${result.obt_marks}</td> </tr>`


                    });


                    $("#examtype").html(examtype)
                    $("#clas").html(clas)
                    $("#section").html(section)
                    $("#student").html(r)


                }
            })
        })

    })
</script>

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
@extends('layout.erp.app')
@section('title','result')


@section('page')
<div class="content-wrapper">

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <div class="row">
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
                    <div class="col-md-12">
                        <div class="text-center">
                            <div style="font-size:20px;color:Teal;font-weight: bold;">MotherHood Public School</div>
                            <span style="color:Teal;font-weight: bold;"> Janatabug, Kadamtoli, Dhaka-1236</span>
                        </div>
                    </div>
                </div>
                <br><br>
                <!-- modal Start -->
                <div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Search By Class
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Search Result by Class</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="col-xl-6">
                                                Class's Name: <br>
                                                <select name="cmbClass" class="form-control" id="cmbClass">
                                                    <?php foreach ($clas as $clase) { ?>

                                                        <option value="<?php echo $clase['id'] ?>"><?php echo $clase['name'] ?></option>


                                                    <?php }; ?>
                                                </select>
                                                <div id="clas-info">

                                                </div>
                                            </div><br>

                                            <div class="col-xl-6">
                                                Subject's Name: <br>
                                                <select name="cmbSubject" class="form-control" id="cmbSubject">
                                                    <?php foreach ($subjects as $subject) { ?>
                                                        <option value="<?php echo $subject['id'] ?>"><?php echo $subject['name'] ?></option>
                                                    <?php }; ?>
                                                </select>
                                                <div id="subject-info">

                                                </div>
                                            </div><br>


                                        </div>
                                        <div class="col-xl-6">
                                            <div class="col-xl-6">
                                                Department: <br>
                                                <select name="cmbDepartment" class="form-control" id="cmbDepartment">
                                                    <?php foreach ($departments as $department) { ?>
                                                        <option value="<?php echo $department['id'] ?>"><?php echo $department['name'] ?></option>
                                                    <?php }; ?>
                                                </select>
                                                <div id="department-info">

                                                </div>
                                            </div><br>
                                            <div class="col-xl-6">
                                                Exam Type: <br>
                                                <select name="cmbExamType" class="form-control" id="cmbExamType">
                                                    <?php foreach ($examTypes as $examtype) { ?>
                                                        <option value="<?php echo $examtype['id'] ?>"><?php echo $examtype['name'] ?></option>
                                                    <?php }; ?>
                                                </select>
                                                <div id="room-info">

                                                </div>
                                            </div><br>


                                        </div>
                                        <div class="col-xl-6">
                                            <div class="col-xl-6">
                                                Section: <br>
                                                <select name="cmbSection" class="form-control" id="cmbSection">
                                                    <?php foreach ($sections as $section) { ?>
                                                        <option value="<?php echo $section['id'] ?>"><?php echo $section['name'] ?></option>
                                                    <?php }; ?>
                                                </select>
                                                <div id="room-info">

                                                </div>
                                            </div><br>


                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cencel</button>
                                    <button type="submit" id="btnSearch" data-dismiss="modal">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal end -->
                <br>
                <!-- modal 2 Start -->
                <!-- nested modal -->
                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalToggleLabel"> Search By Admission ID</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="col-xl-6">
                                            Admission Id: <br>
                                            <input type="text" id="cmbAdmission" name="cmbAdmission">
                                        </div><br>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="col-xl-6">
                                            Exam Type: <br>
                                            <select name="cmbExamType2" class="form-control" id="cmbExamType2">
                                                <?php foreach ($examTypes as $examtype) { ?>
                                                    <option value="<?php echo $examtype['id'] ?>"><?php echo $examtype['name'] ?></option>
                                                <?php }; ?>
                                            </select>
                                            <div id="room-info">

                                            </div>
                                        </div><br>


                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" id="btnSearch2" data-bs-dismiss="modal">Search</button>
                            </div>
                            <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cencel</button>
                                    <button type="submit" id="btnSearch2" data-dismiss="modal">Search</button>
                                </div> -->
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalToggleLabel2">Marksheet</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" id="printableArea">
                                <section class="" style="background-color: #9de2ff;">
                                    <div class="container py-5 h-100">
                                        <div class="row d-flex justify-content-center align-items-center h-100">
                                            <div class="col col-md-12 col-lg-12 col-xl-12">
                                                <div class="card" style="border-radius: 15px;">
                                                    <div class="card-body p-3">
                                                        <div class="d-flex text-black">

                                                            <div class="flex-grow-1 p-3  ms-3">
                                                                <div class="col-lg-12">
                                                                    <div class="card mb-4">
                                                                        <div class="card-body">
                                                                            <div class="row d-flex justify-content-center align-items-center">

                                                                                <!-- <img src="{{asset('img/admission')}}/<?php //echo $photo 
                                                                                                                            ?>" alt="Generic placeholder image" class="img-fluid" style="border-radius: 10px;width: 200px;"> -->
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-sm-5">
                                                                                    <p class="mb-0">Name</p>
                                                                                </div>
                                                                                <div class="col-sm-7">
                                                                                    <p class="text-muted mb-0" id="ModalName"></p>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-sm-5">
                                                                                    <p class="mb-0">Father's Name</p>
                                                                                </div>
                                                                                <div class="col-sm-7">
                                                                                    <p class="text-muted mb-0" id="fName"></p>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-sm-5">
                                                                                    <p class="mb-0">Mother's Name</p>
                                                                                </div>
                                                                                <div class="col-sm-7">
                                                                                    <p class="text-muted mb-0" id="mName"></p>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-sm-5">
                                                                                    <p class="mb-0">Registration No</p>
                                                                                </div>
                                                                                <div class="col-sm-7">
                                                                                    <p class="text-muted mb-0" id="reg"></p>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-sm-5">
                                                                                    <p class="mb-0">Date Of Birth</p>
                                                                                </div>
                                                                                <div class="col-sm-7">
                                                                                    <p class="text-muted mb-0" id="dob"></p>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <style>
                                                                                    #table1 {
                                                                                        border: 1px dotted greenyellow;
                                                                                        width: 100%;

                                                                                    }
                                                                                </style>
                                                                                <table id="table1">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th id="examType"></th>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>SL NO</td>
                                                                                            <td>Subject</td>
                                                                                            <td>marks</td>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody id="ModalId">

                                                                                    </tbody>
                                                                                    <tfoot>
                                                                                        <th></th>
                                                                                        <th>Total Marks</th>
                                                                                        <th id="total_marks"></th>
                                                                                    </tfoot>



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
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                <button type="button" id="btnPrint" onclick="printDiv('printableArea')" class="btn btn-primary text-capitalize" style="background-color:#60bdf3 ;">Print</button>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Search By Registration ID</a>
                <!-- modal 2 end -->


                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>exam</th>
                                <td id="examtype"></td>
                            </tr>
                            <tr>
                                <th>class</th>
                                <td id="clas"></td>
                            </tr>
                            <tr>
                                <th>section</th>
                                <td id="section"></td>
                            </tr>

                            <tr>


                                <th >Student</th>
                                <th>marks</th>

                            </tr>

                        </thead>
                        <tbody class="form-check" id="student">


                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {



        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#btnSearch2").on("click", function() {

            let exam_type = $("#cmbExamType2").val()
            let admission = $("#cmbAdmission").val()

            $.ajax({
                url: "{{url('index.php/api/myResult')}}",
                type: "post",
                data: {
                    "exam_type": exam_type,
                    "admission": admission
                },
                success: function(res) {
                    //console.log(res)
                    let data = JSON.parse(res)
                    //console.log(data.results)
                    let i = 1;
                    let html = ``;
                    let name = ``;
                    let fName = ``;
                    let mName = ``;
                    let dob = ``;
                    let admission = ``;
                    let total_marks = ``;

                    data.results.forEach(result => {
                        name = `${result.name}`
                        fName = `${result.fathers_name}`
                        mName = `${result.mothers_name}`
                        dob = `${result.birth_date}`
                        admission = `${result.admission_id}`
                        total_marks += `${result.obt_marks}`
                        html += `
                          <tr>
                            <td>${i++}</td>
                            <td>${result.subjects}</td>
                            <td>${result.obt_marks}</td>                            
                          </tr>`;


                        //   console.log(result.id)
                    });


                    $("#ModalId").html(html)
                    $("#ModalName").html(name)
                    $("#fName").html(fName)
                    $("#mName").html(mName)
                    $("#dob").html(dob)
                    $("#reg").html(admission)
                    $("#total_marks").html(total_marks)

                }
            })
        })

        $("#btnSearch").on("click", function() {


            let exam_type = $("#cmbExamType").val()
            let clas = $("#cmbClass").val()
            let subject = $("#cmbSubject").val()
            let department = $("#cmbDepartment").val()
            let section = $("#cmbSection").val()


            $.ajax({
                url: "{{url('index.php/api/ClassResult')}}",
                type: "post",
                data: {
                    "exam_type": exam_type,
                    "clas": clas,
                    "subject": subject,
                    "department": department,
                    "section": section
                },
                success: function(res) {
                    //console.log(res)
                    let data = JSON.parse(res)
                    // console.log(data.results)
                    let r = ``;
                    let examtype = ``;
                    let clas = ``;
                    let section = ``;
                    let student = ``;
                    let marks = ``;
                    data.results.forEach(result => {

                        examtype = `${result.examtype}`
                        clas = `${result.class}`
                        section = `${result.section}`
                        r += `<tr> 
                                <td>${result.admission_id}</td>
                                <td>${result.obt_marks}</td> 
                                
                            </tr>`


                    });


                    $("#examtype").html(examtype)
                    $("#clas").html(clas)
                    $("#section").html(section)
                    $("#student").html(r)


                }
            })
        })

    })
</script>

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