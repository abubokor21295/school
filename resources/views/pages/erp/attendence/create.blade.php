@extends('layout.erp.app')
@section('title','attendence')


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
                <form action="{{route('attendences.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="col-xl-6">
                                Class's Name: <br><br>
                                <select name="cmbClass" class="form-control" id="cmbClass">
                                    <?php foreach ($classes as $clas) { ?>

                                        <option value="<?php echo $clas['id'] ?>" selected><?php echo $clas['name'] ?></option>


                                    <?php }; ?>
                                </select>
                                <div id="clas-info">

                                </div>
                            </div>

                            <div class="col-xl-6">
                                Subject's Name: <br><br>
                                <select name="cmbSubject" class="form-control" id="cmbSubject">
                                    <?php foreach ($subjects as $subject) { ?>
                                        <option value="<?php echo $subject['id'] ?>"><?php echo $subject['name'] ?></option>
                                    <?php }; ?>
                                </select>
                                <div id="subject-info">

                                </div>
                            </div>


                        </div>
                        <div class="col-xl-4">
                            <div class="col-xl-6">
                                Section's Name: <br><br>
                                <select id="cmbSection" name="cmbSection">
                                    @foreach($sections as $section)

                                    <option value="{{$section->id}}">{{$section->name}}</option>

                                    @endforeach
                                </select>
                                <div id="section-info">

                                </div>
                            </div>

                            <div class="col-xl-6">
                                Session: <br><br>
                                <select name="cmbSession" class="form-control" id="cmbSession">
                                    <?php foreach ($sessions as $session) { ?>
                                        <option value="<?php echo $session['id'] ?>"><?php echo $session['name'] ?></option>
                                    <?php }; ?>
                                </select>
                                <div id="session-info">

                                </div>
                            </div>


                        </div>
                        <div class="col-xl-4">
                            <div class="col-xl-6">
                                Teacher's Name: <br><br>
                                <select name="cmbTeacher" class="form-control" id="cmbTeacher">
                                    <?php foreach ($teachers as $teacher) { ?>
                                        <option value="<?php echo $teacher['id'] ?>"><?php echo $teacher['name'] ?></option>
                                    <?php }; ?>
                                </select>
                                <div id="teacher-info">

                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        <h1>Student's List</h1>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="form-check">





                            </tbody>
                            <tr>
                                <th>
                                    <input type="submit" name="btnSubmit" value="submit">
                                </th>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {

        $("#cmbClass").on("change", function() {

        })


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#cmbSection").on("change", function() {
            let section = $(this).val()
            let subject = $("#cmbSubject").val()
            let clas = $("#cmbClass").val()

            // alert(section+subject+clas)
            $.ajax({
                url: "{{url('index.php/api/studentShow')}}",
                type: "post",
                data: {
                    "section": section,
                    "subject": subject,
                    "clas": clas,
                },
                success: function(res) {
                    // console.log(res)
                    let data = JSON.parse(res)
                    console.log(data.student)
                    let html = ``;
                    data.student.forEach(element => {
                        html += `  <tr>
                                        <td>${element.name}</td>
                                        <td>
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox"  name="students[]"  value="${element.id}" />
                                            </div>
                                        </td>
                                    </tr>`;
                                                        });


                    $(".form-check").html(html)

                }
            })
        })

    })
</script>

@endsection