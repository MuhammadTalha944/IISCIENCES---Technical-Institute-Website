@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">

                <div class="panel-heading text-center"><h3>Add Student</h3></div>

                <div class="panel-body">
                  <div class="col-md-12">
                  <form action="createStudent" method="post" files="true" enctype="multipart/form-data">
                              <center><h2><u>Personal Information</u></h2></center>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Name of Candidate</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Student Name"  >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Father's Name</label>
                                <input type="text" id="Father_name" name="Father_name" class="form-control" placeholder="Student Name"  >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Photo</label>
                                <input type="file" id="image" name="image" class="form-control" placeholder="Student Name"  >
                            </div>
                        </div>
                    </div>

                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>Date of Birth</label>
                                  <input type="date" id="dob" name="dob" class="form-control" placeholder="Student Name"  >
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>gender</label>
                                   <select class="form-control" name="gender" id="courseType"  >
                                       <option value="male" >Male</option>
                                       <option value="female"

                                       >Female</option>
                                   </select>
                              </div>
                          </div>

                      </div>

                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>marital status</label>
                                 <select class="form-control" name="meritalStatus" id="meritalStatus"  >
                                     <option value="married" >married</option>
                                     <option value="unmarried">unmarried</option>
                                 </select>
                            </div>
                        </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>CNIC (enetr without dashes i.e '-')</label>
                                  <input type="text" id="cnic" name="cnic" class="form-control" placeholder="cnic"
                                   maxlength="13"  minlength="13"  >
                              </div>
                          </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Address</label>
                                 <textarea class="form-control" rows="3" id="address" name="address"></textarea>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>city</label>
                                <input type="text" id="city" name="city" class="form-control" placeholder="city"  >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>postal code</label>
                                <input type="text" id="postalCode" name="postalCode" class="form-control" placeholder="postal code"  >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>phone no</label>
                                <input type="text" id="Phone" name="Phone" class="form-control" placeholder="phone no"  >
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>mobile no</label>
                                <input type="text" id="mobile" name="mobile" class="form-control" placeholder="mobile no"  >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="email"  >
                            </div>
                        </div>
                      </div>

                        <center><h2><u>Education</u></h2></center>

                        <div class="row">
                          <div class="col-md-12">
                            <table class="table table-bordered form-group">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Year of Passing</th>
                                    <th>Degree</th>
                                    <th>Subject</th>
                                    <th>Board/University</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>
                                      <div class="form-group">
                                      <input type="text" id="yop1" name="yop1" class="form-control" placeholder="mobile no"  >
                                    </div>
                                    </td>
                                    <td>
                                      <div class="form-group">
                                      <input type="text" id="deg1" name="deg1" class="form-control" placeholder="mobile no"  >
                                    </div>
                                    </td>
                                    <td>
                                      <div class="form-group">
                                      <input type="text" id="sub1" name="sub1" class="form-control" placeholder="mobile no"  >
                                    </div>
                                    </td>
                                    <td>
                                      <div class="form-group">
                                      <input type="text" id="Board1" name="Board1" class="form-control" placeholder="mobile no"  >
                                    </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>
                                      <div class="form-group">
                                      <input type="text" id="yop2" name="yop2" class="form-control" placeholder="mobile no"  >
                                    </div>
                                    </td>
                                    <td>
                                      <div class="form-group">
                                      <input type="text" id="deg2" name="deg2" class="form-control" placeholder="mobile no"  >
                                    </div>
                                    </td>
                                    <td>
                                      <div class="form-group">
                                      <input type="text" id="sub3" name="sub3" class="form-control" placeholder="mobile no"  >
                                    </div>
                                    </td>
                                    <td>
                                      <div class="form-group">
                                      <input type="text" id="Board3" name="Board3" class="form-control" placeholder="mobile no"  >
                                    </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>
                                      <div class="form-group">
                                      <input type="text" id="yop3" name="yop3" class="form-control" placeholder="mobile no"  >
                                    </div>
                                    </td>
                                    <td>
                                      <div class="form-group">
                                      <input type="text" id="deg3" name="deg3" class="form-control" placeholder="mobile no"  >
                                    </div>
                                    </td>
                                    <td>
                                      <div class="form-group">
                                      <input type="text" id="sub3" name="sub3" class="form-control" placeholder="mobile no"  >
                                    </div>
                                    </td>
                                    <td>
                                      <div class="form-group">
                                      <input type="text" id="Board3" name="Board3" class="form-control" placeholder="mobile no"  >
                                    </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>
                                      <div class="form-group">
                                      <input type="text" id="yop4" name="yop4" class="form-control" placeholder="mobile no"  >
                                    </div>
                                    </td>
                                    <td>
                                      <div class="form-group">
                                      <input type="text" id="deg4" name="deg4" class="form-control" placeholder="mobile no"  >
                                    </div>
                                    </td>
                                    <td>
                                      <div class="form-group">
                                      <input type="text" id="sub4" name="sub4" class="form-control" placeholder="mobile no"  >
                                    </div>
                                    </td>
                                    <td>
                                      <div class="form-group">
                                      <input type="text" id="Board4" name="Board4" class="form-control" placeholder="mobile no"  >
                                    </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>5</td>
                                    <td>
                                      <div class="form-group">
                                      <input type="text" id="yop5" name="yop5" class="form-control" placeholder="mobile no"  >
                                    </div>
                                    </td>
                                    <td>
                                      <div class="form-group">
                                      <input type="text" id="deg5" name="deg5" class="form-control" placeholder="mobile no"  >
                                    </div>
                                    </td>
                                    <td>
                                      <div class="form-group">
                                      <input type="text" id="sub5" name="sub5" class="form-control" placeholder="mobile no"  >
                                    </div>
                                    </td>
                                    <td>
                                      <div class="form-group">
                                      <input type="text" id="Board5" name="Board5" class="form-control" placeholder="mobile no"  >
                                    </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                          </div>
                        </div>

                            <center><h2><u>Course Detail</u></h2></center>


                            <div class="row">

                              <div class="col-md-6">
                                <div class="form-group">
                                    <label>Course Title</label>
                                    <input type="text" id="courseTitle" name="courseTitle" class="form-control" placeholder="course title"  >
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label>Course duration</label>
                                    <select class="form-control" name="courseType" id="courseType"  >
                                        <option value="Three month" >3 month</option>
                                        <option value="Six month">6 month</option>
                                        <option value="One Year" >1 year diploma</option>
                                        <option value="Two Year">2 year diploma</option>
                                        <option value="Degree Program">Degree Program</option>
                                    </select>
                                </div>
                              </div>

                            </div>

                            <div class="row">

                              <div class="col-md-6">
                                <div class="form-group">
                                    <label>Session</label>
                                    <input type="text" id="session" name="session" class="form-control" placeholder="Session"  >
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label>Institute Name</label>
                                    <input type="text" id="instituteName" name="instituteName" class="form-control" placeholder="Institute Name"  >
                                </div>
                              </div>

                            </div>

                            <center><h2><u>For Office Use</u></h2></center>
                            <div class="row">

                              <div class="col-md-6">
                                <div class="form-group">
                                    <label>registration No.</label>
                                    <input type="text" id="reg_No" name="reg_No" class="form-control" placeholder="Registration No"  >
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label>Roll No.</label>
                                    <input type="text" id="roll_No" name="roll_No" class="form-control" placeholder="Roll No."  >
                                </div>
                              </div>

                            </div>

                            <div class="row">

                              <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date of Registration</label>
                                    <input type="date" id="dateOfReg" name="dateOfReg" class="form-control" placeholder="Session"  >
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date of Complition</label>
                                    <input type="date" id="completionDate" name="completionDate" class="form-control" placeholder="course duration"  >
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
    </div>
</div>
@endsection
