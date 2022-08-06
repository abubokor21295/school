@extends("layout.erp.app")

@section("page")

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
        width: 700px;
        
    }

    table.inner {
        border: 0px
    }
</style>

<div class="content-wrapper">
    <table align="center" cellpadding="10">
        <thead>
            <tr>
                <td align="right" style="float:left;margin-left:20px"><img src="{{asset('img/logo-4.png')}}" width="80" alt="" style="padding-left:0"></td>
                <td align="center">

                    <div style="float:left;margin-left:30px">
                        <span style=" font-size: 25pt;font-style: normal;font-weight: bold;"><strong>MotherHood Public School</strong></span>
                        <span style=" font-size: 11pt;font-style: normal;font-weight: bold;"></br>Janatabug, Kadamtoli, Dhaka-1236</span>
                        <h2>Student Registration Form</h2>
                    </div>
                </td>
                <td></td>

            </tr>
        </thead>
        <!----- Course ---------------------------------------------------------->
        <form action="{{route('students.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <!----- Name ---------------------------------------------------------->
            <tr>
                <td>Student's Name</td>
                <td><input type="text" name="txtName" maxlength="30" />
                    (max 30 characters a-z and A-Z)
                </td>
            </tr>

            <!----- Father's Name ---------------------------------------------------------->
            <tr>
                <td>Father's Name</td>
                <td><input type="text" name="fathers_name" maxlength="30" />
                    (max 30 characters a-z and A-Z)
                </td>
            </tr>
            <!----- Mother's Name ---------------------------------------------------------->
            <tr>
                <td>Mother's Name</td>
                <td><input type="text" name="mothers_name" maxlength="30" />
                    (max 30 characters a-z and A-Z)
                </td>
            </tr>

            <!----- Date Of Birth -------------------------------------------------------->
            <tr>
                <td>DATE OF BIRTH</td>
                <td>
                    <input type="date" name="birth_date">
                </td>
            </tr>

            <!----- Email Id ---------------------------------------------------------->
            <tr>
                <td>EMAIL ID</td>
                <td><input type="text" name="txtEmail" maxlength="100" /></td>
            </tr>

            <!----- Mobile Number ---------------------------------------------------------->
            <tr>
                <td>MOBILE NUMBER</td>
                <td>
                    <input type="text" name="txtMobile" maxlength="15" />
                    (14 digit number)
                </td>
            </tr>

            <!----- Gender ----------------------------------------------------------->
            <tr>
                <td>GENDER</td>
                <td>
                    Male <input type="radio" name="txtGender" value="1" />
                    Female <input type="radio" name="txtGender" value="2" />
                    Other <input type="radio" name="txtGender" value="3" />
                </td>
            </tr>

            <!----- Address ---------------------------------------------------------->
            <tr>
                <td>ADDRESS <br /><br /><br /></td>
                <td><textarea name="txtAddress" rows="4" cols="30"></textarea></td>
            </tr>

            <!----- City ---------------------------------------------------------->
            <tr>
                <td>Home District</td>
                <td><input type="text" name="District" maxlength="30" />
                    (max 30 characters a-z and A-Z)
                </td>
            </tr>

            <!----- Hobbies ---------------------------------------------------------->

            <tr>
                <td>HOBBIES</td>

                <td>
                    <input type="text" name="Hobby" maxlength="30" />
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
                    <a class='btn btn-success' href="{{url('/students')}}">Manage Student</a>
                </td>
            </tr>
    </table>

    </form>

</div>
@endsection