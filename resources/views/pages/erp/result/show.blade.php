@extends("layout.erp.app")

@section("page")

<div class="content-wrapper">

  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"></h4>
        <p class="card-description">
          <a class='btn btn-success' href="{{route('results.create')}}">Create result</a>

        </p>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Examinee</th>
              <th>Class</th>
              <th>Section</th>
              <th>Exam</th>
              <th>obt_marks</th>
              <th>Action</th>>
              </tr>
            </thead>
            <tbody>
              @forelse ($results as $result)
              <tr>
              <td>{{$result->name}}</td>
              <td>{{$result->class_id}}</td>
              <td>{{$result->section_id}}</td>
              <td>{{$result->exam_id}}</td>
                <td>{{$result->obt_marks}}</td>
                <td>
                  <div class="d-flex btn-group" style="width: 60px;">
                    <a class='btn btn-primary' href="{{route('results.edit',$result->id)}}">Edit<a>
                        <a class='btn btn-info' href="{{route('results.show',$result->class_id)}}">Show<a>
                            <form action="{{route('results.destroy',$result->id)}}" method="post">
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