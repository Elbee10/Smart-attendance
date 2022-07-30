@extends('layouts.category-nav') 
@section('content')
<main>
<div class="container">

    
    <div class="cardn text-center">
        <div class="card-body">
            <h5 class="card-title">Please select a category</h5>
            <a href="{{route('login-teacher')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Teacher</a>
            <a href="" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Parent</a>
            <a href="{{route('login-student')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Student</a>
        
        </div>
    </div>
     
    </div>
    <div class="clearfix"></div>
    <br><br>

</main>

@endsection 


@section('css') 

@endsection 

@section('scripts') 
@endsection