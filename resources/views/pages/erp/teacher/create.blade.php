@extends('layout.erp.app')
@section('title','Create teacher')


@section('page')
<div class="content-wrapper">
   
	<a class='btn btn-success' href="{{url('/teachers')}}">Manage teachers</a><table class='table'>
	<form action="{{route('teachers.store')}}" method="post" enctype="multipart/form-data">
		@csrf
		{!! input_field(["label"=>"Name","name"=>"txtName"]) !!}
		{!! input_field(["label"=>"Email","name"=>"txtEmail"]) !!}
		{!! input_field(["label"=>"Designation","name"=>"txtDesignation"]) !!}
		{!! select_field(["label"=>"Gender","name"=>"cmbGenderId","table"=>$genders]) !!}
		{!! input_field(["label"=>"Mobile","name"=>"txtMobile"]) !!}	
		{!! input_field(["label"=>"Address","name"=>"txtAddress"]) !!}
		{!! input_field(["label"=>"Date of Birth","type"=>"date","name"=>"dob"]) !!}	
		{!! input_field(["label"=>"Joining Date","type"=>"date","name"=>"joining"]) !!}	
		{!! input_field(["label"=>"Photo","type"=>"file","name"=>"filePhoto"]) !!}
		{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
	</form>
</div>
@endsection