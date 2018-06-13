
@extends('layout.weblayout')

@section('content')

    <section id="imgBanner">
        <h2>Student Service</h2>
    </section>

    <section id="aboutUs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="title_area">
                        <h1>Online Verification</h1>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start about us area -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3>Welcome to iisciences to verify your degree/diploma</h3>
                    <p>Please enter below your Registration or Roll Number to verify : </p>
                   <center>
                       <div class="col-md-12">
                           <form action="findStudent" method="post" files="true" enctype="multipart/form-data">
                               <div class="form-group">
                                   <input type="search" class="form-control" id="roll_No" name="roll_No">
                               </div>
                           <button class="btn btn-danger">Check</button>
                           <input type="hidden" value="{{ csrf_token() }}" name="_token">
                           </form>
                   </div></center>
                </div>

            </div>
            <div class="row">

              <div class="col-md-12">
                @if(!empty($studentData))
                <h3>You are verified</h3>
                <table class="table table-striped">
            <thead>
              <tr>
                <th>name</th>
                <th>Father Name</th>
                <th>Roll No</th>
                <th>Course</th>
                <th>Course duration</th>
                <th>email</th>
                <th>Mobile No.</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                    {{$studentData['name']}}
                </td>
                <td>
                    {{$studentData['Father_name']}}
                </td>
                <td>
                    {{$studentData['roll_No']}}
                </td>
                <td>
                    {{$studentData['courseTitle']}}
                </td>
                <td>
                    {{$studentData['courseType']}}
                </td>
                <td>
                    {{$studentData['email']}}
                </td>
                <td>
                    {{$studentData['mobile']}}
                </td>
            </tbody>
          </table>
          @endif
              </div>
              <div class="col-md-12">
                 @if(empty($studentData))
                 <h3>Sorry Your Record Not Found</h3>
                 @endif
              </div>
            </div>
        </div>
    </section>

@endsection
