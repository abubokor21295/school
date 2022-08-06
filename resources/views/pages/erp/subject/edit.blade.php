@extends('layout.erp.app')
@section('title','Update subject')


@section('page')
<div class="content-wrapper">
   
<a class='btn btn-success' href="{{url('/subjects')}}">Manage subjects</a>
<form action="{{route('subjects.update',$subject)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("put")
	<input type="text" name="txtName" value="{{$subject->name}}"><br>
	<input type="text" name="txtCode" value="{{$subject->sub_code}}"><br>
	<button type="submit">update</button>
</form>
</div>


@endsection
