@extends('layout.erp.app')
@section('title','admission')


@section('page')
<div class="content-wrapper">
    <a class='btn btn-info' href="{{route('admissions.create')}}">New Admission Here</a>
    <a class='btn btn-secondary' href="{{url('students')}}">Student's List</a>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                  <h4 class="card-title">admission List</h4>
                  <p class="card-description">
                    
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                        <th>Admission Id</th>
                        <th>Photo</th>
                        <th>Student Name</th>
                        <th>Class</th>
                        <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @forelse ($admissions as $admission)
                        <tr>
                            <td>{{$admission->id}}</td>
                            <td><img src="{{asset('img/admission')}}/{{$admission->photo}}" alt="" width="100"></td>
                            <td>{{$admission->name}}</td>
                            <td>{{$admission->className}}</td>
                            <td style="width: 250px;">
                              <div class="d-flex btn-group">
                                    <a class='btn btn-primary' href="{{route('admissions.edit',$admission->id)}}">Edit<a>
                                    <a class='btn btn-info' href="{{route('admissions.show',$admission->id)}}">Show<a>
                                    <form action="{{route('admissions.destroy',$admission->id)}}" method="post" >	
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

                        <tr><th>  {{$admissions->links()}}</th></tr>
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>

</div>
@endsection

  

