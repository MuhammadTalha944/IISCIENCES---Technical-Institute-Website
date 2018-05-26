@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <br>
          <br>
          <br>
          <br>
            <div class="panel panel-default">

                <div class="panel-heading">All Students

                    <button type="button" class="btn pull-right" style="background-color: #830e0a" data-toggle="modal" data-target="#modalContactForm">
                      <font color="white">Add student</font></button><br>
                </div>
                <div class="panel-body">

                  <table class="table table-striped">
              <thead>
                <tr>
                  <th>id</th>
                  <th>name</th>
                  <th>Roll No</th>
                  <th>Course</th>
                  <th>Course Type(duration)</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>

                @foreach($student as $stds)
                <tr>
                    <td>
                        {{$stds['id']}}
                    </td>
                    <td>
                        {{$stds['name']}}
                    </td>
                    <td>
                        {{$stds['roll_No']}}
                    </td>
                    <td>
                        {{$stds['course']}}
                    </td>
                    <td>
                        {{$stds['courseType']}}
                    </td>

                    <td>
                            <a href="editStudentInfo&<?php echo $stds->id; ?>" class="btn btn-warning">

                                Edit</a>

                        &nbsp;
                            <a href="deleteStudent&<?php echo $stds->id; ?>" class="btn btn-danger">
                                Delete</a>
                    </td>

                </tr>
                @endforeach
              </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header text-center">
    <h4 class="modal-title w-100 font-weight-bold">Add Student Info</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body mx-5">
  <form action="createStudent" method="post" files="true" enctype="multipart/form-data">
      <div class="row">
          <div class="col-md-6">
              <div class="form-group">
                  <label>Name</label>
                  <input type="text" id="name" name="name" class="form-control" placeholder="Student Name" required>
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                  <label>Course Type</label>
                   <select class="form-control" name="courseType" id="courseType" required>
                       <option value="Three month" >Three month</option>
                       <option value="Six month">Six month</option>
                       <option value=" One Year">One Year</option>
                       <option value="Two Year ">Two Year</option>
                       <option value=" Degree Program">Degree Program</option>
                   </select>
              </div>
          </div>
      </div>

      <div class="row">
          <div class="col-md-6">
              <div class="form-group">
                  <label>Roll No</label>
                  <input type="text" id="roll_No" name="roll_No" class="form-control" placeholder="Roll Number" required>
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                  <label>course</label>
                  <input type="text" id="course" name="course" class="form-control" placeholder="course" required>
              </div>
          </div>
      </div>
      <div class="row">
       <div class="col-md-12 text-right">
                  <button class="btn btn-success">Save</button>
           <input type="hidden" value="{{ csrf_token() }}" name="_token">
          </div>
      </div>
  </form>


</div>

</div>
</div>

</div>
@endsection
