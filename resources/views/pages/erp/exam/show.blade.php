@extends("layout.erp.app")

@section("page")

<div class="content-wrapper">
<?php

foreach ($exams as $exam) {
  $class = $exam->class;
  $section = $exam->section;
  $department = $exam->department;


}
?>

  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"></h4>
        <p class="card-description">
          <a class='btn btn-success' href="{{route('exams.create')}}">Create exam</a>
          <table>
            <tr><th>Class      :   </th><td><?php echo $class ?></td></tr>
            <tr><th>Section    :   </th><td><?php echo $section ?></td></tr>
            <tr><th>Department :   </th><td><?php echo $department ?></td></tr>
          </table>
        </p>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Date</th>
                <th>Subject</th>
                <th>Room</th>

              </tr>
            </thead>
            <tbody>
              @forelse ($exams as $exam)
              <tr>
                <td>{{$exam->exam_date}}</td>
                <td>{{$exam->subject}}</td>
                <td>{{$exam->room}}</td>
                <td>
                  <div class="d-flex btn-group" style="width: 60px;">
                    <a class='btn btn-primary' href="{{route('exams.edit',$exam->id)}}">Edit<a>
                        <a class='btn btn-info' href="{{route('exams.show',$exam->class_id)}}">Show<a>
                            <form action="{{route('exams.destroy',$exam->id)}}" method="post">
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