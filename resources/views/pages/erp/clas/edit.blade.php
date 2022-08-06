@extends('layout.erp.app')
@section('title','Create Class')


@section('page')
<div class="content-wrapper">
   
<a class='btn btn-success' href="{{url('/clases')}}">Manage Class</a><table class='table'>
<form action="{{url('/clases')}}/{{$clas->id}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("put")
	{!! input_field(["label"=>"Name","name"=>"txtName", "value"=>$clas["name"]]) !!}
	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Update"]) !!}

</form>
</div>


@endsection
