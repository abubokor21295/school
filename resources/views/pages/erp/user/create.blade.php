@extends('layout.erp.app')
@section('title','Create user')


@section('page')
<div class="content-wrapper">
   
<a class='btn btn-success' href="{{url('/users')}}">Manage Users</a><table class='table'>
<form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! input_field(["label"=>"Username","name"=>"txtUsername"]) !!}
	{!! select_field(["label"=>"Role","name"=>"cmbRoleId","table"=>$roles]) !!}
	{!! input_field(["label"=>"Password","name"=>"txtPassword"]) !!}
    {!! input_field(["label"=>"Retype Password","name"=>"txtRePassword"]) !!}	
	{!! input_field(["label"=>"Photo","type"=>"file","name"=>"filePhoto"]) !!}
	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>
</div>
@endsection