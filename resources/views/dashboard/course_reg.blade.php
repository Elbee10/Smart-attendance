@extends('layouts.studentLoginNav') 
@section('content')
<main>
    <!--<div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form action="{{route('student-access')}}" method="post">
                            @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif

                            @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                                <div class="col-md-6">
                                    <input type="text" id="username" class="form-control" name="username" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                <a href="#" class="btn btn-link">
                                    Forgot Your Password?
                                </a>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div> !-->
                    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Register courses</h5>
                        </div>
                        <form action="{{route('course-registration')}}" method="post"  role="form">
                      
                            <div class="modal-body">
                            
                            @csrf
                            <select class="form-select" name="courses[]" data-container="#modal" data-filter="true" aria-label="multiple select example">
                            @foreach ($courses as $course)
                                <option value="{{ $course->couse_name }}">{{ $course->couse_name }}</option>
                            @endforeach
                            </select>

                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            <h3 id="tables-hover-rows">Already registered courses</h3>
                      
                      <div class="bs-example">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Course Name</th>
                              <th>Course Code</th>
                            </tr>
                          </thead>
                          <tbody>
                        @foreach ($student_course as $key)
                            <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $key->couse_name }}</td>
                              <td>{{ $key->couseID }}</td>
                              
                            </tr>
                        @endforeach
                            
                            
                          </tbody>
                        </table>
                      </div>
                        </form>
                        </div>
                    </div>
                    </div>
    <div class="container">
      <form action="{{route('course-registration')}}" method="post" class="form-signin" role="form">
      
    
                
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif

                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf
                <h3 class="form-signin-heading">Click to Register a course</h3>
                <button type="button" class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#modal">
                    Register course
                </button>
      </form>

    </div>
    <div class="clearfix"></div>
    <br><br>
</main>
@endsection 


@section('css') 

@endsection 

@section('scripts') 
@endsection