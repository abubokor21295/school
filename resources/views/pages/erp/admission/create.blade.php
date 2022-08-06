@extends('layout.erp.app')
@section('title','payment')


@section('page')
<html>

<head>
    <title>Student Registration Form</title>
    <style>
        table {
            font-family: Calibri;
            color: black;
            font-size: 11pt;
            font-style: normal;
            font-weight: bold;
            background-color: lightgrey;
            border-collapse: collapse;
            border: 2px solid navy;
        }

        table.inner {
            border: 0px
        }
    </style>
</head>

<body>
<div class="content-wrapper">
    <table align="center" cellpadding="10">
        <thead>
            <tr>
                <td align="right" style="float:left;margin-left:20px"><img src="{{asset('img/logo-4.png')}}" width="80" alt="" style="padding-left:0"></td>
                <td align="center">

                    <div style="float:left;margin-left:30px">
                        <span style=" font-size: 25pt;font-style: normal;font-weight: bold;"><strong>MotherHood Public School</strong></span>
                        <span style=" font-size: 11pt;font-style: normal;font-weight: bold;"></br>Janatabug, Kadamtoli, Dhaka-1236</span>
                        <h2>Student Admission Form</h2>
                    </div>
                </td>
                <td></td>
            </tr>
        </thead>
        <!----- Course ---------------------------------------------------------->
        <form action="{{route('admissions.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <!----- Name ---------------------------------------------------------->
            <tr>
                <td>Student's Name</td>

                <td>
                    <select name="cmbStudent" class="form-control" id="cmbStudent">
                        <?php foreach ($students as $student) { ?>
                            <option value="<?php echo $student['id'] ?>"><?php echo $student['name'] ?></option>
                        <?php }; ?>
                    </select>
                </td>
            </tr>
             <!----- Class ---------------------------------------------------------->
             <tr>
                <td>Class</td>

                <td>
                    <select name="cmbClass" class="form-control" id="cmbClass">
                        <?php foreach ($classes as $clas) { ?>
                            <option value="<?php echo $clas['id'] ?>"><?php echo $clas['name'] ?></option>
                        <?php }; ?>
                    </select>
                </td>
            </tr>
            <!----- Session ---------------------------------------------------------->
            <tr>
                <td>Session</td>

                <td>
                    <select name="cmbSession" class="form-control" id="cmbSession">
                        <?php foreach ($sessions as $session) { ?>
                            <option value="<?php echo $session['id'] ?>"><?php echo $session['name'] ?></option>
                        <?php }; ?>
                    </select>
                </td>
            </tr>
            <!----- Department ---------------------------------------------------------->
            <tr>
                <td>Department</td>

                <td>
                    <select name="cmbDepartment" class="form-control" id="cmbDepartment">
                        <?php foreach ($departments as $department) { ?>
                            <option value="<?php echo $department['id'] ?>"><?php echo $department['name'] ?></option>
                        <?php }; ?>
                    </select>
                </td>
            </tr>
            <!----- Section ---------------------------------------------------------->
            <tr>
                <td>Section</td>

                <td>
                    <select name="cmbSection" class="form-control" id="cmbSection">
                        <?php foreach ($sections as $section) { ?>
                            <option value="<?php echo $section['id'] ?>"><?php echo $section['name'] ?></option>
                        <?php }; ?>
                    </select>
                </td>
            </tr>

            <!----- Roll ---------------------------------------------------------->
            <tr>
                <td>Roll</td>
                <td><input type="text" name="txtRoll" maxlength="30" />
                </td>
            </tr>

            <!----- photo ------------------------------------------------->
            <tr>
                <td>Photo</td>

                <td>
                    <input type="file" name="filePhoto" maxlength="30" />
                </td>
            </tr>


            <!----- Submit and Reset ------------------------------------------------->
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
    </table>
</div>
    </form>
</body>

</html>
<script>
    $(function() {
        const cart = new Cart("admission");
        //Show Student other information
        $("#cmbStudent").on("change", function() {

            $.ajax({
                url: '',
                type: 'POST',
                data: {
                    "cmbStudent": $(this).val()
                },
                success: function(res) {
                    // console.log(res);
                    // $("#student-info").html(res.students.name + "<br>" + res.students.email + "<br>" + res.students.phone);
                }
            });


        }); //End Show student other information


    })
</script>
<script src="{{asset('cart.js')}}"></script>
@endsection