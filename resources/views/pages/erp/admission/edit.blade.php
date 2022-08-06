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
                        <h2>Update Admission Information</h2>
                    </div>
                </td>
                <td></td>
            </tr>
        </thead>
        <!----- Course ---------------------------------------------------------->
        <form action="{{url('/admissions')}}/{{$admission->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method("put")
            <!----- Name ---------------------------------------------------------->
            <tr>
                <td>Student's Name</td>

                <td>
                    <select name="cmbStudent" class="form-control" id="cmbStudent">
                        <?php foreach ($students as $student) {
                            if($admission->id==$student['id']){ 
                          echo "<option selected value=\"$student->id ?>\">$student->name</option>";
                            }else{
                                echo "<option value=\"$student->id ?>\">$student->name</option>";
                            }; 
                        }; ?>
                    </select>
                </td>
            </tr>
             <!----- Class ---------------------------------------------------------->
             <tr>
                <td>Class</td>

                <td>
                    <select name="cmbClass" class="form-control" id="cmbClass">
                        <?php foreach ($classes as $clas) {                         
                        if($admission->class_id==$clas['id']){ 
                          echo "<option selected value=\"$clas->id ?>\">$clas->name</option>";
                            }else{
                                echo "<option value=\"$clas->id ?>\">$clas->name</option>";
                            };
                          }; ?> 
                    </select>
                </td>
            </tr>
            <!----- Session ---------------------------------------------------------->
            <tr>
                <td>Session</td>

                <td>
                    <select name="cmbSession" class="form-control" id="cmbSession">
                        <?php foreach ($sessions as $session) {                         
                        if($admission->session_id==$session['id']){ 
                          echo "<option selected value=\"$session->id ?>\">$session->name</option>";
                            }else{
                                echo "<option value=\"$session->id ?>\">$session->name</option>";
                            };
                          }; ?> 
                    </select>
                </td>
            </tr>
            <!----- Department ---------------------------------------------------------->
            <tr>
                <td>Department</td>

                <td>
                    <select name="cmbDepartment" class="form-control" id="cmbDepartment">
                        <?php foreach ($departments as $department) { 
                            if($admission->department_id==$department['id']){ 
                          echo "<option selected value=\"$department->id ?>\">$department->name</option>";
                            }else{
                                echo "<option value=\"$department->id ?>\">$department->name</option>";
                            };
                          }; ?> 
                    </select>
                </td>
            </tr>
            <!----- Section ---------------------------------------------------------->
            <tr>
                <td>Section</td>

                <td>
                    <select name="cmbSection" class="form-control" id="cmbSection">
                        <?php foreach ($sections as $section) { 
                            if($admission->section_id==$section['id']){ 
                          echo "<option selected value=\"$section->id ?>\">$section->name</option>";
                            }else{
                                echo "<option value=\"$section->id ?>\">$section->name</option>";
                            };
                          }; ?> 
                    </select>
                </td>
            </tr>

            <!----- Roll ---------------------------------------------------------->
            <tr>
                <td>Roll</td>
                <td><input type="text" name="txtRoll" maxlength="30" value="{{$admission->roll}}" />
                </td>
            </tr>

            <!----- photo ------------------------------------------------->
            <tr>
                <td>Photo</td>

                <td>
                    <input type="file" name="filePhoto" maxlength="30" value="{{$admission->photo}}"/>
                </td>
            </tr>


            <!----- Submit and Reset ------------------------------------------------->
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Update">
                    <input type="reset" value="Reset">
                </td>
            </tr>
    </table>
</div>
    </form>
</body>

</html>

@endsection