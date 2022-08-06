@extends('layout.erp.app')
@section('title','Create user')


@section('page')
<style>
        table{
        font-family: Calibri; 
        color:black; 
        font-size: 11pt; 
        font-style: normal;
        font-weight: bold;
        background-color: lightgrey	; 
        border-collapse: collapse; 
        border: 2px solid navy;
        }
        table.inner{
        border: 0px
        }
		#link1{
			margin-left: 130px;
			margin-bottom: 20px;
		}
    </style>
 
<div class="content-wrapper">
<a class='btn btn-success' id="link1" href="{{url('/students')}}">Manage Student</a>
    <table align="center" cellpadding = "10">
        <thead>
            <tr>
                <td align="right" style="float:left;margin-left:20px"><img src="{{asset('img/logo-4.png')}}" width="80" alt="" style="padding-left:0"></td>
                <td align="center">

                    <div style="float:left;margin-left:30px">
                    <span style=" font-size: 25pt;font-style: normal;font-weight: bold;"><strong>MotherHood Public School</strong></span>
                    <span style=" font-size: 11pt;font-style: normal;font-weight: bold;"></br>Janatabug, Kadamtoli, Dhaka-1236</span>
                    <h2>Update Student's Information</h2>
                    </div>
                </td>
                <td></td>
            </tr>
        </thead>
        <!----- Course ---------------------------------------------------------->
        <form action="{{url('/students')}}/{{$student->id}}" method="post" enctype="multipart/form-data">
        @csrf
		@method("put")

        <!----- Name ---------------------------------------------------------->
        <tr>
            <td>Student's Name</td>
            <td><input type="text" name="txtName" maxlength="30" value="{{$student->name}}"/>
            (max 30 characters a-z and A-Z)
            </td>
        </tr>
        
        <!----- Father's Name ---------------------------------------------------------->
        <tr>
            <td>Father's Name</td>
            <td><input type="text" name="fathers_name" maxlength="30" value="{{$student->fathers_name}}"/>
            (max 30 characters a-z and A-Z)
            </td>
        </tr>
        <!----- Mother's Name ---------------------------------------------------------->
        <tr>
            <td>Mother's Name</td>
            <td><input type="text" name="mothers_name" maxlength="30" value="{{$student->mothers_name}}"/>
            (max 30 characters a-z and A-Z)
            </td>
        </tr>
        
        <!----- Date Of Birth -------------------------------------------------------->
        <tr>
            <td>DATE OF BIRTH</td>
            <td>
                <input type="" name="birth_date" value="{{$student->birth_date}}">
            </td>
        </tr>
        
        <!----- Email Id ---------------------------------------------------------->
        <tr>
            <td>EMAIL ID</td>
            <td><input type="text" name="txtEmail" maxlength="100" value="{{$student->email}}"/></td>
        </tr>
        
        <!----- Mobile Number ---------------------------------------------------------->
        <tr>
            <td>MOBILE NUMBER</td>
            <td>
            <input type="text" name="txtMobile" maxlength="15" value="{{$student->phone}}"/>
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
            <td><textarea name="txtAddress" rows="4" cols="30">{{$student->address}}</textarea></td>
        </tr>
        
        <!----- City ---------------------------------------------------------->
        <tr>
            <td>Home District</td>
            <td><input type="text" name="District" maxlength="30" value="{{$student->district}}"/>
            (max 30 characters a-z and A-Z)
            </td>
        </tr>
        
        <!----- Hobbies ---------------------------------------------------------->
        
        <tr>
            <td>HOBBIES</td>
            
            <td>
            <input type="text" name="Hobby" maxlength="30" value="{{$student->hobby}}"/>
            </td>
        </tr>
        
        <!----- Qualification---------------------------------------------------------->
        <tr>
            <td>QUALIFICATION</td>
            
            <td>
            <table>
            
                <tr>
                    <td align="center"><b>Sl.No.</b></td>
                    <td align="center"><b>Examination</b></td>
                    <td align="center"><b>Board</b></td>
                    <td align="center"><b>Percentage</b></td>
                    <td align="center"><b>Year of Passing</b></td>
                </tr>
                
                <tr>
                    <td>1</td>
                    <td>Class X</td>
                    <td><input type="text" name="ClassX_Board" maxlength="30" /></td>
                    <td><input type="text" name="ClassX_Percentage" maxlength="30" /></td>
                    <td><input type="text" name="ClassX_YrOfPassing" maxlength="30" /></td>
                </tr>
                
                <tr>
                    <td>2</td>
                    <td>Class XII</td>
                    <td><input type="text" name="ClassXII_Board" maxlength="30" /></td>
                    <td><input type="text" name="ClassXII_Percentage" maxlength="30" /></td>
                    <td><input type="text" name="ClassXII_YrOfPassing" maxlength="30" /></td>
                </tr>
                
                <tr>
                    <td>3</td>
                    <td>Graduation</td>
                    <td><input type="text" name="Graduation_Board" maxlength="30" /></td>
                    <td><input type="text" name="Graduation_Percentage" maxlength="30" /></td>
                    <td><input type="text" name="Graduation_YrOfPassing" maxlength="30" /></td>
                </tr>
                
                <tr>
                    <td>4</td>
                    <td>Masters</td>
                    <td><input type="text" name="Masters_Board" maxlength="30" /></td>
                    <td><input type="text" name="Masters_Percentage" maxlength="30" /></td>
                    <td><input type="text" name="Masters_YrOfPassing" maxlength="30" /></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td></td>
                    <td align="center">(10 char max)</td>
                    <td align="center">(upto 2 decimal)</td>
                </tr>
            </table>
            
            </td>
        </tr>
        <!----- photo ------------------------------------------------->
        <tr>
            <td>Photo</td>
            
            <td>
            <input type="file" name="filePhoto" maxlength="30" value="{{$student->photo}}"/>
            </td>
        </tr>

        
        <!----- Submit and Reset ------------------------------------------------->
        <tr>
            <td colspan="2" align="center">
            <input type="submit" value="Update" class="btn btn-success">
           
            </td>
        </tr>
    </table>
 
        </form>  

</div>

@endsection
