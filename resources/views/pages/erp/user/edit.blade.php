@extends('layout.erp.app')
@section('title','Create user')


@section('page')
<div class="content-wrapper">
   
<a class='btn btn-success' href="{{url('/users')}}">Manage Users</a><table class='table'>
<form action="{{url('/users')}}/{{$user->id}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("put")
	{!! input_field(["label"=>"Username","name"=>"txtUsername", "value"=>$user["username"]]) !!}
	{!! select_field(["label"=>"Role","name"=>"cmbRoleId","table"=>$roles]) !!}
	{!! input_field(["label"=>"Password","name"=>"txtPassword","value"=>$user["password"]]) !!}
	{!! input_field(["label"=>"","name"=>"id","value"=>$user["id"],"type"=>"hidden"]) !!}
  	
	{!! input_field(["label"=>"Photo","type"=>"file","name"=>"filePhoto"]) !!}
	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Update"]) !!}
	<img src="{{asset('img')}}/{{$user['photo']}}" alt="" srcset="" width="100">
</form>
</div>


@endsection
