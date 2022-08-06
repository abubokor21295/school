@extends('layout.erp.app')
@section('title','Create Room')


@section('page')
<div class="content-wrapper">
   
<a class='btn btn-success' href="{{url('/rooms')}}">Manage rooms</a><table class='table'>
<form action="{{route('rooms.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! input_field(["label"=>"roomname","name"=>"txtName"]) !!}
	{!! input_field(["label"=>"Student Capacity","name"=>"txtCapacity"]) !!}
	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>
</div>
@endsection