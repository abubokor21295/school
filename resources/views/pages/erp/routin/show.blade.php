@extends("layout.erp.app")

@section("page")

<div class="content-wrapper">

  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"></h4>
        <p class="card-description">
          <a class='btn btn-success' href="{{route('routins.create')}}">Create Routin</a>

        </p>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Class</th>
                <th>Subject</th>
                <th>Section</th>
                <th>Teacher</th>
                <th>Room</th>
                <th>Day</th>
                <th>Time</th>
                <!-- <th>Finish at</th> -->
                <th>Department</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($routins as $routin)
              <tr>
                <td>{{$routin->class}}</td>
                <td>{{$routin->subject}}</td>
                <td>{{$routin->section}}</td>
                <td>{{$routin->teacher}}</td>
                <td>{{$routin->room}}</td>
                <td>{{$routin->day}}</td>
                <td>{{$routin->start_time}} am - {{$routin->end_time}} am</td>
                <!-- <td>{{$routin->end_time}} am</td> -->
                <td>{{$routin->department}}</td>
                <td>
                  <div class="d-flex btn-group" style="width: 60px;">
                    <a class='btn btn-primary' href="{{route('routins.edit',$routin->id)}}">Edit<a>
                        <a class='btn btn-info' href="{{route('routins.show',$routin->class_id)}}">Show<a>
                            <form action="{{route('routins.destroy',$routin->id)}}" method="post">
                              @csrf
                              @method("DELETE")
                              <input class='btn btn-danger' type="submit" name="btnDelete" class="btnDelete" value="Delete" />
                            </form>
                  </div>

                </td>
              </tr>
              @empty
              <tr>
                <td>No records</td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection