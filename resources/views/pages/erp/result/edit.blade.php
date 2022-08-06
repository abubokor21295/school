@extends('layout.erp.app')
@section('title','result')


@section('page')
<div class="content-wrapper">
   
<a class='btn btn-success' href="{{url('/results')}}">Manage Routin</a><table class='table'>
<form action="{{url('/results')}}/{{$result->id}}" method="post" enctype="multipart/form-data">
	@csrf
    @method("put")
	{!! input_field(["label"=>"Obtain Marks","name"=>"obt_marks","value"=>$result["obt_marks"]]) !!}
	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Update"]) !!}
</form>
</div>
@endsection