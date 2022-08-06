@extends('layout.erp.app')
@section('title','users')


@section('page')
<div class="content-wrapper">
    <a class='btn btn-success' href="{{route('users.create')}}">Create</a>
    <table>
        <tr>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role ID</th>
            <th>Action</th>
        </tr>
        @forelse ($users as $user)
        <tr>
            <td><img src="{{asset('img')}}/{{$user->photo}}" alt="" width="100"></td>
            <td>{{$user->username}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->name}}</td>
            <td>
            <div class="d-flex btn-group">
                <a class='btn btn-primary' href="{{route('users.edit',$user->id)}}">Edit<a>
                <a class='btn btn-info' href="{{route('users.show',$user->id)}}">Show<a>
                <form action="{{route('users.destroy',$user->id)}}" method="post" >	
                    @csrf
                    @method("DELETE")
                    <input class='btn btn-danger' type="submit" name="btnDelete" class="btnDelete"  value="Delete" />
                </form>
                </div>

            </td>
        </tr>
        @empty
        <tr><td>No records</td></tr>
        @endforelse

        <tr><th>{{$users->links()}}</th></tr>
    </table>

  
</div>
@endsection
