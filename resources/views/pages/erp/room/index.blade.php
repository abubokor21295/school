@extends('layout.erp.app')
@section('title','Rooms')


@section('page')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                  <h4 class="card-title">Room List</h4>
                  <p class="card-description">
                    <a class='btn btn-success' href="{{route('rooms.create')}}">Add New Room</a>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                            <th>Name</th>
                            <th>Student Capacity</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                            @forelse ($rooms as $room)
                            <tr>

                                <td>{{$room->name}}</td>
                                <td>{{$room->student_count}}</td>

                                <td style="width: 200px;">
                                <div class="d-flex btn-group">
                                    <a class='btn btn-primary' href="{{route('rooms.edit',$room->id)}}">Edit<a>
                                    <a class='btn btn-info' href="{{route('rooms.show',$room->id)}}">Show<a>
                                    <form action="{{route('rooms.destroy',$room->id)}}" method="post" >	
                                        @csrf
                                        @method("DELETE")
                                        <input class='btn btn-danger' type="submit" name="btnDelete" class="btnDelete" data-id="{{$room->id}}"  value="Delete" />
                                    </form>
                                    </div>

                                </td>
                            </tr>
                            @empty
                            <tr><td>No records</td></tr>
                            @endforelse
                      </tbody>
                      <tfoot>
                      <tr><th>  {{$rooms->links()}}</th></tr>
                      </tfoot>
                    </table>
                  </div>
            </div>
        </div>
    </div>

</div>

@endsection
