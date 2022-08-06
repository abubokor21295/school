@extends('layout.erp.app')
@section('title','Create teacher')


@section('page')
<div class="content-wrapper">
   
<a class='btn btn-success' href="{{url('/teachers')}}">Manage teachers</a><table class='table'>
<form action="{{url('/teachers')}}/{{$teacher->id}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("put")
	{!! input_field(["label"=>"Name","name"=>"txtName", "value"=>$teacher["name"]]) !!}
	{!! input_field(["label"=>"Designation","name"=>"txtDesignation","value"=>$teacher["designation"]]) !!}
	{!! select_field(["label"=>"Gender","name"=>"cmbGenderId","table"=>$genders]) !!}
	{!! input_field(["label"=>"Email","name"=>"txtEmail","value"=>$teacher["email"]]) !!}
	{!! input_field(["label"=>"Mobile","name"=>"txtMobile","value"=>$teacher["phone"]]) !!}	
	{!! input_field(["label"=>"Address","name"=>"txtAddress","value"=>$teacher["address"]]) !!}
	{!! input_field(["label"=>"Date of Birth","type"=>"date","name"=>"dob","value"=>$teacher["date"]]) !!}	
	{!! input_field(["label"=>"Joining Date","type"=>"date","name"=>"joining","value"=>$teacher["created_at"]]) !!}	
	{!! input_field(["label"=>"","name"=>"id","value"=>$teacher["id"],"type"=>"hidden"]) !!}
  	
	{!! input_field(["label"=>"Photo","type"=>"file","name"=>"filePhoto","value"=>$teacher["photo"]]) !!}
	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Update"]) !!}
	<img src="{{asset('img')}}/{{$teacher['photo']}}" alt="" srcset="" width="100">
</form>
</div>


@endsection
