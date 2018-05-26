@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 ">
          <br>
          <br>
          <br>
          <br>
            <div class="panel panel-default">

                <div class="panel-heading text-center">Edit Student</div>

                <div class="panel-body">
                  <form action="updateStu&{{$id}}" method="post" files="true" enctype="multipart/form-data">
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>Name</label>
                                  <input type="text" id="name" name="name" class="form-control" placeholder="Student Name"
                                  value="{{$stu->name}}" required>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>Course Type</label>
                                   <select class="form-control" name="courseType" id="courseType" value="{{$stu->courseType}}" required>
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
                                  <input type="text" id="roll_No" name="roll_No" class="form-control" placeholder="Roll Number"
                                  value="{{$stu->roll_No}}" required>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>course</label>
                                  <input type="text" id="course" name="course" class="form-control" placeholder="course"
                                  value="{{$stu->course}}" required>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                       <div class="col-md-12 text-right">
                                  <button class="btn btn-success">Update Record</button>
                           <input type="hidden" value="{{ csrf_token() }}" name="_token">
                          </div>
                      </div>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
