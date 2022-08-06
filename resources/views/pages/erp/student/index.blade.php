@extends('layout.erp.app')
@section('title','student')


@section('page')
<div class="content-wrapper">

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                  <h4 class="card-title">Student's Table</h4>
                  <p class="card-description">
                    <a class='btn btn-success' href="{{route('students.create')}}">New Registration Here</a>
                    <a class='btn btn-info' href="{{route('payments.create')}}">Payment</a>
                    <a class='btn btn-warning' href="{{route('accounts.create')}}">Bill</a>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Father's Name</th>
                            <th>Mother's Name</th>
                            <th>Mobile</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($students as $student)
                            <tr>
                                <td><img src="{{asset('img/student')}}/{{$student->photo}}" alt="" width="100"></td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->fathers_name}}</td>
                                <td>{{$student->mothers_name}}</td>
                                <td>{{$student->phone}}</td>
                                <td>
                                <div class="d-flex btn-group">
                                    <a class='btn btn-primary' href="{{route('students.edit',$student->id)}}">Edit<a>
                                    <a class='btn btn-info' href="{{route('students.show',$student->id)}}">Show<a>
                                    <form action="{{route('students.destroy',$student->id)}}" method="post" >	
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

                        <tr><th>  {{$students->links()}}</th></tr>
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>

</div>
@endsection
