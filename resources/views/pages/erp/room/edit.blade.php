@extends('layout.erp.app')
@section('title','Create Room')


@section('page')
<div class="content-wrapper">
   
<a class='btn btn-success' href="{{url('/rooms')}}">Manage Rooms</a><table class='table'>
<form action="{{url('/rooms')}}/{{$room->id}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("put")
	{!! input_field(["label"=>"Class","name"=>"txtName", "value"=>$room["name"]]) !!}
	{!! input_field(["label"=>"Capacity","name"=>"capacity", "value"=>$room["student_count"]]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Update"]) !!}
</form>
</div>


@endsection
