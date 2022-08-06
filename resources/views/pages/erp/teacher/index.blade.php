@extends('layout.erp.app')
@section('title','teachers')


@section('page')
<div class="content-wrapper">

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                  <h4 class="card-title">Teacher's Table</h4>
                  <p class="card-description">
                    <a class='btn btn-success' href="{{route('teachers.create')}}">Add New Teacher</a>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                        <th>Picture</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Gender</th>
                        <th>Mobile</th>
                        <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @forelse ($teachers as $teacher)
                        <tr>
                            <td>
                              <img src="{{asset('img')}}/{{$teacher->photo}}" alt="Picture" width="100">
                            </td>
                            <td>{{$teacher->name}}</td>
                            <td>{{$teacher->designation}}</td>
                            <td><?php echo $teacher->gender==1?"Male":"Female"; ?></td>
                            <td>{{$teacher->phone}}</td>
                            <td>
                                <div class="d-flex btn-group">
                                    <a class='btn btn-primary' href="{{route('teachers.edit',$teacher->id)}}">Edit<a>
                                    <a class='btn btn-info' href="{{route('teachers.show',$teacher->id)}}">Show<a>
                                    <form action="{{route('teachers.destroy',$teacher->id)}}" method="post" >	
                                        @csrf
                                        @method("DELETE")
                                        <input class='btn btn-danger' type="submit" name="btnDelete" class="btnDelete" data-id="{{$teacher->id}}"  value="Delete" />
                                    </form>
                                </div>

                            </td>
                        </tr>
                        @empty
                        <tr><td>No records</td></tr>
                        @endforelse

                        <tr><th>  {{$teachers->links()}}</th></tr>
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>

</div>
@endsection

  

