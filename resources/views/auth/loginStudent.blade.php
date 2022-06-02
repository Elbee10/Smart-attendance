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

    <div class="container">
      <form action="{{route('student-access')}}" method="post" class="form-signin" role="form" action="index.html">
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif

                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf
                <h3 class="form-signin-heading">Please sign in</h3>
                <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">
                    <i class="glyphicon glyphicon-user"></i>
                    </div>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" />
                </div>
                </div>

                <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">
                    <i class=" glyphicon glyphicon-lock "></i>
                    </div>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
                </div>
                </div>

                <label class="checkbox">
                <input type="checkbox" value="remember-me"> &nbsp Remember me
                </label>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div>
    <div class="clearfix"></div>
    <br><br>
    <!--footer-->
   

</main>

@endsection 


@section('css') 

@endsection 

@section('scripts') 
@endsection